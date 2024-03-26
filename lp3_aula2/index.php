<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
</head>
<body>
    <h1>Vetores</h1>

    <?php
        $vetor1 = array(85, 54, 76, 15, 3);
        $vetor2 = [1, 2, 3, 4, 5];

        for($i=0; $i<count($vetor1); $i++)
            echo $vetor1[$i] . " ";
        
        echo "<br/>";

        $i = 0;
        while($i < count($vetor2)){
            echo $vetor2[$i] . " ";
            $i++;
        }
    ?>

</body>
</html>