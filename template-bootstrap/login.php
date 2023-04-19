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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href= "login.css">
</head>
<body>
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="mandrake.jpeg"
                    style="width: 70px;" height="70px" alt="logo" class="logo" >
                  <h4 class="mt-1 mb-5 pb-1">Faça o login aqui</h4>
                </div>

                <form action="index.php">

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example11">Email:</label>
                  <input type="email" id="form2Example11" class="form-control"
                      placeholder="Digite seu email" />
                    
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Senha:</label> 
                  <input type="password" id="form2Example22" class="form-control"  placeholder="Digite a sua senha"/>
                    
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Entrar</button>
                    
                  </div>
                  </form>
                        <form action="cadastro.php">
                        <div class="d-flex align-items-center justify-content-center pb-4" id="linkk">
                            <p class="mb-0 me-2">Não tem uma conta?</p>
                            <button type="submit" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#myModal" id="linkk">Criar uma agora</button>
                        </div>
                        </form>

                        

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Nós somos mais que uma empresa de fotografia.</h4>
                <p class="small mb-0"> Nossa empresa buscar ouvir o cliente e fazer as melhores fotos possíveis, deixando o cliente extremamente confortável!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>