<?php

/**
 * Quelle est la différence entre static et self ?
 * Tous deux font référence à la classe où ces instructions sont utilisées.
 * Mais elles se comportent différemment, notamment dans le cadre de l'héritage.
 */

class Furniture {
    protected static $category = 'General';

    public static function describe() {

        //Changer static par self et observer le résultat

        //static::$category : résolu à l'execution, fait référence à la classe sur laquelle la méthode 'describe' est appelée, et donc sur sa valeur de $category(Chair ici).
        //Changement de comportement possible en héritage (late binding)

        //self::$category : résolu à la compilation, fait référence à la classe sur laquelle le mot clef est utilisé, non à  la classe sur laquelle la méthode est appelée (Furniture ici)
        //Changement de comportement/valeur impossible via l'héritage
        return 'This is a ' . self::$category . ' piece of furniture.' . PHP_EOL;
    }
}

class Chair extends Furniture {
    //Overriding de la valeur statique dans la classe enfant
    protected static $category = 'Chair';
}

echo Furniture::describe(); 
echo Chair::describe();
