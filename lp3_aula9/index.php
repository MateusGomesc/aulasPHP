<?php

require_once "./Cachorro.php";
require_once "./Gato.php";
require_once "./Cavalo.php";

$cachorro = new Cachorro();
$gato = new Gato();
$cavalo = new Cavalo();

$cachorro->setNome("Gustavo");
$cachorro->setMarca("Vira Lata");
$cachorro->setPeso(78);
$cachorro->setCor("Pardo");
$cachorro->setPorte("Grande");
$cachorro->setEspecie("Canis lupus familiares");
$cachorro->setMotoqueiros(48);

$gato->setNome("Gomes");
$gato->setMarca("Bonito");
$gato->setPeso(68);
$gato->setCor("Branquelo");
$gato->setPorte("Grande");
$gato->setEspecie("gomis domesticus");
$gato->setVidas(7);

$gato->setNome("Filipim");
$gato->setMarca("Manga larga marchador");
$gato->setPeso(20);
$gato->setCor("marrom");
$gato->setPorte("minusculo");
$gato->setEspecie("equinos");
$cavalo->setFerradura(true);

echo "<pre>";
var_dump($cachorro);
var_dump($gato);
var_dump($cavalo);