<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model; //ad for 23 line
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::preventLazyLoading();  //ERROR MESSAGE OCCER IF YOU DO NOT ADD LINE 5 : Class "App\Providers\Model" 
    }
}
