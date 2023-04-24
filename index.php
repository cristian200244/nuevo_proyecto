<?php
include_once 'controller/RegistroController.php';
include_once 'config/conexion.php';
$controller = new RegistroController();
if (!isset($_REQUEST['c'])) {
    $controller->index();
}else{
    $action =$_REQUEST['c'];
    call_user_func(array($controller,$action));
}
