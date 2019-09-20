<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RandomQuizProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(`App\Service\RandomQuizInterface`, `App\Service\RandomQuizService`);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
