<?php
include('../Includes/VariaveisUser.php');
include("../Class/ClassCrud.php");//pega o arquivo ClassCrud na pasta Class

$Crud = new ClassCrud();



    $Crud->insertDB(
        "users",//nome da tabela
        "?,?,?,?,?,?",//condicao(numero de campos)
        array(//parametros recebidos do formulario
            $id,
            $name,
            $cpf,
            $email,
            $number,
            $password
        )
    
    );
    
    header("location:../index.php");
    /*var_dump($id,$name,$cpf,$email,$number,$password);
    echo "  usuario cadastrado com sucesso";

