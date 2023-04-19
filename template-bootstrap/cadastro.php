<?php
include_once ("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastro Site</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="cadastro.css">
</head>
<body>
<div class="container">
<div class="container mt-3" id="formu">
  <h2>Adicione aqui suas informações para contato!</h2>
  <form action="cadastro.php">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Salvar</button>
  </form>
</div>
</div>



</body>
</html>
