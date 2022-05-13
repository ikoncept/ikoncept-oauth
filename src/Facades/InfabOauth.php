<?php

namespace Ikoncept\IkonceptOauth\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ikoncept\IkonceptOauth\IkonceptOauth
 */
class IkonceptOauth extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ikoncept-oauth';
    }
}
