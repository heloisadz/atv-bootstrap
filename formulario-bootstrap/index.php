<?php
include_once ("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
                        <div class="formu">
                                <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Senha</label>
                                    <input type="password" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Nome</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Endereço</label>
                                    <input type="text" class="form-control" id="inputAddress2">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Cidade</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">Estado</label>
                                    <select id="inputState" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>Minas Gerais</option>
                                    <option>Bahia</option>
                                    <option>São Paulo</option>
                                    <option>Alagoas</option>
                                    <option>Paraná</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="inputTelefone" class="form-label">Telefone</label>
                                    <input type="text" class="form-control" id="inputTelefone">
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Lembrar de mim
                                    </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                </div>
                                </form>
                        </div>
</div>
</body>
</html>