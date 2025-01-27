<?php

namespace App\Controller;

use App\Service\RandomNumberGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;
use Symfony\Component\Routing\Attribute\Route;

final class RandomNumbersController extends AbstractController
{
    #[Route('/random-numbers/{type}', name: 'random_numbers', requirements: ['type' => 'float|int'], methods: ['GET'])]
    public function index(
        RandomNumberGenerator $generator,
        string $type = 'int', //Validation de paramètre d'URL par Backed Enum (@see https://symfony.com/doc/current/routing.html#backed-enum-parameters)
        #[MapQueryParameter] int $min = 0,
        #[MapQueryParameter] int $max = 100,
        #[MapQueryParameter] int $quantity = 1000
    ): Response {

        //Appel le service
        try {
            $numbers = $generator->generateNumbers($type, $min, $max, $quantity);
        } catch (\Exception $e) {
            throw $this->createNotFoundException($e->getMessage());
        }

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
}
