<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>form de login</title>
        <link rel="shortcut icon" href="../icon/favicon.ico" >
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
<body>
    <div class="container">
        <div class="painel">
            <?php @session_start();// para usar informação da session nessa página
                  if(isset($_SESSION['usuario'])){
                    echo "Seja bem vindo(a) ".'<span class="usuario">'.$_SESSION['usuario'].'</span>';
                  }else{
                    header('location:index.php');
                  }
            ?>
            <!-- manda para a página index para deslogar lá, onde vai destruir todas as sessions -->
            <a class="deslogar" href="index.php">Deslogar</a>
        </div>
    </div>
</body>