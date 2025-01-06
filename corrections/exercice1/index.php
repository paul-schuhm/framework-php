<?php

//Dépendance
require_once __DIR__ . '/CityWithArea.php';

//Exercice 1

//Instancier à partirRezé d'une classe
new CityWithArea("Reze", "Loire-Atlantique", "Pays de la Loire");

new CityWithArea("Rezé", "Loire-Atlantique", "Pays de la Loire");

// new CityWithArea("Saint-Quentin", "Aisne", "Hauts-de-France");

// new CityWithArea("Salaunes","Gironde", "Nouvelle-Aquitaine");

//Appel d'une méthode statique
City::printLongestName();