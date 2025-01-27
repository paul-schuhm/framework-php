<?php

namespace App\Service;

use App\Model\NumberType;

class RandomNumberGenerator
{

    public function __construct()
    {  
    }

    public function generateNumbers(string $type, float $min, float $max, int $quantity): array
    {
        //min > max et quantity > 1
        if ($min > $max || !($quantity > 0)) {
            throw new \Exception("Intervalle invalide ou quantité invalide");
        }

        $generator = new \Random\Randomizer();

        switch (NumberType::from($type)) {
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
