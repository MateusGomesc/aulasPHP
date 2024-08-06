<?php

class Pessoa{
    private $nome;
    private $cpf;
    private $data_nascimento;
    private $sexo;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getData(){
        return $this->data_nascimento;
    }

    public function setData($data_nascimento){
        $this->data_nascimento = $data_nascimento;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }
}
