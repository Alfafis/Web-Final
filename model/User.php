<?php
include __DIR__.'/Conexao.php';
	
	Class User extends Conexao {
        private $login;
        private $senha;
    
        public function getLogin(){
            return $this->login;
        }
        public function setLogin($login){
            $this->login = $login;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }
        public function find($id = null) {
            $sql =  "SELECT * FROM users WHERE id = :id";
            $consulta = Conexao::prepare($sql);
            $consulta->bindValue('id',$id);
            $consulta->execute();
        }
        public function findAll() {
            $sql = "SELECT * FROM users";
            $consulta = Conexao::prepare($sql);
            $consulta->execute();
            return $consulta->fetchAll();
        }
    }
?>