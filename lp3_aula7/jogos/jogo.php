<?php
$gameId = $_GET['id'];

include '../includes/connection.php';

// receive participant information
$sql = 'SELECT * FROM jogos WHERE id=' . $gameId;
$result = $connection->query($sql);

// close connection
mysqli_close($connection);

// trasform result in object
$game = mysqli_fetch_object($result);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php include '../includes/head.php'; ?>
</head>

<body>
    <div class="container-fluid vh-100">
        <div class="row">
            <?php include '../includes/menu.php'; ?>
            <div class="container-data col-9 pt-3 p-5 h-100">
                <h1 class="mt-2 mb-5 text-center display-4">OptiManage</h1>
                <div class="mb-3 row g-3">
                    <h5 class="display-6">Dados do jogo:</h5>
                    <div class="fs-5 d-flex gap-2 col-md-6">
                        <span class="fw-bold">Jogo:</span>
                        <p><?php echo $game->jogo; ?></p>
                    </div>
                    <div class="fs-5 d-flex gap-2 col-md-6">
                        <span class="fw-bold">Numero de integrantes:</span>
                        <p><?php echo $game->numero_integrantes; ?></p>
                    </div>
                    <div class="fs-5 d-flex gap-2 col-12">
                        <span class="fw-bold">Regras:</span>
                        <p><?php echo $game->regras; ?></p>
                    </div>
                </div>
                <a href='./' class='btn btn-dark ms-2'>Voltar</a>
            </div>
        </div>
    </div>

    <?php include '../includes/script.php'; ?>
</body>

</html>