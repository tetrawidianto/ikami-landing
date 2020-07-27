<?php

namespace IkamiLanding;

use Illuminate\Support\ServiceProvider;

class IkamiLandingServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'ikami-landing');
        
        $this->publishes([
            base_path('/node_modules/startbootstrap-stylish-portfolio') => public_path('vendor/startbootstrap-stylish-portfolio'),
        ], 'ikami-landing');
    }
}