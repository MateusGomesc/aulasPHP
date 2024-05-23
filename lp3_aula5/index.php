<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-3 mb-3">Cadastro de usuário</h2>

        <form action="envio.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Nome completo:</label>
                <input name="nome" type="text" class="form-control" id="name" placeholder="Seu nome completo" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Endereço de email:</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="exemplo@exemplo.com" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha:</label>
                <input name="password" type="password" class="form-control" id="password" min-lenght="4" max-lenght="10" required>
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>

    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>