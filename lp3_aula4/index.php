<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-3 mb-3">Formulário de dados</h2>

        <form action="envio.php">
            <div class="mb-3">
                <label for="name" class="form-label">Nome completo:</label>
                <input name="nome" type="text" class="form-control" id="name" placeholder="Seu nome completo">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Endereço de email:</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="exemplo@exemplo.com">
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>

    <!--Bootstrap JS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</body>
</html>