<?php

if(isset($_GET['id'])){
    $gameId = $_GET['id'];

    include '../includes/connection.php';

    // delete client with id
    $sql = 'DELETE FROM jogos WHERE id=' . $gameId;
    $result = $connection->query($sql);

    // close connection
    mysqli_close($connection);

    header('location: ../jogos');
}