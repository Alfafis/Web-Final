<?php
include __DIR__.'/../model/Aluno.php';

class AlunoControl {
	function insert($obj){
		$aluno = new Aluno();
		return $aluno->insert($obj);
	}

	function update($obj,$id){
		$aluno = new Aluno();
		return $aluno->update($obj,$id);
	}

	function delete($obj,$id){
		$aluno = new Aluno();
		return $aluno->delete($obj,$id);
	}

	function find($id = null){
		$aluno = new Aluno();
		return $aluno->find($id);
	}

	function findAll(){
		$aluno = new Aluno();
		return $aluno->findAll();
	}
}

?>