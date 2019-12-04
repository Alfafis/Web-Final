<?php
include __DIR__.'/../model/Usuario.php';
include __DIR__.'/Conexao.php';

class Aluno extends Conexao {
	private $nome;
    private $cpf;
    private $idade;
    private $curso;
    private $sexo;
    private $matricula;

    public function getNome() {
        return $this->nome;
    }   
    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }
    public function getCpf() {
        return $this->cpf;
    }   
    public function setCpf($cpf) {
        $this->cpf = $cpf;
        return $this;
    }    
    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
        return $this;
    }    
    public function getCurso() {
        return $this->curso;
    }
    public function setCurso($curso) {
        $this->curso = $curso;
        return $this;
    }    
    public function getSexo() {
        return $this->sexo;
    }
    public function setSexo($sexo) {
        $this->sexo = $sexo;
        return $this;
    }    
    public function getMatricula() {
        return $this->matricula;
    }
    public function setMatricula($matricula) {
        $this->matricula = $matricula;
        return $this;
    }

    public function insert($obj) {
    	$sql = "INSERT INTO alunos(nome,cpf,idade,curso,sexo,matricula) VALUES (:nome,:cpf,:idade,:curso,:sexo,:matricula)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('nome',  $obj->nome);
        $consulta->bindValue('cpf' , $obj->cpf);
        $consulta->bindValue('idade' , $obj->idade);
        $consulta->bindValue('curso', $obj->curso);
        $consulta->bindValue('sexo' , $obj->sexo);
        $consulta->bindValue('matricula' , $obj->matricula);
        return $consulta->execute();
	}

	public function update($obj,$id = null) {
		$sql = "UPDATE alunos SET nome = :nome, cpf = :cpf,idade = :idade, curso =:curso, sexo = :sexo, matricula = :matricula";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('nome', $obj->nome);
        $consulta->bindValue('cpf' , $obj->cpf);
		$consulta->bindValue('idade' , $obj->idade);
        $consulta->bindValue('curso', $obj->curso);
        $consulta->bindValue('sexo', $obj->sexo);
        $consulta->bindValue('matricula', $obj->matricula);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null) {
		$sql =  "DELETE FROM alunos WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id = null) {
        $sql =  "SELECT * FROM alunos WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
	}

	public function findAll() {
		$sql = "SELECT * FROM alunos";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}
}

?>