<?php

require_once "Mamifero.php";
class Gato extends Mamifero{
    private $numVidas;

    public function miar(){
        echo "Miau!";
    }

    public function getVidas(){
        return $this->numVidas;
    }

    public function setVidas($numVidas){
        $this->numVidas = $numVidas;
    }
}