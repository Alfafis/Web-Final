<?php
header("Access-Control-Allow-Origin: *");

define('PASTAPROJETO', 'Web-Final');

function checkRequest() {
	$method = $_SERVER['REQUEST_METHOD'];
	switch ($method) {
	  case 'PUT':
	  	$answer = "update";
	    break;
	  case 'POST':	  
	  	$answer = "post";
	    break;
	  case 'GET':
	  	$answer = "get";
	    break;
	  case 'DELETE':
	  	$answer = "delete";
	    break;	
	  default:
	    handle_error($method);  
	    break;
	}
	return $answer;
}

$answer = checkRequest();

$request = $_SERVER['REQUEST_URI']; 
http://localhost/Web-Final/

switch ($request) {
    case '/':
      require __DIR__ . '/view/login.html';
		break;
    case '/'.PASTAPROJETO:
      require __DIR__ . '/view/index.html';
		break;
    case '/'.PASTAPROJETO.'/' :
			require __DIR__ . '/view/index.html';
		break;
	case '/'.PASTAPROJETO.'/consulta_aluno' :
		require __DIR__ . '/view/consultaAluno.html';
		break;
	case '/'.PASTAPROJETO.'/login' :
		require __DIR__ . '/view/login.php';
		break;
	case '/'.PASTAPROJETO.'/consulta_empresa' :
		require __DIR__ . '/view/consultaEmpresa.html';
		break;
	case '/'.PASTAPROJETO.'/cadastro_aluno' :
		require __DIR__ . '/view/cadastroAluno.html';
		break;
	case '/'.PASTAPROJETO.'/cadastro_empresa' :
		require __DIR__ . '/view/cadastroEmpresa.html';
		break;
	case '/'.PASTAPROJETO.'/alterar_aluno' :
		require __DIR__ . '/view/alteraAluno.html';
		break;
	case '/'.PASTAPROJETO.'/alterar_empresa' :
		require __DIR__ . '/view/alteraEmpresa.html';
		break;	
	case '' :
			require __DIR__ . '/api/api.php';
			break;
	case '/'.PASTAPROJETO.'/aluno' :
			require __DIR__ . '/api/'.$answer.'_Aluno.php';
			break;
	case '/'.PASTAPROJETO.'/empresa' :
			require __DIR__ . '/api/'.$answer.'_Empresa.php';
			break;
	default:
			require __DIR__ . '/api/404.php';
			break;
}