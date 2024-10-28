<?php

namespace App;

use App\Services\Geolocation\GeolocationFacade;
use App\Services\Geolocation\Geolocation;

class Playground{
    public function __construct(Geolocation $geolocation){
        //$geolocation = app(Geolocation::class);
        $result = GeolocationFacade::search('a');

        dump($result);
    }

}
