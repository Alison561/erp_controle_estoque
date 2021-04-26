<?php

namespace App\Controllers;

use App\Config\uploadConfig;
use App\Model\fornecedorModel;
use App\Model\materiaisModel;

class fornecedorController{

    public $title = 'Estoque';

    public function __construct() {
        $this->upload = new uploadConfig();
        $this->fornecedor = new fornecedorModel();
        $this->materiais = new materiaisModel();
    }
    public function index(){
        $this->render('fornecedor', 'template');
    }

    public function cadastroFornecedor(){
        $true = true;
        foreach ($_POST as $key => $value) {
            if ($value == '') {
                $_POST['erro'] = 'Campos vazios não são permitidos';
                $true = false;
                break;
            }
        }
        if ($true) {
            if (!$_POST['categoria'] == 'alimento' || !$_POST['categoria'] == 'papelaria' || !$_POST['categoria'] == 'roupa' || !$_POST['categoria'] == 'limpeza') {
                $_POST['erro'] = 'Selecione a categria correta';
            }else if(!$this->upload->formato($_FILES['img'])){
                $_POST['erro'] = 'Imagem com formato incorreto ou vazia';
            }else{
                $img = $this->upload->upload($_FILES['img']);
                $this->fornecedor->insert($_POST['nome'], $_POST['email'], $_POST['tel'], $_POST['cnpj'], $_POST['categoria'], $img);
                $this->redirect('');
            }
        }
        $this->render('fornecedor', 'template');
    }

    public function editarFornecerdor(){
        $this->render('fornecedorEditar', 'template');
    }

    public function postEditarFornecerdor(){
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
                $this->fornecedor->update($_POST['nome'], $_POST['email'], $_POST['tel'], $_POST['cnpj'], $_POST['categoria'], $this->selectFornecedorId()['img'], $id[2]);
                $this->redirect('fornecerdores/lista');
            }else{
                if(!$this->upload->formato($_FILES['img'])){
                    $_POST['erro'] = 'Imagem com formato incorreto ou o campo esta vazio';
                }else{
                    $this->upload->deleteFile($this->selectFornecedorId()['img']);
                    $img = $this->upload->upload($_FILES['img']);
                    $this->fornecedor->update($_POST['nome'], $_POST['email'], $_POST['tel'], $_POST['cnpj'], $_POST['categoria'], $img, $id[2]);
                    $this->redirect('fornecerdores/lista');
                }
            }
        }
        $this->render('fornecedorEditar', 'template');
    }

    public function atividadeFornecerdor(){
        if ($this->selectFornecedorId()['ativo'] == 'sim') {
            $this->fornecedor->updateAtividade('nao', $this->selectFornecedorId()['id']);
            $this->redirect('fornecerdores/lista');
        } else {
            $this->fornecedor->updateAtividade('sim', $this->selectFornecedorId()['id']);
            $this->redirect('fornecerdores/lista');
        }
    }


    public function selectFornecedorId(){
        $id = explode('/',$_GET['uri']);
        return $this->fornecedor->selectId($id[2]);
    }

    public function listaFornecerdores(){
        $this->render('fornecedoresLista', 'template');
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