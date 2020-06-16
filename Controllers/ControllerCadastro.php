<?php
include('../Includes/Variaveis.php');
include("../Class/ClassCrud.php");//pega o arquivo ClassCrud na pasta Class

$Crud = new ClassCrud();

if($Acao=="Cadastrar"){

    $Crud->insertDB(
        "vehicles",//nome da tabela
        "?,?,?,?,?,?,?,?,?",//condicao(numero de campos)
        array(//parametros recebidos do formulario
            $id,
            $model,//modelo
            $color,//cor
            $board,//placa
            $doors,//portas
            $launch,//ano de fabricação
            $description,//descrição
            $price,//preço
            $owners//numero de propietarios
        )
    
    );
    
    header("location:../home.php");//redireciona para a pagina home.php
    echo "veiculo cadastrado com sucesso";


}/*else{
    echo "Houve um erro ao salvar os dados. verifique se os dados foram passados de maneira correta";
    var_dump($id,$model,$color,$board,$doors);
}*/


else{
$Crud->updateDB(
    "vehicles",
    "model=?,color=?,board=?,doors=?,launch=?,description=?,price=?,owners=?",
    "id=?",
    array(
       
        $model,//modelo
        $color,//cor
        $board,//placa
        $doors,//portas
        $launch,//ano de fabricação
        $description,//descrição
        $price,//preço
        $owners,//numero de propietarios
        $id
        
        
    )
);

  header("location:../home.php");

}
