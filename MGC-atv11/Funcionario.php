<?php

require_once "./Pessoa.php";
class Funcionario extends Pessoa{
    private $salario;
    private $cargo;
    private $desconto;

    public function getSalario(){
        return $this->salario;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }

    public function getCargo(){
        return $this->cargo;
    }

    public function setCargo($cargo){
        $this->cargo = $cargo;
    }

    public function getDesconto(){
        return $this->desconto;
    }

    public function setDesconto($desconto){
        $this->desconto = $desconto;
    }


    public function getSalarioLiquido(){
        echo "Salário liquido de " . $this->getNome() . ": " . $this->salario - $this->desconto . "<br/>";
    }
}