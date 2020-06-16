<?php
include('../Includes/VariaveisUser.php');
include("../Class/ClassCrud.php");//pega o arquivo ClassCrud na pasta Class

$Crud = new ClassCrud();



    $Crud->selectDB(
        "users",//nome da tabela
        "?,?,?",//condicao(numero de campos)
        array(//parametros recebidos do formulario
            $id,
            $email,
            $password
        )

        
    
    );
    
    header("location:../index.php");