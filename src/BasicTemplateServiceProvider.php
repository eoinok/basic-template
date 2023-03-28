<?php

namespace eoinok\BasicTemplate;

use Illuminate\Support\ServiceProvider;

class BasicTemplateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'basictemplate');
		
		
        
        $this->publishes([
            __DIR__ . '/../views' => base_path('resources/views/vendor/basictemplate')
        ]);

        //Paginator::defaultView('basictemplate::common.paginator');
        //Paginator::defaultSimpleView('basictemplate::common.simple_paginator');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
