<?php 

$host = "localhost"; 
$banco = "ordem_servico"; //nome do banco
$usuario = "root";        // usuario do banco
$senha = "";              // senha do banco
$mensagem="Erro ao conectar";

$conexao = mysqli_connect($host, $usuario, $senha, $banco); 
mysqli_query($conexao, "SET NAMES 'utf8';");
if(mysqli_connect_errno($conexao)) {
    // envia uma mensagem se não consegiuir conetar ao banco
    header('location:index.php?mensagem='.$mensagem);
    exit();
} 
?>