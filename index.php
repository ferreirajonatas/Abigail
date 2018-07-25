<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Abigail-1.0</title>
		<link rel="icon" href="imagens/logop.png">
		<link rel="stylesheet" type="text/css" href="_css/style.css"/>
		<script type="text/javascript" src="js/jquery.js"></script>
	</head>
    <body>
		<div id="logon" class="bradius">
			<div class="message"></div>
			<div class="logo">
				<a href="<?php echo $home;?>" title="<?php echo $title;?>">
					<img src="imagens/logo.jpg" alt="<?php echo $title;?>" title="<?php echo $title;?>" width="164" height="143"/>
				</a>
			</div>
			<div class="acomodar">
				<form action="ope.php" method="post">
					<label for="login">Login </label><input id="login" type="text" class="txt bradius" name="login" value=""/>
					<label for="senha">Senha </label><input id="senha" type="password" class="txt bradius" name="senha" value=""/>
					<input type="submit" class="btn bradius" value="Entar">
				</form>
			</div> <!--Fim Acomodar-->
		</div><!--Fim login-->
    </body>

</html>