<?php

require_once('MoveInterface.php');
abstract class Animal implements MoveInterface
{
    public string $name;

    protected int $legs;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public function move();

    public function setLegs($legs)
    {

        if (! $this->validateLegs($legs)) {
            exit('Toooo much legs!');
        }
        $this->legs = $legs;
    }

    public function getLegs()
    {
        return 'Abstract animal has no legs';
    }

    private function validateLegs($legs)
    {
        if ($legs !== 4) {
            return false;
        }
        return true;
    }

//    public function(){
//        return $this->bark();
//    }
//    private function bark(){
//        return 'uof uof';
//    }


































}
