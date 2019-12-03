<?php
include __DIR__.'/../control/AlunoControl.php';
$alunoControl = new AlunoControl();

header('Content-type: application/json');

if ($alunoControl->findAll()) {
	http_response_code(200);
	echo json_encode($alunoControl->findAll());


}
else {
	http_response_code(400);
	echo json_encode(array("mensagem" => "Não encontrado"));
}
?>