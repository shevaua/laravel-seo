<?php

namespace Shevaua\LaravelSeo\Provider;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class Directive extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $path = realpath(__DIR__.'/../../views');
        $this->loadViewsFrom($path, 'shevaua/laravel-seo');
        Blade::directive('seo', function ($param = null) {
            return view('shevaua/laravel-seo::seo')->render();
        });
    }

}
