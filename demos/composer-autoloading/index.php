<?php

//Exercice 1

//Charger l'autoloader généré par Composer (respecte le standard PSR-4)
require 'vendor/autoload.php';

use MDS\DemoAutoloading\Models\CityWithArea;

//Instancier à partirRezé d'une classe
new CityWithArea("Reze", "Loire-Atlantique", "Pays de la Loire");
new CityWithArea("Rezé", "Loire-Atlantique", "Pays de la Loire");
new CityWithArea("Saint-Quentin", "Aisne", "Hauts-de-France");
new CityWithArea("Salaunes","Gironde", "Nouvelle-Aquitaine");

//Appel d'une méthode statique
CityWithArea::printLongestName();