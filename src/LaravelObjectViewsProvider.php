<?php

namespace GabrielMourao\LaravelObjectViews;

use Illuminate\Support\ServiceProvider;

class LaravelObjectViewsProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('GabrielMourao\LaravelObjectViews\ObjectView', function ($app) {
            return new \GabrielMourao\LaravelObjectViews\ObjectViewCore($app->make('request'));
        });

        $this->app->bind('GabrielMourao\LaravelObjectViews\Events', function ($app) {
            return new \GabrielMourao\LaravelObjectViews\ObjectViewCore($app->make('request'));
        });
    }
}
