<?php

$gameId = (int) $_POST['id'];
$jogo = $_POST['jogo'];
$numero_integrantes = $_POST['numero_integrantes'];
$regras = $_POST['regras'];

include '../includes/connection.php';

// Insert data in database
$sql = "UPDATE `denis342_lp3`.jogos SET jogo='$jogo', numero_integrantes='$numero_integrantes', regras='$regras' WHERE id=$gameId";
$result = $connection->query($sql);

// close connection
mysqli_close($connection);

header("location: ./ ");