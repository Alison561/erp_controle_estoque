<?php
namespace App\Model;
use App\Model\MySql;

class fornecedorModel{

    public function insert($nome, $email, $telefone, $cnpj, $categoria, $img){
        $con = MySql::conn()->prepare("INSERT INTO `forneceedor` (id, nome, email, telefone, cnpj, categoria, ativo, img) VALUES(NULL, ?, ?, ?, ?, ?, ?, ?)");
        $con->execute(array($nome, $email, $telefone, $cnpj, $categoria, 'sim' ,$img));
    }

    public function selectAll($true){
        if (!$true) {
            $con = MySql::conn()->prepare("SELECT * FROM `forneceedor` WHERE ativo = 'sim'");
            $con->execute();
            return $con->fetchall();
        }else{
            $con = MySql::conn()->prepare("SELECT * FROM `forneceedor`");
            $con->execute();
            return $con->fetchall();
        }
    }

    public function updateAtividade($ativo, $id){
        $con = MySql::conn()->prepare("UPDATE `forneceedor` SET ativo = ? WHERE id = ?");
        $con->execute(array($ativo, $id));
    }

    public function update($nome, $email, $telefone, $cnpj, $categoria, $img, $id){
        $con = MySql::conn()->prepare("UPDATE `forneceedor` SET nome = ?, email = ?, telefone = ?, cnpj = ?, categoria = ?, img = ? WHERE id = ?");
        $con->execute(array($nome, $email, $telefone, $cnpj, $categoria, $img, $id));
    }

    public function selectId($id){
        $con = MySql::conn()->prepare("SELECT * FROM `forneceedor` Where id = ?");
        $con->execute(array($id));
        return $con->fetch();
    }

}
?>