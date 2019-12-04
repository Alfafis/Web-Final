<?php
include __DIR__.'/../model/Empresa.php';

class EmpresaControl {
	function insert($obj){
		$empresa = new Empresa();
		return $empresa->insert($obj);
	}

	function update($obj,$id){
		$empresa = new Empresa();
		return $empresa->update($obj,$id);
	}

	function delete($obj,$id){
		$empresa = new Empresa();
		return $empresa->delete($obj,$id);
	}

	function find($id = null){
		$empresa = new Empresa();
		return $empresa->find($id);
	}

	function findAll(){
		$empresa = new Empresa();
		return $empresa->findAll();
	}
}

?>