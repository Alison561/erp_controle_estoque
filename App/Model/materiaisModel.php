<?php
namespace App\Model;
use App\Model\MySql;

class materiaisModel{

    public function insert($id_forne, $nome, $codigo, $sobre, $qntd, $img){
        $con = MySql::conn()->prepare("INSERT INTO `material` VALUES(NULL, ?, ?, ?, ?, ?, ?, ?)");
        $con->execute(array($id_forne, $nome, $codigo, $sobre, date('Y-m-d') ,$qntd, $img));
    }

    public function update($id_forne, $nome, $codigo, $sobre, $qntd, $img, $id){
        $con = MySql::conn()->prepare("UPDATE `material` SET id_forne = ?, nome = ?, codigo = ?, sobre = ?, data = ?, qnt = ?, img = ? WHERE id = ?");
        $con->execute(array($id_forne, $nome, $codigo, $sobre, date('Y-m-d') ,$qntd, $img, $id));
    }

    public function qntd($qntd, $id){
        $con = MySql::conn()->prepare("UPDATE `material` SET qnt = ? WHERE id = ?");
        $con->execute(array($qntd, $id));
    }

    public function selectId($id){
        $con = MySql::conn()->prepare("SELECT * FROM `material` Where id = ?");
        $con->execute(array($id));
        return $con->fetch();
    }

    public function selectAllJoin(){
        $con = MySql::conn()->prepare("SELECT mate.*, forn.nome as p_nome FROM `material` as mate INNER JOIN `forneceedor` as forn ON  forn.id = mate.id_forne");
        $con->execute();
        return $con->fetchall();
    }

    public function selectAll(){
        $con = MySql::conn()->prepare("SELECT * FROM `material` ");
        $con->execute();
        return $con->fetchall();
    }
}
?>