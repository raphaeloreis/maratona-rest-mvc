<?php
include '../../control/RegistroControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);

if(!empty($data)){	
    $registroControl = new RegistroControl();
    $registroControl->insert($obj);
    header('Location:listar.php');
}







?>