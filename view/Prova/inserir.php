<?php
include '../../control/ProvaControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;



if(!empty($data)){	
 $provaControl = new ProvaControl();
 $provaControl->insert($obj);
 header('Location:listar.php');
}







?>