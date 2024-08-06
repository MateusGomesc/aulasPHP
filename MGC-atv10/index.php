<?php

require_once "Produto.php";

$p1 = new Produto();
$p2 = new Produto();
$p3 = new Produto();

$p1->nome = "Capacete";
$p1->preco = (float) 29.90;
$p1->estoque = (int) 0;

$p2->nome = "Skate";
$p2->preco = (float) 130.10;
$p2->estoque = (int) 30;

$p3->nome = "Joelheira";
$p3->preco = (float) 10;
$p3->estoque = (int) 100;

$p1->disponivel();
$p1->valorEstoque();

$p2->disponivel();
$p2->valorEstoque();

$p3->disponivel();
$p3->valorEstoque();
