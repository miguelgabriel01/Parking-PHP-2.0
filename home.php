
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <title>Home</title>
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
        <a class="nav-link" href="cadastroVeiculo.php">Cadastrar novo veiculo</a>
      </li>
    </ul>
  </div>
</nav>

<!--img inicial!-->
<img src="public/img/carro3.jpeg" class="img-fluid" alt="Imagem responsiva">

<!--verifica se o form ira ser usado para cadastro ou atualização!-->

 <div class="card">
  <div class="card-body">
  <h1>Veiculos cadastrados:</h1>
  </div>
</div>


     <!-- Estrutura de loop -->
     <?php
     $Crud=new ClassCrud();
     $BFetch=$Crud->selectDB(
         "*",
         "vehicles",
         "",
         array()
     );

     while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
     ?>

<div class="jumbotron">
<h1 class="display-4 "><?php echo $Fetch['model']; ?></h1>
<strong>Descrição do veiculo: </strong> <?php echo $Fetch['description']; ?><br>
<hr class="my-2">
    <strong>Preço(Valor de venda*): </strong> <?php echo $Fetch['price']; ?><br><br>

    <a href="<?php echo "vizualizar.php?id={$Fetch['id']}"; ?>"><button type="button" class="btn btn-success">Visualizar</button></a>

         <a href="<?php echo "Controllers/controllerDeletar.php?id={$Fetch['id']}"; ?>"><button type="button" class="btn btn-danger">Deletar</button></a>
         <a href="<?php echo "cadastroVeiculo.php?id={$Fetch['id']}"; ?>"><button type="button" class="btn btn-primary">Atualizar</button></a>
            
         
    </div>





     <?php } ?>
</table>


<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© MGBS Ltda:
    <a href="http://github.com/miguelgabriel01">mgbs@discente.ifpe.edu.br</a>
  </div>
  <!-- Copyright -->

</footer>


</body>
</html>