<?php

namespace App;

use App\Services\Geolocation\Geolocation;
use Illuminate\Support\Facades\Facade;

class GeolocationFacade extends Facade{
    protected static function getFacadeAccessor()
    {
        return Geolcation::class;
    }
}
