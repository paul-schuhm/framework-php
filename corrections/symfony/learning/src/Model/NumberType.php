<?php

namespace App\Model;

/**
 * Enumerations : créer un type particulier pour 
 * gérer un ensemble fini de valeurs métiers
 */
enum NumberType: string
{
    case Int = 'int';
    case Float = 'float';
}
