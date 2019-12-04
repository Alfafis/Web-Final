<?php
include __DIR__.'/../control/EmpresaControl.php';
  $empresaControl = new EmpresaControl();

  header('Content-Type: application/json');

  echo json_encode($empresaControl->findAll());

  // foreach($empresaControl->findAll() as $valor){
  // 	echo json_encode($valor);
  // }
?>