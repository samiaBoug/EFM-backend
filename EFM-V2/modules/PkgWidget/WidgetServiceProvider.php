<?php

namespace Modules\PkgWidget;

use Illuminate\Support\ServiceProvider;

class WidgetServiceProvider extends ServiceProvider
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
        //
        $this->loadViewsFrom(__DIR__ . '/Views', 'pkgWidget');
    
    }
}
