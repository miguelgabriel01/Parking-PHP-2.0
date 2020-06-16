<?php
include("ClassConexao.php");//pega o arquivo Classconexao na pasta Class

//extendemos a class conexao
class ClassCrud extends ClassConexao{

    #atributos
    private $Crud;
    private $Contador;

    #preparação das declarativas
    private function preparedStatements($Query,$Parametros){
        $this->countParametros($Parametros);
        $this->Crud=$this->connectaDb()->prepare($Query);
        
        if($this->Contador > 0){
            for($i = 1; $i <= $this->Contador; $i++){
                $this->Crud->bindValue($i,$Parametros[$i-1]);
            }
        }

        $this->Crud->execute();
    }

    #contador de parametros
    private function countParametros($Parametros){
       $this->Contador=count($Parametros);
    }


    #inserir dados no BD
    public function InsertDB($Tabela, $Condicao, $Parametros){
      $this->preparedStatements("insert into {$Tabela} values ({$Condicao})",$Parametros);

      return $this->Crud;
    }

#Seleção no Banco de Dados
public function selectDB($Campos , $Tabela , $Condicao , $Parametros){
    $this->preparedStatements("select {$Campos} from {$Tabela} {$Condicao}",$Parametros);
    return $this->Crud;
}

#deletar dados do BD
public function deletarDB($Tabela, $Condicao, $Parametros){
$this->preparedStatements("delete from {$Tabela} where {$Condicao}", $Parametros);
return $this->Crud;
}

#Atualizar dados do banco
public function updateDB($Tabela, $Set, $Condicao, $Parametros){
    $this->preparedStatements("update {$Tabela} set {$Set} where {$Condicao}",$Parametros);
    return $this->Crud;
}

}
