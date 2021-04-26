<?php
require __DIR__ . '/vendor/autoload.php';

session_start();

date_default_timezone_set('america/sao_paulo');

define('url', 'http://localhost/ERP-estoque/');
define('bd', array('host'=>'127.0.0.1', 'db'=>'erp_estoque', 'pass'=>'', 'user'=>'root'));
try {
 
    require __DIR__ . '/Routes/addRoute.php';
    require __DIR__ . '/Routes/retiradaRoute.php';
    require __DIR__ . '/Routes/materiasRoute.php';
    require __DIR__ . '/Routes/fornecedoresRoute.php';
 
} catch(\Exception $e){
     
    echo $e->getMessage();
}