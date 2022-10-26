<?php

namespace App\Providers;

use App\College;
use App\Group;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        View::composer('*', function ($view) {
            $displayedSystemGroups = Group::where([[
                'is_system_group',true
            ],['display',true]])->get();

            $unDisplayedSystemGroups = Group::where([[
                'is_system_group',true
            ],['display',false]])->whereNotIn('slug',['application-banner','application-events','application-e-services'])->get();

            $administrationsAndServices = College::where('type','deanship')->get();
            $faculties = College::where('type','faculty')->get();
            $institutes = College::where('type','deanship')->get();
            $view->with([
                'displayedSystemGroups' => $displayedSystemGroups,
                'unDisplayedSystemGroups' => $unDisplayedSystemGroups,
                'institutes' => $institutes,
                'faculties' => $faculties,
                'administrationsAndServices' => $administrationsAndServices,
            ]);
        });
    }
}
