<?php
include("../Class/ClassCrud.php");//pega o arquivo ClassCrud na pasta Class//

    $Crud=new ClassCrud();
    $IdUser=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);

    $Crud ->deletarDB(
        "vehicles",
        "id=?",
        array(
            $IdUser
        )
    );


   header("location:../home.php");

