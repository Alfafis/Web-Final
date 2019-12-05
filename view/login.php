<?php
include __DIR__.'/Conexao.php';

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$entrar = $_POST['entrar'];

  if(isset($entrar)) {
    $verifca = Connection::prepare("SELECT * FROM users WHERE nome = '$nome' AND senha = '$senha'") or die ("error");
    $verifca->bindValue('nome', $nome);
    $verifca->bindValue('senha', $senha);
    $verifca->execute();
      if ($verifca->rowCount() <= 0 ) {
        echo"<script language='javascript type='text/javascript'>
        alert('login e/ou senha incorretos');window.location.href='index.php';<script>";
      } else {
        $result = $verifca->fetch(POO::Fetch_Assoc);
        setcookie('nome', $result["nome_usuario"]);
        header("Location:../view/index.html");
      }
  }