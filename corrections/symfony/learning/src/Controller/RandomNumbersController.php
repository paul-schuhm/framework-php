<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;
use Symfony\Component\Routing\Attribute\Route;

/**
 * Enumerations : créer un type particulier pour 
 * gérer un ensemble fini de valeurs métiers
 */
enum NumberType: string
{
    case Int = 'int';
    case Float = 'float';
}


final class RandomNumbersController extends AbstractController
{
    #[Route('/random-numbers/{type}', name: 'random_numbers', requirements: ['type' => 'float|int'], methods: ['GET'])]
    public function index(
        NumberType $type = NumberType::Int, //Validation de paramètre d'URL par Backed Enum (@see https://symfony.com/doc/current/routing.html#backed-enum-parameters)
        #[MapQueryParameter] int $min = 0,
        #[MapQueryParameter] int $max = 100,
        #[MapQueryParameter] int $quantity = 1000
    ): Response {

        //min > max et quantity > 1
        if ($min > $max || !($quantity > 0)) {
            //Erreur client : 4XX
            //Mécanisme Exception : Des qu'une exception est levée, l'execution s'arrête
            throw $this->createNotFoundException("Intervalle ou quantité invalide");
        }

        $numbers = $this->generateRandomNumbers($type, $min, $max, $quantity);
        return new Response(implode(', ', $numbers));
    }

    #[Route('/roll-dice-d6', name: 'roll_dice_d6', methods: ['GET'])]
    public function rolldiced6(): Response
    {
        //Faire une redirection permantente vers /random-numbers?min=1&max=7&quantity=1
        //équivalent à générer un jet de dé à 6 faces.
        return $this->redirectToRoute(
            'random_numbers',
            ['min' => 1, 'max' => 7, 'quantity' => 1, 'type' => 'int'],
            301
        );
        // $numbers = $this->generateRandomNumbers(NumberType::Int, 1, 7, 1);
        // return new Response($numbers[0]);
    }

    /**
     * 
     */
    public function generateRandomNumbers(NumberType $type, float $min, float $max, int $quantity): array
    {
        $generator = new \Random\Randomizer();

        switch ($type) {
            case NumberType::Int:
                //Fonction fléchée anonymes
                $generateNextNumber = fn() => $generator->getInt($min, $max - 1);
                break;
            case NumberType::Float:
                $generateNextNumber = fn() => round($generator->getFloat($min, $max), 2);
                break;
            default:
                throw new \Exception("Unknow type of numbers");
        }

        $numbers = [];

        for ($i = 0; $i < $quantity; $i++) {
            $numbers[] = $generateNextNumber();
        }

        return $numbers;
    }
}
