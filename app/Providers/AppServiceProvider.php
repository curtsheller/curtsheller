<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        //  Custom blade directives
        Blade::if('env', function ($environment) {
            return app()->environment($environment);
        });

        // Blade::component('components.card', 'card');
        // Blade::component('components.cardheader', 'cardheader');
        Blade::component('components.callout', 'callout');
        // Blade::component('components.mini_nav', 'mininav');
    }
}
