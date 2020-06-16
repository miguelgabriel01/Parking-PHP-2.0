<?php
//conexão com o banco de dados

//a class será abstract pq só poderá ser extendida e nunca extanciada
abstract class ClassConexao{

    //realiza a conexão com o banco de dados
    protected function connectaDb()
    {
        try{
            $Con =new PDO("mysql:host=localhost;dbname=Parking","root","miguelgabriel123");
            return $Con;
        }catch (PDOException $Erro){
            return $Erro->getMessage();
        }
    }
}

?>


