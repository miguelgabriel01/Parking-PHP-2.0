<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <title>Cadastrar novo veiculo</title>
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
        <a class="nav-link" href="home.php">Inicio</a>
      </li>
    </ul>
  </div>
</nav>

<!--verifica se o form ira ser usado para cadastro ou atualização!-->
<?php
include("/Class/ClassCrud.php");

if(isset($_GET['id'])){
    $Acao="Editar";

    $Crud=new ClassCrud();
    $BFetch=$Crud->selectDB("*","vehicles","where Id=?",array($_GET['id']));
    $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
    $id=$Fetch['id'];
    $model=$Fetch['model'];
    $color=$Fetch['color'];
    $board=$Fetch['board'];
    $doors=$Fetch['doors'];
    $launch=$Fetch['launch'];
    $description=$Fetch['description'];
    $price=$Fetch['price'];
    $owners=$Fetch['owners'];

}

/* Cadastro novo */
else{
    $Acao="Cadastrar";
    $id=0;
    $model="";
    $color="";
    $board="";
    $doors="";
    $launch="";
    $description="";
    $price="";
    $owners="";

}
?>

<!--Formulario de cadastro de veiculos!-->
<h3 class=" mt-4">Cadastre seu veiculo: </h3>
 <div class="card mt-4">
     <div class="card-body">
         <form action="Controllers/ControllerCadastro.php" method="POST">
            
             <input type="hidden" id="Acao" name="Acao" value="<?php echo $Acao; ?>">
             <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">

             <label for="modelo">Modelo: </label>
             <input type="text" name="model" id="model" class="form-control" required="" value="<?php echo $model; ?>">
             <label for="cor">Cor: </label>
             <input type="text" name="color" id="color" class="form-control" required="" value="<?php echo $color; ?>">
             <label for="Placa">Placa: </label>
             <input type="text" name="board" id="board" class="form-control" required="" value="<?php echo $board; ?>">
             <select name="doors" id="doors" class="custom-select mt-4">
                <option value="">Informe a quantidade de portas que o veiculo possui</option>
                <option value="<?php echo $doors; ?>"><?php echo $doors; ?></option>
                <option value="1">1 porta</option>
                <option value="2">2 portas</option>
                <option value="3">3 portas</option>
                <option value="4">4 portas</option>
            </select>
            <label for="Placa" class="mt-3">Ano de lançamento do veiculo: </label>
             <input type="text" name="launch" id="launch" class="form-control" required="" value="<?php echo $launch; ?>">
             <label for="Descrição do veiculo">Descrição do veiculo: </label>
             <textarea name="description"  required="" id="description" class="form-control" value="<?php echo $description; ?>"></textarea>
             <label for="Valor atual do veiculo">Valor atual do veiculo: </label>
             <input type="text" name="price" id="price" class="form-control" placeholder='Não colocar pontos ou virgulas quando informar o valor' value="<?php echo $price; ?>">
             <select name="owners" id="owners" class="custom-select mt-4">
                <option value="">Informe a quantidade de propietarios que este veiculo já possuiu: </option>
                <option value="<?php echo $owners; ?>"><?php echo $owners; ?></option>
                <option value="Unico propietario">Unico propietario</option>
                <option value="2 propietarios">2 propietarios</option>
                <option value="3 propietarios">3 propietarios</option>
                <option value="4 propietarios">4 propietarios</option>
                <option value="5 propietarios ou mais..">5, ou mais propietarios</option>

             </select>
             <label for="exampleFormControlFile1">Selecione fotos do veiculo: </label>
             <input type="file" class="form-control-file" id="exampleFormControlFile1">  
             <!--<label for="Quantidade de portas">Quantidade de portas: </label>
             <input type="number" name="doors" id="doors" class="form-control" required="">!-->
             <button type="submit" class="btn btn-success mt-4" value="<?php echo $Acao; ?>">Salvar veiculo</button>
         </form>
     </div>
 </div>

 <div class="card">
  <div class="card-body">

<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© MGBS Ltda:
    <a href="http://github.com/miguelgabriel01">mgbs@discente.ifpe.edu.br</a>
  </div>
  <!-- Copyright -->

</footer>


</body>
</html>