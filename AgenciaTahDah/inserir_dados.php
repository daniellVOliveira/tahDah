<?php
session_start();

	include_once 'conexao.php';
	
	$nome = null;
	$email = null;
	$fone = null;
	$verifica_insert= null;
	
	if(empty($_POST['nome'])){
		$_SESSION['vazio_nome'] = "Campo nome é obrigatório";
			$verifica_insert= " ";
	}else{
		$_SESSION['value_nome'] = $_POST['nome'];
	}
	
	if(empty($_POST['email'])){
		$_SESSION['vazio_email'] = "Campo e-mail é obrigatório";
		$verifica_insert= " ";
	}else{
		$_SESSION['value_email'] = $_POST['email'];
	}
	
	if(empty($_POST['fone'])){
		$_SESSION['vazio_fone'] = "Campo e-mail é obrigatório";
		$verifica_insert= " ";
	}else{
		$_SESSION['value_fone'] = $_POST['fone'];
	}
	
	if ($verifica_insert != " "){

	$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
	$email = mysqli_real_escape_string($conexao, $_POST['email']);
	$fone = mysqli_real_escape_string($conexao, $_POST['fone']);
	
	$result_sql = "INSERT INTO cliente (nome,email,fone) VALUES ('$nome','$email','$fone')";
	
	echo "<script>alert('Dados Salvos com sucesso!');</script>";



	}else{
		
		$url='index.php';
		echo("<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>");
		exit();
		
	}
	
	if($conexao->query($result_sql) == TRUE){
		$url='index.php';
		echo("<META HTTP-EQUIV=REFRESH CONTENT = '2;URL=$url'>");

		exit();
		
	}else{
		echo "Erro".$result_sql."<br>".$conexao->error;
			}
	$conexao->close();
?>