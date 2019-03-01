<?php

namespace Shevaua\LaravelSeo\Provider;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

use Shevaua\LaravelSeo\SeoPage;
use Shevaua\LaravelSeo\Facade\SeoPage as SeoPageFacade;

/**
 * Laravel Service Provider
 * 
 * provides: 
 *   1) access to SeoPage singleton
 *   2) ability to use @seo directive
 */
class Directive extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
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
    public function boot(): void
    {
        $path = realpath(__DIR__.'/../../views');
        $this->loadViewsFrom($path, 'shevaua/laravel-seo');
        Blade::directive('seo', function ($param = null) {
            return '<?= $__env->make(\'shevaua/laravel-seo::seo\')->render() ?>';
        });
    }

}
