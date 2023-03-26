<?php

namespace eoinok\basic-template;

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
        $this->loadViewsFrom(__DIR__.'/../views', 'basic-template');
		
		
        
        $this->publishes([
            __DIR__ . '/../views' => base_path('resources/views/vendor/basic-template')
        ]);

        Paginator::defaultView('basic-template::common.paginator');
        Paginator::defaultSimpleView('basic-template::common.simple_paginator');
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
