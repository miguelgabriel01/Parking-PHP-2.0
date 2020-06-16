<?php

#verifica se o form de cadastro vai ser reutilizado para update
if(isset($_POST['Acao'])){
    $Acao=filter_input(INPUT_POST,'Acao',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['Acao'])){
    $Acao=filter_input(INPUT_GET,'Acao',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $Acao="";
}

#id
if(isset($_POST['id'])){
    $id=filter_input(INPUT_POST,'id',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['id'])){
    $id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $id=0;
}

#Modelo
if(isset($_POST['model'])){
    $model=filter_input(INPUT_POST,'model',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['model'])){
    $model=filter_input(INPUT_GET,'model',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $model="";
}

#Cor
if(isset($_POST['color'])){
    $color=filter_input(INPUT_POST,'color',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['color'])){
    $color=filter_input(INPUT_GET,'color',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $color="";
}

#Placa
if(isset($_POST['board'])){
    $board=filter_input(INPUT_POST,'board',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['board'])){
    $board=filter_input(INPUT_GET,'board',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $board="";
}

#Quantidade de portas
if(isset($_POST['doors'])){
    $doors=filter_input(INPUT_POST,'doors',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['doors'])){
    $doors=filter_input(INPUT_GET,'doors',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $doors="";
}


#Ano de lançamento do veiculo
if(isset($_POST['launch'])){
    $launch=filter_input(INPUT_POST,'launch',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['launch'])){
    $launch=filter_input(INPUT_GET,'launch',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $launch="";
}


#Descrição do veiculo
if(isset($_POST['description'])){
    $description=filter_input(INPUT_POST,'description',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['description'])){
    $description=filter_input(INPUT_GET,'description',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $description="";
}


#valor do veiculo
if(isset($_POST['price'])){
    $price=filter_input(INPUT_POST,'price',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['price'])){
    $price=filter_input(INPUT_GET,'price',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $price="";
}


#Numero de propietarios do veiculo
if(isset($_POST['owners'])){
    $owners=filter_input(INPUT_POST,'owners',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['owners'])){
    $owners=filter_input(INPUT_GET,'owners',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $owners="";
}