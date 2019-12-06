<?php

require_once(__DIR__.'/../model/Conexao.php');

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$entrar = $_POST['entrar'];

  if(isset($entrar)) {
    $verifica = Conexao::prepare("SELECT * FROM users WHERE nome = :nome AND senha = :senha") or die ("error");
    $verifica->bindValue('nome', $nome);
    $verifica->bindValue('senha', $senha);
    $verifica->execute();
      if ($verifica->rowCount() <= 0 ) {
        echo"<script language='javascript type='text/javascript'>
        alert('login e/ou senha incorretos');window.location.href='index.php';<script>";
      } else {
        $result = $verifica->fetch();
        //setcookie('nome', $result["nome_usuario"]);
        header("Location:http://localhost:8080/Web-Final/");
      }
  }