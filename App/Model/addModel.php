<?php
namespace App\Model;
use App\Model\MySql;

class addModel{

    public function insert($id_prod, $qntd){
        $con = MySql::conn()->prepare("INSERT INTO `adicionar` VALUES(NULL, ?, ?, ?)");
        $con->execute(array($id_prod, date('Y-m-d') ,$qntd));
    }

    public function select(){
        $con = MySql::conn()->prepare("SELECT * FROM `adicionar` ");
        $con->execute();
        return $con->fetchall();
    }

    public function selectJoin(){
        $con = MySql::conn()->prepare("SELECT ad.*, mat.nome, mat.img FROM `adicionar` as ad INNER JOIN `material` as mat ON id_prod = mat.id ");
        $con->execute();
        return $con->fetchall();
    }

}
?>