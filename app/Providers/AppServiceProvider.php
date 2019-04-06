<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Routing\ResponseFactory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * All of the container bindings that should be registered.
     * 
     * @var array
     */
    public $bindings = [
        ServerProvider::class => DigitalOceanServerProvider::class,
    ];

    /**
     * All of the container singletons that should be registered.
     * 
     * @var array
     */
    public $singletons = [
        ServerProvider::class => PingdomDowntiemNotifier::class,
    ];

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
    public function boot(ResponseFactory $response)
    {
        view()->composer('view',function(){
            //
        });
        
        $response->macro('caps',function($value){
            //
        });
    }
}
