<?php
include __DIR__.'/Conexao.php';

class Empresa extends Conexao {
    private $nome;
    private $cnpj;
    private $area;

    function getNome() {
        return $this->nome;
    }
    function setNome($nome) {
        $this->nome = $nome;
    }
    function getCnpj() {
        return $this->cnpj;
    }
    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }
    function getArea() {
        return $this->area;
    }
    function setArea($area) {
        $this->area = $area;
    }

    public function insert($obj){
    	$sql = "INSERT INTO empresas(nome,cnpj,area) VALUES (:nome,:cnpj,:area)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('nome', $obj->nome);
        $consulta->bindValue('cnpj' , $obj->cnpj);        
        $consulta->bindValue('area' , $obj->area);
    	return $consulta->execute();
	}

	public function update($obj,$id = null){
		$sql = "UPDATE empresas SET nome = :nome,cnpj = :cnpj, area = :area WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('nome', $obj->nome);
		$consulta->bindValue('cnpj' , $obj->cnpj);
		$consulta->bindValue('area' , $obj->area);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM empresas WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id = null){
        $sql =  "SELECT * FROM empresas WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
	}

	public function findAll(){
		$sql = "SELECT * FROM empresas";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

}

?>