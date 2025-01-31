<?php


require 'vendor/autoload.php';

//Configuration, initialisation de Twig
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'debug' => true,
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());

//Charger le template
$template = $twig->load('page.html.twig');
//Générer la page et l'afficher
echo $template->render();