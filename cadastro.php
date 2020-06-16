<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <title>Cadastro</title>
</head>
<body>

<?php
include("/Class/ClassCrud.php");//pega o arquivo ClassCrud na pasta Class//
?>


<!--Menu!-->
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Parking</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Cadastro</a>
      </li>
    </ul>
  </div>
</nav>

<h3 class="mt-4">Crie sua conta hoje: </h3>
 <div class="card">
     <div class="card-body">
     <form action="Controllers/ControllerCadastroUser.php" method="POST">
             <label for="nome">Nome: </label>
             <input type="text" name="name" id="name" class="form-control" required="">
             <label for="nome">Cpf: </label>
             <input type="text" name="cpf" id="cpf" class="form-control" required="">

             <label for="email">Email: </label>
             <input type="text" name="email" id="" class="form-control" required="">
             <label for="nome">Numero: </label>
             <input type="number" name="number" id="number" class="form-control" required="">

             <label for="senha">Senha: </label>
             <input type="password" name="password" id="password" class="form-control" required="">
             <!--<label for="senha2"> Digite a sua senha novamente: </label>
             <input type="password" name="password2" id="password2" class="form-control" required="">
             !--><button type="submit" class="btn btn-success mt-4">Criar conta</button>

         </form>
     </div>
 </div>