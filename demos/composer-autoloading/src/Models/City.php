<?php

namespace MDS\DemoAutoloading\Models;

//Tout ce qui est déclaré à la suite fait partie du namespace

//Eviter de créer deux namespaces dans un même fichier

class City
{

    public static string $longestName = "";

    //Instancier des objets dans un état valide!
    //Syntaxe: Promotion du constructeur
    function __construct(
        private string $name,
        private string $county
    ) {
        //Verifie est ce que le nom est plus long que celui connu actuellement : Si oui, alors c'est le nouveau nom le plus long, sinon c'est toujours l'ancien.

        if (mb_strlen($name) > mb_strlen(self::$longestName)) {
            self::$longestName = $name;
        }
    }

    public static function printLongestName(): void
    {

        echo sprintf("La ville ayant le nom le plus long: %s", static::$longestName);
    }

    function __toString(): string
    {
        return "La ville {$this->name} est dans le département {$this->county}";
    }
}

