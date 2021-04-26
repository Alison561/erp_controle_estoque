<?php

namespace App\Controllers;

use App\Model\materiaisModel;
use App\Model\retiradaModel;

class retiradaController{

    public $title = 'Estoque';

    public function __construct() {
        $this->materiais = new materiaisModel();
        $this->retirada = new retiradaModel();
    }

    public function index(){
        $this->render('retirada', 'template');
    }

    public function retirada(){
        $this->render('fazerReitrada', 'template');
    }

    public function postRetirada(){
        if ($_POST['qntd'] == '') {
            $_POST['erro'] = 'Campo vazios não é permitido';
        }else if ($_POST['qntd'] > $this->selectMateriaisId()['qnt'] || $_POST['qntd'] <= 0) {
            $_POST['erro'] = 'você não pode retirar mais do que existi no estoque ou retirar quantidade menor ou igual a zero ';
        }else{
            $retirada = $this->selectMateriaisId()['qnt'] - $_POST['qntd'];
            $this->materiais->qntd($retirada, $this->selectMateriaisId()['id']);
            $this->retirada->insert($this->selectMateriaisId()['id'], $_POST['qntd']);
            $this->redirect('retirada/');
        }
        $this->render('fazerReitrada', 'template');
    }

    public function selectMateriaisId(){
        $id = explode('/',$_GET['uri']);
        return $this->materiais->selectId($id[1]);
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