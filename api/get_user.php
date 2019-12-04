<?php
	include __DIR__.'/../control/UserControl.php';
	$userControl = new UserControl();

	header('Content-type: application/json');

	if ($userControl->findAll()) {
		http_response_code(200);
		echo json_encode($userControl->findAll());
	}
	else {
		http_response_code(400);
		echo json_encode(array("mensagem" => "Não encontrado"));
	}
?>