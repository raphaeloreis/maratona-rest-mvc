<?php
include '../../control/ResultadoControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);

$id = $obj->id;

if(!empty($data)){	
    $resultadoControl = new ResultadoControl();
    $resultadoControl->delete($obj,$id);
    header('Location:listar.php');
}







?>