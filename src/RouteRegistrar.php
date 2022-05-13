<?php

namespace Ikoncept\IkonceptOauth;

use Illuminate\Contracts\Routing\Registrar as Router;
use Illuminate\Support\Facades\Route;

class RouteRegistrar
{
    /**
     * The router implementation.
     *
     * @var \Illuminate\Contracts\Routing\Registrar
     */
    protected $router;

    /**
     * Create a new route registrar instance.
     *
     * @param  \Illuminate\Contracts\Routing\Registrar  $router
     * @return void
     */
    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    /**
     * Register routes forPublic API endpoints.
     *
     * @return void
     */
    public function all(): void
    {
        Route::get('login/ikoncept',  [\Ikoncept\IkonceptOauth\Http\Controllers\AuthController::class, 'redirectToProvider'])
            ->middleware(['web']);
        Route::get('login/ikoncept/callback', [\Ikoncept\IkonceptOauth\Http\Controllers\AuthController::class, 'handleProviderCallback'])
            ->middleware(['web']);
    }
}
