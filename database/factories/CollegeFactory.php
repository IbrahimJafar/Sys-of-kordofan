<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\College;
use Faker\Generator as Faker;

$factory->define(College::class, function (Faker $faker) {
    $name = $faker->name;
    $slug = $name . '-' . $faker->date();
    return [
        'type' => $faker->randomElement(['faculty','institute','deanship']),
        'ar_title' => $name,
        'en_title' => $faker->name,
        'ar_description' => $faker->sentence,
        'en_description' => $faker->sentence,
        'started_at' => $faker->date(),
        'lat' => $faker->latitude,
        'lng' => $faker->longitude,
        'profile_image' => $faker->imageUrl(500,500),
        'cover_image' => $faker->imageUrl(1920,1080),
        'slug' =>$faker->sentence
    ];
});
