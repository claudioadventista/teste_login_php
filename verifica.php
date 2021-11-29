<?php
include('conexao.php');
if(empty($_POST['usuario']) || empty($_POST['senha'])){
  header('location:index.php');
  exit();
}

$usuario = mysqli_real_escape_string($conexao,$_POST['usuario']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);

$query ="SELECT codigo, usuario FROM funcionario WHERE usuario='{$usuario}' AND senha=md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row==1){
    session_start();
    $_SESSION['usuario']= $usuario;
    header('location: painel.php');
    exit();
}else{
    header('location:index.php?mensagem=Não foi possivel entrar');
}

