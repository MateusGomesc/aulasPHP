<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3 mb-3">
        <h1 class="display-5 text-center">Cadastro da escola</h1>

        <form action="gravarDados.php" method="post" class="p-5">
            <div class="mb-3">
                <label for="schoolName" class="form-label">Nome da escola:</label>
                <input type="text" class="form-control" id="schoolName" name="schoolName" placeholder="Digite o nome da escola" required>
            </div>
            <div class="mb-3">
                <label for="managerName" class="form-label">Nome do diretor:</label>
                <input type="text" class="form-control" id="managerName" name="managerName" placeholder="Digite o nome do diretor" required>
            </div>
            <div class="mb-3">
                <label for="emailSchool" class="form-label">Email:</label>
                <input type="email" class="form-control" id="emailSchool" name="emailSchool" placeholder="example@example.com" required>
            </div>
            <div class="mb-3">
                <label for="numberSchool" class="form-label">Telefone:</label>
                <input type="tel" class="form-control" id="numberSchool" name="numberSchool" placeholder="(34) 9 9999-9999" required>
            </div>
            <div class="mb-3">
                <label for="select" class="form-label">Selecione o nível de esoclaridade da escola:</label>
                <select class="form-select" aria-label="Default select example" id="select" name="escolarity" required>
                    <option selected>Nível de escolaridade</option>
                    <option value="Ensino infantil">Ensino infantil</option>
                    <option value="Ensino fundamental 1">Ensino fundamental 1</option>
                    <option value="Ensino fundamental 2">Ensino fundamental 2</option>
                    <option value="Ensino médio">Ensino médio</option>
                </select>
            </div>
            <div class="mb-3 d-flex gap-3">
                <label class="form-label" for="type1">Tipo da escola:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="schoolType" id="type1" value="Municipal">
                    <label class="form-check-label" for="type1">
                        Municípal
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="schoolType" id="type2" value="Estadual">
                    <label label class="form-check-label" for="type2">
                       Estadual
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="schoolType" id="type3" value="Federal">
                    <label label class="form-check-label" for="type3">
                       Federal
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="schoolType" id="type4" value="Particular">
                    <label label class="form-check-label" for="type4">
                       Particular
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="sport1">Esportes a serem inscritos:</label>
                <div class="d-flex gap-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Futebol masculino" id="sport1" name="sports[]">
                        <label class="form-check-label" for="sport1">
                            Futebol Masculino
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Futebol feminino" id="sport2" name="sports[]">
                        <label class="form-check-label" for="sport2">
                            Futebol Feminino
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Vôlei masculino" id="sport3" name="sports[]">
                        <label class="form-check-label" for="sport3">
                            Vôlei Masculino
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Vôlei feminino" id="sport4" name="sports[]">
                        <label class="form-check-label" for="sport4">
                            Vôlei Feminino
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="obs" class="form-label">Observações pertinentes da escola:</label>
                <textarea class="form-control" id="obs" rows="3" name="obs"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>