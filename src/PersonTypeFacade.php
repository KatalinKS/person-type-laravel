<?php

namespace KatalinKS\PersonType;

use Illuminate\Support\Facades\Facade;

/**
 * @see \KatalinKS\PersonType\PersonType
 */
class PersonTypeFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'person-type-laravel';
    }
}
