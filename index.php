<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <title>Index</title>
</head>
<body>

<?php
include("Class/ClassCrud.php");//pega o arquivo ClassCrud na pasta Class//
?>


<!--Menu!-->
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Parking</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="cadastro.php">Cadastro</a>
      </li>
    </ul>
  </div>
</nav>


<h3 class=" mt-4">Login: </h3>
 <div class="card mt-4">
     <div class="card-body">
  <form action="Controllers/ControllerLoginUser.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Endereço de email: </label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Seu email">
    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha: </label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="password">
  </div>
  <button type="submit" class="btn btn-success">Entrar</button>
</form>
</div>
</div>

<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© MGBS Ltda:
    <a href="http://github.com/miguelgabriel01">mgbs@discente.ifpe.edu.br</a>
  </div>
  <!-- Copyright -->

</footer>

</body>
</html>