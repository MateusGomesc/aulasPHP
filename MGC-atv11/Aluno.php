<?php

require_once "./Pessoa.php";
class Aluno extends Pessoa{
    private $notas;
    private $matricula;

    public function getNotas(){
        return $this->notas;
    }

    public function setNotas($notas){
        $this->notas = $notas;
    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    private function getSum($array){
        $sum = 0;
        for($i=0; $i<count($array); $i++){
            $sum += $array[$i];
        }
        return $sum;
    }

    public function getMedia(){
        echo $this->getNome() . ": " . $this->getSum($this->notas) / count($this->notas) . "<br/>";
    }

    public function aprovado(){
        $quantNotas = count($this->notas);
        $porcentagem = ($this->getSum($this->notas) * 100) / ($quantNotas * 10);

        if($porcentagem > 60){
            echo $this->getNome() . " aprovado<br/>";
        }
        else{
            echo $this->getNome() . " reprovado<br/>";
        }
    }
}