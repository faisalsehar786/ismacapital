<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\helpers\CustomHelper;
class CustomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('CH',function($app){
            return new CustomHelper();
        });
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
