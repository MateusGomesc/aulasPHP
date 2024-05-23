<?php
    $schoolName = $_POST['schoolName'];
    $managerName = $_POST['managerName'];
    $schoolType = $_POST['schoolType'];
    $sports = $_POST['sports'];
    $obs = $_POST['obs'];
    $escolarity = $_POST['escolarity'];
    $numberSchool = $_POST['numberSchool'];
    $emailSchool = $_POST['emailSchool'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center mb-3 mt-3">
        <h1 class="display-5">Confirmação dos dados</h1>

        <div class="container mb-3 mt-3 p-3 border border-success border-opacity-75 rounded">
            <div class="mb-3 d-flex gap-3">
                <p class="fw-bold">Nome da escola: </p>
                <p><?php echo $schoolName; ?></p>
            </div>
            <div class="mb-3 d-flex gap-3">
                <p class="fw-bold">Nome do diretor: </p>
                <p><?php echo $managerName; ?></p>
            </div>
            <div class="mb-3 d-flex gap-3">
                <p class="fw-bold">Tipo: </p>
                <p><?php echo $schoolType; ?></p>
            </div>
            <div class="mb-3 d-flex gap-3">
                <p class="fw-bold">Nível de escolaridade: </p>
                <p><?php echo $escolarity; ?></p>
            </div>
            <div class="mb-3 d-flex gap-3">
                <p class="fw-bold">Email: </p>
                <p><?php echo $emailSchool; ?></p>
            </div>
            <div class="mb-3 d-flex gap-3">
                <p class="fw-bold">Telefone: </p>
                <p><?php echo $numberSchool; ?></p>
            </div>
            <div class="mb-3">
                <p class="text-start fw-bold">Esportes inscritos: </p>
                <ul class="list-group">
                    <?php
                        for($i=0; $i<count($sports); $i++){
                            echo "<li class='list-group-item'>" . $sports[$i] ."</li>";
                        }

                    ?>
                </ul>
            </div>
            <div class="mb-3 d-flex gap-3">
                <p class="fw-bold">Observações: </p>
                <p><?php echo $obs; ?></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>