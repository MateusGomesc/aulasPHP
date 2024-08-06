<?php

class Mamifero{
    private $nome;
    private $marca;
    private $peso;
    private $porte;
    private $cor;
    private $especie;

    public function acordar(){

    }

    public function dormir(){

    }

    public function locomover(){

    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($peso){
        $this->peso = $peso;
    }

    public function getCor(){
        return $this->cor;
    }

    public function setCor($cor){
        $this->cor = $cor;
    }

    public function getPorte(){
        return $this->porte;
    }

    public function setPorte($porte){
        $this->porte = $porte;
    }

    public function getEspecie(){
        return $this->especie;
    }

    public function setEspecie($especie){
        $this->especie = $especie;
    }
}