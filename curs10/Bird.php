<?php

require_once('Animal.php');
//require_once('MoveInterface.php');


class Bird extends Animal // implements MoveInterface
{
    const wings = 2;


    public function move()
    {
        return 'flying with ' . self::wings . ' wings';
    }
}