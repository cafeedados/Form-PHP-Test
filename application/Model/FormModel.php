<?php
namespace application\Model;
use application\Model\Model;

class FormModel extends Model
{
    //Insere os dados do form no banco de dados
    public function Insere($name, $sobrenome, $convidados, $status)
    {
        $stmt = $this->getAll('Convidados', 'ID, Nome, Sobrenome', "Nome = '$name' and Sobrenome ='$sobrenome'");
    
        $num = $stmt->rowCount();

        if($num == 1 || $num == -1){
            return $bool = 1;
        }else {
            $columns = array('Nome', 'Sobrenome', 'Convidados', 'Status');
            $values = array("$name", "$sobrenome", "$convidados", "$status");
            $this->dbInsert('Convidados', $columns, $values);
        }
        
        
    }

    //Exclui um convidado do banco
    public function Exclui($id)
    {
        $where = "ID = $id";
        $this->deletRow('Convidados', $where);
    }

    //Lista todos os convidados do banco
    public function ListaConvidados()
    {
        $stmt = $this->getAll('Convidados', '*');
        $resultado = $this->getResult($stmt);
        return $resultado;
    }
}