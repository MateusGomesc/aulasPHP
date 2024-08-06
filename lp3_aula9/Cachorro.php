<?php

require_once "Mamifero.php";
class Cachorro extends Mamifero{
    private $numMotoqueiros;

    public function latir(){
        echo "Au Au Au Au!";
    }

    public function getMotoqueiros(){
        return $this->numMotoqueiros;
    }

    public function setMotoqueiros($numMotoqueiros){
        $this->numMotoqueiros = $numMotoqueiros;
    }
}