<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas Vindas</title>
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-3 mb-3">
            <?php
                $nome = $_POST['nome'];
                echo "Olá <span class='text-info-emphasis'>" . $nome . "</span>!👋"
            ?>
        </h2>

        <div class="card p-3 border border-primary">
            <h5 class="pb-2">Informações:</h5>

            <?php
                $date = $_POST['data'];
                $timestamp = strtotime($date);
                $dataFormatada = str_replace("-", "/", date("d-m-y", $timestamp));
                $sexo = $_POST['sexo'];
                $descricao = $_POST['descricao'];
            ?>

            <div class="d-flex flex-wrap gap-2">
                <p class="text-info-emphasis">Data de nascimento:</p>
                <p><?php echo $dataFormatada; ?></p>
            </div>
            <div class="d-flex flex-wrap gap-2">
                <p class="text-info-emphasis">Sexo:</p>
                <?php 
                    switch($sexo){
                        case 0:
                            echo "Feminino";
                            break;
                        case 1:
                            echo "Masculino";
                            break;
                        case 2:
                            echo "Não foi informado";
                            break;
                        default:
                            echo "";
                            break;
                    }
                ?>
            </div>
            <div class="d-flex flex-wrap gap-2">
                <p class="text-info-emphasis">Descrição:</p>
                <?php echo $descricao; ?>
            </div>
        </div>
    </div>

    <!--Bootstrap JS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</body>
</html>