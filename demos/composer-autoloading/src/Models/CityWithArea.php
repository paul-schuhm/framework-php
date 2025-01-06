<?php

namespace MDS\DemoAutoloading\Models;

use MDS\DemoAutoloading\Models\City;

class CityWithArea extends City
{

    public function __construct(
        string $name,
        string $county,
        //Déclaration et assignement (promotion du constructeur)
        private string $area
    ) {
        //Est ce que le constructeur de la classe parente est appelé ? Non !
        //A nous de l'appeler explicitement

        parent::__construct($name, $county);

        //D'autres choses à faire à l'initilisation     
    }

    //Surcharge la méthode __toString
    //de la classe parente
    //Attribut PHP (langage descriptif/métadonnée intégré à PHP depuis PHP 8)
    #[\Override]
    function __toString(): string
    {

        return sprintf(
            "%s de la région %s",
            parent::__toString(),
            $this->area
        );

        //return parent::__toString() . " de la région {$this->area}";
    }
}
