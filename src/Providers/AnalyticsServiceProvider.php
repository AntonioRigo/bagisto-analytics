<?php

namespace Tapstar\Analytics\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class AnalyticsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(dirname(__DIR__).'/Config/system.php', 'core');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadTranslationsFrom(__DIR__.'/../Resources/lang', 'analytics');

        $this->loadViewsFrom(__DIR__.'/../Resources/views', 'analytics');

        Event::listen('bagisto.shop.layout.head.after', static function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('analytics::head');
        });

        Event::listen('bagisto.shop.layout.body.before', static function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('analytics::body');
        });

        Event::listen('bagisto.shop.checkout.success.image.before', static function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('analytics::purchase');
        });
    }
}
