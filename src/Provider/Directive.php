<?php

namespace Shevaua\LaravelSeo\Provider;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

use Shevaua\LaravelSeo\SeoPage;
use Shevaua\LaravelSeo\Facade\SeoPage as SeoPageFacade;

class Directive extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SeoPage::class, function($app) {
            return SeoPageFacade::getInstance();
        });
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
            return '<?= $__env->make(\'shevaua/laravel-seo::seo\')->render() ?>';
        });
    }

}
