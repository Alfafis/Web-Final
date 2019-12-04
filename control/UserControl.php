<?php
include __DIR__.'/../model/User.php';

class UserControl {

	public function __construct() {
		if ( !isset($_SESSION['user_logado']) ){
				header("Location:login.php");
				exit;
		}
	}

	function find($id = null){
		$user = new User();
		return $user->find($id);
	}

	function findAll(){
		$user = new User();
		return $user->findAll();
	}
}

?>