<?php

namespace QuickLaravel;

use Illuminate\Support\ServiceProvider;

/**
 * 服务提供者类
 */
class QuickLaravelProvider extends ServiceProvider
{

    /**
     * Register services.
     * @return void
     */
    public function register()
    {
        $this->app->singleton('QuickLaravel', function (array $app) {
            return new QuickLaravel();
        });
    }

    /**
     * Bootstrap services.
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path('quick-laravel.php'),
        ], 'quick-laravel');
    }

}
