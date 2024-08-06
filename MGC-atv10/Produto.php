<?php

class Produto{
    public $nome;
    public $preco;
    public $estoque;

    public function valorEstoque(){
        echo "Preço em estoque de $this->nome: R$" . $this->preco * $this->estoque . "<br/>";
    }

    public function disponivel(){
        if(!$this->estoque){
            echo "Produto não está disponível<br/>";
        }
        else{
            echo "Produto está disponível<br/>";
        }
    }
}