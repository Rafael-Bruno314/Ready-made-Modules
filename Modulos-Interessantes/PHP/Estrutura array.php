<?php
	
	$array = array(1, 2, 3); //É igual a
	$array = [1, 2, 3];	//Esses são os 'indexed arrays'
	
	echo $array[0]."<br>";
	
	$array = array(		//Um array associativo ('Associative array') que recebe quais serão os índices (padrão automático é o [0],[1],[2]...) e seus valores associados
		"chave1" => 1,
		"chave2" => "PHP",
		"chave3" => false
	);
	
	print_r ($array);	// Fica assim: Array ( [chave1] => 1 [chave2] => PHP [chave3] => )
	echo "<br><br>";
	
	foreach ($array as $chave => $valor)	//Irá Correr o array sendo que cada indice será armazenado em $chave e cada respectivo valor em $valor
	{
		echo "{$chave}: {$valor} \n";	//Dessa técnica das chaves eu não sabia...
	}
	
	//A função 'count()' pode contar quantos elementos existem em um determinado array
	
	//Arrays multidimensionais:
	$linguagens = array(
		array("PHP", "PHP: Hypertext Preprocessor"),
		array("SQL", "Structured Query Language")
	);
	
	echo "<br><br>";
	echo $linguagens[0][1];	//Por ser multidimensional ele precisa de dois índices sendo o primeiro a 'linha' e o segundo a 'coluna'
?>