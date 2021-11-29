<?php
    // deloga o usuário ao entrar nessa página, destruindo todas as sessions
    if(isset($_SESSION)){
        session_destroy();
    }
    
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>form de login</title>
        <link rel="shortcut icon" href="favicon.ico" >
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
<body>
    <div class="container">
        <div class="frm_login" style="text-align:center;">
           <h3>Sistema de Oficina</h3>
            <form id="form_login" name="frmLogin" action="verifica.php"  method="post" >
            <p>Usuário</p>  
                <input type="text" id="usuario" name="usuario">
                <p>Senha</p>
                <input type="password" id="senha" name="senha">
                <button class="submit" type="submit" onclick="return validarUsuario()">Entrar</button>
            </form>
            <br>
            <?php 
               // mostra a mensagem enviada da pagina conexao.php se não conseguir conectar
                if(isset($_GET['mensagem'])){echo '<span class="mensagem">'.$_GET['mensagem'].'</span>';}; 
            ?>
        </div>
    </div>
    <script>
        function validarUsuario(){
		    var usuario = form_login.usuario.value;
            var senha = form_login.senha.value;
            // verifica usuário
			if(usuario ==""){
				alert("Campo usuario em branco");
				form_login.usuario.value="";
				form_login.usuario.focus();
				return false;	
			}
			if(usuario.length <= 2){
				alert("Pelo menos três caracteres no campo usuario");
				form_login.usuario.value="";
				form_login.usuario.focus();
				return false;	
			}
            // verifica senha
			if(senha ==""){
				alert("Campo senha em branco");
				form_login.senha.value="";
				form_login.senha.focus();
				return false;	
			}
			if(senha.length <= 7){
				alert("Pelo menos oito caracteres no campo senha");
				form_login.senha.value="";
				form_login.senha.focus();
				return false;	
			}
		}
				
    </script>
</body>     
