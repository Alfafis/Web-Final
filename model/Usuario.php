<?php
	
	Class Usuario{
		private $login;
		private $senha;
	    /**
	     * @return mixed
	     */
	    public function getLogin(){
	        return $this->login;
	    }
	    /**
	     * @param mixed $login
	     *
	     * @return self
	     */
	    public function setLogin($login){
	        $this->login = $login;
	    }
	    /**
	     * @return mixed
	     */
	    public function getSenha(){
	        return $this->senha;
	    }
	    /**
	     * @param mixed $senha
	     *
	     * @return self
	     */
	    public function setSenha($senha){
	        $this->senha = $senha;
 	    }
	}
?>