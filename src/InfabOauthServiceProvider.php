<?php

namespace Ikoncept\IkonceptOauth;

use Illuminate\Support\ServiceProvider;

class IkonceptOauthServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/ikoncept-oauth.php' => config_path('ikoncept-oauth.php'),
        ], 'config');
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/ikoncept-oauth.php', 'ikoncept-oauth');
        $this->app->register(EventServiceProvider::class);
    }
}
