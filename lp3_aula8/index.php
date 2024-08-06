<?php

require_once "Cachorro.php";

$cachorro = new Cachorro();

$cachorro->nome = "Paulão";
$cachorro->raca = "Pinscher";
$cachorro->corPelo = "Preto";
$cachorro->peso = "1 kg";
$cachorro->porte = "Grande";

$outroCachorro = new Cachorro();

$outroCachorro->nome = "Pitoco";
$outroCachorro->raca = "Labrador";
$outroCachorro->corPelo = "Branco";
$outroCachorro->peso = "56 kg";
$outroCachorro->porte = "Médio";

$cachorro->dormir();
$outroCachorro->morder();
$cachorro->latir();
$outroCachorro->dormir();
$cachorro->morder();
$outroCachorro->latir();