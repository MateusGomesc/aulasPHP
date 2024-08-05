<?php

$jogo = $_POST['jogo'];
$numero_integrantes = $_POST['numero_integrantes'];
$regras = $_POST['regras'];

include '../includes/connection.php';

// Insert data in database
$sql = "INSERT INTO jogos(jogo, numero_integrantes, regras) VALUES ('$jogo', '$numero_integrantes', '$regras')";
$result = $connection->query($sql);

// close connection
mysqli_close($connection);

header("location: ./ ");