<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3</title>
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4 mt-4">Catálogo de cursos</h1>

        <?php
            $languages = ['HTML5', 'CSS3', 'PHP'];
            $description = [
                'Curso básico HTML5',
                'CSS: básico ao avançado',
                'Intensivão PHP'
            ];
            $images = ['./img/html.jpg', './img/css.jpg', './img/php.jpg'];
        ?>
        <div class="d-flex flex-wrap justify-content-center gap-2 mb-3">
            <?php for($i=0; $i<3; $i++){ ?>
                <div class="card" style="width: 18rem;">
                    <img src=<?php echo $images[$i]; ?> class="card-img-top" alt=<?php echo $languages[$i]; ?> style="height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $languages[$i]; ?></h5>
                        <p class="card-text"><?php echo $description[$i] ?></p>
                        <a href="#" class="btn btn-primary">Matricule-se</a>
                    </div>
                </div>
            <?php } ?>
        </div>
        
        <?php
            $cod = $_GET['cod'];
            $cor = ['primary', 'success', 'danger', 'warning'];
            $message = [
                'Informação do sistema',
                'Gravado com sucesso!',
                'Ocorreu um erro!',
                'Pode ter ocorrido algum erro, entre em contato conosco!'
            ];
        ?>

        <div class="alert alert-<?php echo $cor[$cod] ?>" role="alert">
            <?php echo $message[$cod] ?>
        </div>
    </div>
    

    <!--Bootstrap JS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</body>
</html>