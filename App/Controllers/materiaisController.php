<?php

namespace App\Controllers;

use App\Config\uploadConfig;
use App\Model\fornecedorModel;
use App\Model\materiaisModel;

class materiaisController{

    public $title = 'Estoque';

    public function __construct() {
        $this->upload = new uploadConfig();
        $this->fornecedor = new fornecedorModel();
        $this->materiais = new materiaisModel();
    }
    public function index(){
        $this->render('materiais', 'template');
    }

    public function cadastroMaterias(){
        $true = true;
        foreach ($_POST as $key => $value) {
            if ($value == '') {
                $_POST['erro'] = 'Campos vazios não são permitidos';
                $true = false;
                break;
            }
        }
        if ($true) {
            if(!$this->upload->formato($_FILES['img'])){
                $_POST['erro'] = 'Imagem com formato incorreto ou vazia';
            }else{
                $img = $this->upload->upload($_FILES['img']);
                $this->materiais->insert($_POST['fornecedor'], $_POST['nome'], $_POST['codigo'], $_POST['sobre'], $_POST['qntd'], $img);
                $this->redirect('');
            }
        }
        $this->render('materiais', 'template');
    }

    public function listaMateriais(){
        $this->render('materiaisLista', 'template');
    }

    public function editarMateriais(){
        $this->render('materiaiseditar', 'template');
    }

    public function postEditarMateriais(){
        $id = explode('/',$_GET['uri']);
        $true = true;
        foreach ($_POST as $key => $value) {
            if ($value == '') {
                $_POST['erro'] = 'Campos vazios não são permitidos';
                $true = false;
                break;
            }
        }
        if ($true) {
            if ($_FILES['img']['name'] == '') {
                $this->materiais->update($_POST['fornecedor'], $_POST['nome'], $_POST['codigo'], $_POST['sobre'], $_POST['qntd'], $this->selectMateriaisId()['img'], $id[2]);
                $this->redirect('materiais/lista');
            }else{
                if(!$this->upload->formato($_FILES['img'])){
                    $_POST['erro'] = 'Imagem com formato incorreto ou o campo esta vazio';
                }else{
                    $this->upload->deleteFile($this->selectMateriaisId()['img']);
                    $img = $this->upload->upload($_FILES['img']);
                    $this->materiais->update($_POST['fornecedor'], $_POST['nome'], $_POST['codigo'], $_POST['sobre'], $_POST['qntd'], $img, $id[2]);
                    $this->redirect('materiais/lista');
                }
            }
        }
        $this->render('materiaiseditar', 'template');
    }

    public function selectMateriaisId(){
        $id = explode('/',$_GET['uri']);
        return $this->materiais->selectId($id[2]);
    }

    public function selectMateriaisJoin(){
        return $this->materiais->selectAllJoin();
    }

    public function selectAllFornecedor($true){
        return $this->fornecedor->selectAll($true);
    }

    public function redirect($url){
        echo"<script>
                window.location.href = '".url."".$url."'
             </script>";
    }

    public function content(){
        include $this->view;
    }

    public function render($view, $template){
        $this->view = "App\\View\\www\\".$view.".php";
        include "App\\View\\templates\\".$template.".php";
    }
}