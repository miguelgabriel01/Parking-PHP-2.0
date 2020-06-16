<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <title>Visualizar</title>
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
        <a class="nav-link" href="#">Cadastro</a>
      </li>
    </ul>
  </div>
</nav>


<?php
        $Crud=new ClassCrud();
        $IdUser=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);

        $BFetch=$Crud->selectDB(
            "*",
            "vehicles",
            "where Id=?",
            array($IdUser)
        );
        $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
    ?>

<div class="jumbotron">
    <h2>Dados do Veiculo: </h2>
    <br>
    <strong>Modelo: </strong> <?php echo $Fetch['model']; ?><br>
    <strong>Cor: </strong> <?php echo $Fetch['color']; ?><br>

    <strong>Placa: </strong> <?php echo $Fetch['board']; ?><br>
    <strong>Numero de portas: </strong> <?php echo $Fetch['doors']; ?><br>
    <strong>Ano de lançamento: </strong> <?php echo $Fetch['launch']; ?><br>
    <strong>Descrição do veiculo: </strong> <?php echo $Fetch['description']; ?><br>
    <strong>Preço(Valor de venda*): </strong> <?php echo $Fetch['price']; ?><br>
    <strong>Numero de propietarios do veiculo: </strong> <?php echo $Fetch['owners']; ?><br>


    <a href="home.php"><button type="button" class="btn btn-dark mt-4 button-left">Voltar para a lista de veiculos</button></a>
    <a href="<?php echo "cadastroVeiculo.php?id={$Fetch['id']}"; ?>"><button type="button" class="btn btn-primary mt-4 button-right">Editar informações</button></a>
    </div>


<!--Slid !-->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="public/img/carro3.jpeg" alt="Primeiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="public/img/carro5.jpg" alt="Segundo Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="public/img/carro6.jpg" alt="Terceiro Slide">
    </div>
  </div>
</div>



<!--foot!-->
    <footer class="page-footer font-small blue">
<!-- Copyright -->
<div class="footer-copyright text-center py-3">© MGBS Ltda:
  <a href="http://github.com/miguelgabriel01">mgbs@discente.ifpe.edu.br</a>
</div>
<!-- Copyright -->

</footer>

</body>
</html>

