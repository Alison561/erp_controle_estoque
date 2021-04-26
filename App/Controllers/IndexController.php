<?php

namespace App\Controllers;
use App\Model\fornecedorModel;
use App\Model\materiaisModel;
class indexController{

    public $title = 'Estoque';

    public function __construct() {
        $this->fornecedor = new fornecedorModel();
        $this->materiais = new materiaisModel();
    }

    public function index(){
        $this->render('index', 'template');
    }

    public function content(){
        include $this->view;
    }

    public function render($view, $template){
        $this->view = "App\\View\\www\\".$view.".php";
        include "App\\View\\templates\\".$template.".php";
    }
}