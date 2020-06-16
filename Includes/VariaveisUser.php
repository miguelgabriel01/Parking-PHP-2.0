<?php

#id do usuario
if(isset($_POST['id'])){
    $id=filter_input(INPUT_POST,'id',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['id'])){
    $id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $id=0;
}

#nome do usuario
if(isset($_POST['name'])){
    $name=filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['name'])){
    $name=filter_input(INPUT_GET,'name',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $name="";
}

#cpf do usuario
if(isset($_POST['cpf'])){
    $cpf=filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['cpf'])){
    $cpf=filter_input(INPUT_GET,'cpf',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $cpf="";
}

#email do usuario
if(isset($_POST['email'])){
    $email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['email'])){
    $email=filter_input(INPUT_GET,'email',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $email="";
}

#numero do usuario
if(isset($_POST['number'])){
    $number=filter_input(INPUT_POST,'number',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['number'])){
    $number=filter_input(INPUT_GET,'number',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $number="";
}

#senha do usuario
if(isset($_POST['password'])){
    $password=filter_input(INPUT_POST,'password',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['password'])){
    $password=filter_input(INPUT_GET,'password',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $password="";
}