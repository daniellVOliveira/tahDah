<?php
session_start();

?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Contato</title>
		<link href="css/estilos.css" rel="stylesheet">
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery.maskedinput-1.3.js" type="text/javascript"></script>

	</head>
	
	<body>
	<div id="background_header">
		<img alt="" src="img/background1.jpg">
	</div>
	<div id="logo">
		<img alt="" src="img/logo.jpg">
	</div>
			
			<div id="titulo">
				Tah-Dah! Agência Criativa
			</div>
		
			<div id="texto">
			<p>Somos uma agência de criatividade com foco em tecnologia e comunicação, propondo<br>
			projetos de uma comunicação digital, marketing estratégico e muito mais.
			<br><br>
			Cadastre-se e receba nossa apresentação:
			<br><br>
			</div>
			
			<form method="post" name="formCadastro" action="inserir_dados.php" >
			
				
			
				<input type="text" id="nome" name="nome" placeholder="Seu nome completo"  
				
				
						<?php
							if(!empty($_SESSION['value_nome'])){
								echo "value='".$_SESSION['value_nome']."'";
								unset($_SESSION['value_nome']);
							}
						 ?> >
						 <?php
							if(!empty($_SESSION['vazio_nome'])){
								echo "<p style='color: #b63e3e;position: relative; top:43px'>".$_SESSION['vazio_nome']."</p>";
								unset($_SESSION['vazio_nome']);
							}
						 ?>				
				
				<br><br><br>
				<input type="text" id="email" name="email" placeholder="Email comercial"
				
						<?php
							if(!empty($_SESSION['value_email'])){
								echo "value='".$_SESSION['value_email']."'";
								unset($_SESSION['value_email']);
							}
						 ?>>
						 <?php
							if(!empty($_SESSION['vazio_email'])){
								echo "<p style='color: #b63e3e;position: relative; top:43px'>".$_SESSION['vazio_email']."</p>";
								unset($_SESSION['vazio_email']);
							}
						 ?>						
				
				<br><br><br>
				<input type="text" id ="fone" name="fone" placeholder="Telefone com DDD"
				
						<?php
							if(!empty($_SESSION['value_fone'])){
								echo "value='".$_SESSION['value_fone']."'";
								unset($_SESSION['value_fone']);
							}
						 ?>>
						 <?php
							if(!empty($_SESSION['vazio_fone'])){
								echo "<p style='font-family: Helvetica Neue; color: #b63e3e;position: relative; top:43px'>".$_SESSION['vazio_fone']."</p>";
								unset($_SESSION['vazio_fone']);
							}
						 ?>		
				
				<br><br><br>
				
				<input type="submit" value="Cadastrar">
				

			</form>
		<div id="background_footer">
			<img alt="" src="img/background.jpg">
		</div>
		<div id="text_footer">
			Tah-Dah! Agência Criativa - Todos os direitos reservados - 2017
		</div>
	</body>
	

</html>