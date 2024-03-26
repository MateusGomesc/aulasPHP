<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1</title>
</head>
<body>
    <?php 
        for($i=0; $i <= 20; $i++){
            if($i % 2 == 0)
                echo $i . " par" . "<br>";
            else
                echo $i . " ímpar" . "<br>";
        }
    ?>
</body>
</html>