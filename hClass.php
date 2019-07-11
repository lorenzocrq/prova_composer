<?php

namespace myClass;

class Hclass{

    private $variabile;

    public function __construct()
    {
        $this->variabile="ciao";
    }
    public function getVariabile(){
        return $this->variabile;
    }

}