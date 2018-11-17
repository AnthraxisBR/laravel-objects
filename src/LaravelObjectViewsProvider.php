<?php

namespace AnthraxisBR\LaravelObjectViews;

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
        $this->app->bind('AnthraxisBR\LaravelObjectViews\ObjectView', function ($app) {
            return new \AnthraxisBR\LaravelObjectViews\ObjectViewCore($app->make('request'));
        });

        $this->app->bind('AnthraxisBR\LaravelObjectViews\Events', function ($app) {
            return new \AnthraxisBR\LaravelObjectViews\ObjectViewCore($app->make('request'));
        });
    }
}
