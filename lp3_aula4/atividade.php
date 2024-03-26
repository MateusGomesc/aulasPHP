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
        <h3 class="text-center mb-3 mt-3 text-info-emphasis">Formulário de Cadastro</h3>

        <form action="envioAtividade.php" class="d-flex justify-content-center align-items-center flex-column">
            <div class="mb-3 w-50">
                <label for="name" class="form-label">Nome:</label>
                <input name="nome" type="text" class="form-control border border-primary" id="name" placeholder="Digite seu nome">
            </div>
            <div class="mb-3 w-50">
                <label for="date" class="form-label">Data de Nascimento:</label>
                <input name="data" type="date" class="form-control border border-primary" id="date">
            </div>
            <div class="mb-3 w-50">
                <label for="gender" class="form-label">Sexo:</label>
                <select class="form-select border border-primary" id="gender" name="sexo">
                    <option selected disabled>Sexo</option>
                    <option value="1">Masculino</option>
                    <option value="0">Feminino</option>
                    <option value="2">Prefiro não informar</option>
                </select>
            </div>
            <div class="mb-3 w-50">
                <label for="description" class="form-label">Descrição:</label>
                <textarea name="descricao" class="form-control border border-primary" id="description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-dark">Enviar</button>
        </form>
    </div>

    <!--Bootstrap JS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</body>
</html>