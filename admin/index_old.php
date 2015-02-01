<?php
include('config/conf.php');
?>
<html>
<head>
<title><?=$cliente?></title>
</head>
<body>

   <div class=principal align=center>
      <FORM action='inc/autenticacao.rotinas.php' method=post>
        <BR>
		
              <DIV><SPAN>Login</SPAN></DIV>
              <INPUT size=20 name='usuario' value='teste@teste.com'>

              <DIV><SPAN>Senha</SPAN></DIV>

              <INPUT type='password' size=20 name='senha' value='123456'>

              <DIV> 
                <input type='hidden' name="enviado" value="posted"><br>
                <INPUT type=submit class=botaoenviar value="  Entrar  " name=Submit>
              </DIV>
		
      </FORM>
	</div>
      