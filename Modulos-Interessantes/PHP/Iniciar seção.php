<?php
	
	session_start();	//inicia a sessão
	
	include('conecta.php');
	
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	
	#$result = "SELECT * FROM usuarios WHERE login = '".$login."' AND senha = '".$senha."'";	//Jeito antigo difícil
	$result = "SELECT * FROM usuarios WHERE login = '{$login}' AND senha = '{$senha}'";			//Jeito novo melhor
	$sql = mysqli_query($con,$result);
	
	$numRegistros = $sql->num_rows;
	
	if($numRegistros != 0)
	{
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		header('location: site.php');
	}else
	{
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		header('location: login.php');
	}
?>