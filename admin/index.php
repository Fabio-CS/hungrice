<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php
include('config/conf.php');
?>
<html>
    <head>
        <title><?=$cliente?> - Redware NewSystem</title>
		<?=$icon?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Expand, contract, animate forms with jQuery wihtout leaving the page" />
        <meta name="keywords" content="expand, form, css3, jquery, animate, width, height, adapt, unobtrusive javascript"/>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/ChunkFive_400.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('h1',{ textShadow: '1px 1px #fff'});
			Cufon.replace('h2',{ textShadow: '1px 1px #fff'});
			Cufon.replace('h3',{ textShadow: '1px 1px #000'});
			Cufon.replace('.back');
		</script>
    </head>
    <body>
		<div class="wrapper">
			<div class="content">
				<div id="form_wrapper" class="form_wrapper">


					<form class="login active" action='inc/autenticacao.rotinas.php' method=post>
						<h3><img src='imagens/ricelog1.png' width=45 height=50> HungRice<br></h3>
						<div>
							<label>Login:</label>
							<input name='usuario' type="text" value=''/>
						</div>
						<div>
							<label>Password: </label>
							<input type="password" name='senha' value=''/>
						</div>
						<div class="bottom">
							<input type='hidden' name="enviado" value="posted"><br>
							<input type=submit value="Entrar" name=Submit>
							<div class="clear"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
		

		<!-- The JavaScript -->

        </script>
    </body>
</html>