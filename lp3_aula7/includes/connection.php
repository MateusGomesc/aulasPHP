<?php

$connection = mysqli_connect("denislima.com.br","denis342_userlp3","1FtW#Lp3t2023","denis342_lp3");

if(!$connection){
    echo "Ocorreu um erro!" . PHP_EOL;
    echo "Error number: " . mysqli_connect_errno() . PHP_EOL;
    echo "Error: " . mysqli_connect_error() . PHP_EOL;
}

// echo "Conexão realizada!" . PHP_EOL;