<?php


require_once ('Animal.php');
//require_once('MoveInterface.php');
final class Dog extends Animal // implements MoveInterface
{
    public function getLegs(){
        return $this->legs;
    }

    public function bark(){
        return 'uof uof ' . $this->name;
    }


    public function move(){
        return 'running...';
    }
}