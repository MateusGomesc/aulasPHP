<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades Aula 2</title>
    <style>
        .border{
            border: 1px black solid;
        }
    </style>
</head>
<body>
    <h1>Atividade 1</h1>

    <?php
        //Crie um vetor de 10 números. Mostre os números e o somatório destes na tela.

        $vetor = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $soma = 0;

        for($i=0; $i<count($vetor); $i++){
            echo $vetor[$i] . "  ";
            $soma += $vetor[$i];
        }

        echo "<br/>Soma: " . $soma;
    ?>

    <h1>Atividade 2</h1>

    <ul>
        <?php
            //Crie um vetor com 5 nomes, exiba a  lista desses nomes na tela

            $nomes = ['Gomes', 'Gustavo', 'Gabriel', 'João', 'Maria'];

            for($i=0; $i<count($nomes); $i++)
                echo "<li>" . $nomes[$i] . "</li>"
        ?>
    </ul>

    <h1>Atividade 3</h1>
    
    <table class='border'>
        <thead>
            <tr >
                <td class='border'>Array normal</td>
                <td class='border'>Array multiplicado</td>
            </tr>
        </thead>
        <?php
            /*Crie um vetor de 10 números. Monte outro vetor com os valores do primeiro multiplicados por 5. 
            Exiba os valores dos dois vetores na tela, simultaneamente, em  duas colunas (um em cada coluna), uma posição por linha*/
            $array = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];
            $res = [];

            for($i=0; $i<count($array); $i++){
                $res[$i] = $array[$i] * 5;
                echo "<tr><td class='border'>" . $array[$i] . "</td><td class='border'>" . $res[$i] . "</td></tr>";
            }
        ?>
    </table>

    <h1>Atividade 4</h1>

    <?php
        //Gerar um vetor com 20 números aleatórios compreendidos entre 0 e 100. Exibir o vetor.
        $array = [];

        for($i=0; $i<20; $i++){
            $array[] = rand(0, 100);
        }

        for($i=0; $i<count($array); $i++){
            echo $array[$i] . " ";
        }
    ?>
</body>
</html>