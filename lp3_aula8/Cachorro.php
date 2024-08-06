<?php

class Cachorro{
    public $nome;
    public $raca;
    public $corPelo;
    public $porte;
    public $peso;

    public function dormir(){
        echo "$this->nome: ZzZzZzZzZzZzZzZz...<br/>";
    }

    public function latir(){
        echo "$this->nome: Au Au Au!<br/>";
    }

    public function morder(){
        echo "$this->nome: Nhack!<br/>";
    }
}