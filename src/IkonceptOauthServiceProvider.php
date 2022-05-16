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

        IkonceptOauth::routes();
    }

    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/ikoncept-oauth.php',
            'services.ikoncept'
        );
        $this->app->register(EventServiceProvider::class);
    }
}
