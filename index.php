<?php

use application\Controller\PageController;
use application\Controller\MethodController;

//Verfica se os gets estão vazios, para não apresentar warning
if(!isset($_GET['p']) || !isset($_GET['m'])){
    $_GET['p'] = '';
    $_GET['m'] = '';
}

//Requer composer Instalado
require 'vendor/autoload.php';

//Redireciona quais metodos ou paginas devem ser executados
if(empty($_GET['m'])){
    $p = $_GET['p'];
    $controller = new PageController();
    $controller->view($p);
}

$m = $_GET['m'];
$controller = new MethodController();
$controller->MethodController($m);
    