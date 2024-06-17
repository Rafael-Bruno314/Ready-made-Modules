<?php
	
	include('class.POO_1.php');
	
	#if($_SERVER["REQUEST_METHOD"] == "POST"){
	
		$nome = $_POST["nome"];
		$idade = $_POST["idade"];
		$salario = $_POST["salario"];
		
		if(isset($_POST['situacao']))
			$situacao = true;
		else
			$situacao = false;
		
		$funcionario = new funcionarios($nome,$idade,$salario,$situacao);
		
		//echo print_r($funcionario,TRUE);
		//echo var_dump($funcionario);
		echo $funcionario -> getFuncionario();
		echo $funcionario -> Traco();
	#}
	####################

	if(!file_exists('c:\\Users\\1234\\Desktop\\POO_1'))
	mkdir("c:\\Users\\1234\\Desktop\\POO_1");
	$name = 'c:\\Users\\1234\\Desktop\\POO_1\\'.$nome.'.txt';
	$file = fopen($name, 'a');
	
		$nome = "Nome: ".$nome."\r\n";
		$idade = "Idade: ".$idade."\r\n";
		$salario = "Salário: ".$salario."\r\n";
		
		if($situacao)
			$situacao = "Sim";
		else
			$situacao = "Não";
		
		$situacao = "Ativo? ".$situacao."\r\n";
		
	$text = $nome.$idade.$salario.$situacao."\r\n\r\n";
	
	fwrite($file, $text);
	fclose($file);
	
?>