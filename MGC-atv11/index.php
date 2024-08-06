<?php

require_once "./Aluno.php";
require_once "./Funcionario.php";

$aluno1 = new Aluno();
$aluno1->setNome("Mateus");
$aluno1->setCpf("15007868612");
$aluno1->setData("31/08/2006");
$aluno1->setSexo("Masculino");
$aluno1->setMatricula("15007868612-1");
$aluno1->setNotas([ 10, 9, 8, 7, 4]);
$aluno1->getMedia();
$aluno1->aprovado();

$aluno2 = new Aluno();
$aluno2->setNome("João");
$aluno2->setCpf("12345678910");
$aluno2->setData("20/09/2008");
$aluno2->setSexo("Masculino");
$aluno2->setMatricula("12345678910-1");
$aluno2->setNotas([ 2, 4, 6, 5, 2]);
$aluno2->getMedia();
$aluno2->aprovado();

$funcionario1 = new Funcionario();
$funcionario1->setNome("Gomes");
$funcionario1->setCpf("15007868612");
$funcionario1->setData("31/08/2006");
$funcionario1->setSexo("Masculino");
$funcionario1->setSalario(10000);
$funcionario1->setCargo("Programador");
$funcionario1->setDesconto(1000);
$funcionario1->getSalarioLiquido();

$funcionario2 = new Funcionario();
$funcionario2->setNome("Maria");
$funcionario2->setCpf("98745612332");
$funcionario2->setData("24/01/1986");
$funcionario2->setSexo("Feminino");
$funcionario2->setSalario(1200000);
$funcionario2->setCargo("CEO");
$funcionario2->setDesconto(13000);
$funcionario2->getSalarioLiquido();