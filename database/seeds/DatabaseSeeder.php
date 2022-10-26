<?php

use App\Group;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        factory(App\User::class, 1)->create();
        factory(App\College::class, 25)->create();



        $init_groups = config('init.groups');
        foreach ($init_groups as $group) {
            $created_group = new Group($group);
            $created_group->save();

            if (app()->environment('local', 'development', 'testing')) {
                $len = $faker->numberBetween(1, 25);
                for ($i = 0; $i < $len; $i++) {

                    $data = [
                        'en_title' => $faker->words(10, true),
                        'slug' => $faker->sentence,
                        'ar_title' => $faker->words(10, true),
                        'ar_content' => $faker->text,
                        'en_content' => $faker->sentence,
                    ];

                    if ($created_group->slug == 'system_events') {
                        $data['extra_data'] = json_encode([
                            'event_date' => \Carbon\Carbon::now()->addDays(20)->toDateString()
                        ]);
                    }

                    $post = $created_group->posts()->create($data);

                    $post->images()->create([
                        'url' => "https://picsum.photos/id/" . $faker->numberBetween(1, 500) . "/1000/1000"
                    ]);
                }
            }
        }
    }
}
