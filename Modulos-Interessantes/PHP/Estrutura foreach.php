<?php
	
	//Foreach é uma simplificação do operador FOR para se trabalhar em coleçõ~es de dados como arrays e matrizes pois ele não tem a necessidade de um índice contador.
	
	$vetor = array(1,2,3,4,5);
	print_r ($vetor);	//O print_r permite imprimir arrays completos enquanto o echo só imprime strings
	
	echo "<br>";
	
	for($i=0;$i<5;$i++)	//Correndo o array utilizando o FOR
	{
		$item = $vetor[$i];
		echo $item;
	}
	
	/* foreach (vetor as variável)	//Sintaxe do foreach
	{
		//Variável representa um elemento do vetor a cada iteração
	} */
	
	echo "<br>";
	
	foreach($vetor as $item)	
	{
		echo $item;
	}
	
?>