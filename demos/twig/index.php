<?php


require 'vendor/autoload.php';

//Configuration, initialisation de Twig
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'cache' => 'cache'
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());

//Charger le template
$template = $twig->load('index.html.twig');

//Some data
$numbers = range(0, 100);

class User
{
    public function __construct(
        public string $fullName
    ) {}
}

//Créer le rendu du template et l'afficher (echo)
echo $template->render([
    //Envoyer toutes les données dynamiques
    'message' => '<script>Twig est un moteur de templates extrêment puissant qui échappe tout par défaut !</script>',
    'numbers' => $numbers,
    'user' => new User('john doe')
]);
