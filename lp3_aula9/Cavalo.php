<?php

require_once "Mamifero.php";
class Cavalo extends Mamifero{
    private $ferradura;

    public function relinchar(){
        echo "iiinhooooo";
    }

    public function getFerradura(){
        return $this->ferradura;
    }

    public function setFerradura($ferradura){
        $this->ferradura = $ferradura;
    }
}