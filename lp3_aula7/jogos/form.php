<?php
if (isset($_GET['id'])) {
    $gameId = $_GET['id'];

    include '../includes/connection.php';

    // receive participant information
    $sql = 'SELECT * FROM jogos WHERE id=' . $gameId;
    $result = $connection->query($sql);

    // close connection
    mysqli_close($connection);

    // trasform result in object
    $game = mysqli_fetch_object($result);
} else {
    $gameId = null;
}
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
                <form action=<?php
                if ($gameId) {
                    echo "modify.php";
                } else {
                    echo 'add.php';
                }
                ?> method="POST"
                    class="w-100 grid-center">
                    <input type="hidden" name="id" id="id" value="<?php echo $gameId; ?>">
                    <div class="mb-4">
                        <label for="jogo" class="form-label">Jogo:</label>
                        <input type="text" class="form-control input-blue" name="jogo" id="jogo" placeholder="Digite o nome do jogo" value="<?php if(isset($game)){ echo $game->jogo; } ?>">
                    </div>
                    <div class="mb-4">
                        <label for="numero_integrantes" class="form-label">Número de participantes:</label>
                        <input type="number" class="form-control input-blue" name="numero_integrantes" id="numero_integrantes" placeholder="Digite a quantidade de integrantes" value="<?php if(isset($game)){ echo $game->numero_integrantes; } ?>">
                    </div>
                    <div class="mb-4">
                        <label for="regras" class="form-label">Regras:</label>
                        <textarea class="form-control textarea-blue" name="regras" id="regras" rows="3"><?php if(isset($game)){ echo $game->regras; } ?></textarea>
                    </div>
                    <button type='submit' class='btn btn-blue'>
                        <?php
                        if ($gameId) {
                            echo "Salvar";
                        } else {
                            echo "Cadastrar";
                        }
                        ?>
                    </button>
                    <a href='./' class='btn btn-dark ms-2'>Voltar</a>
                </form>
            </div>
        </div>
    </div>

    <?php include '../includes/script.php'; ?>
</body>

</html>