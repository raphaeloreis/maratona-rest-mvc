<?php
include '../../control/ResultadoControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);

if(!empty($data)){	
    $resultadoControl = new ResultadoControl();
    $resultadoControl->insert($obj);
    header('Location:listar.php');
}







?>