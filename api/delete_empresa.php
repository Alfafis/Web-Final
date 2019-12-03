<?php
include __DIR__.'/../control/EmpresaControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;

$id = $obj->id;

if(!empty($data)){	
 $empresaControl = new EmpresaControl();
 $empresaControl->delete($obj,$id);
 header('Location:listar.php');
}



?>