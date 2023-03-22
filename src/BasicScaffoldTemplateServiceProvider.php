<?php

namespace eoinok\basic-scaffold-template;

use Illuminate\Support\ServiceProvider;

class BasicScaffoldTemplateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'basic-scaffold-template');
		
		
        
        $this->publishes([
            __DIR__ . '/../views' => base_path('resources/views/vendor/basic-scaffold-template')
        ]);

        Paginator::defaultView('basic-scaffold-template::common.paginator');
        Paginator::defaultSimpleView('basic-scaffold-template::common.simple_paginator');
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
