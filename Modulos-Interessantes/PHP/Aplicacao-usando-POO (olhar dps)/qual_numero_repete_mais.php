<?php
//header('Refresh:3');
	for($cont=0;$cont<10;$cont++)
	{
		for($i = 1;$i<1001;$i++)
		{
			//echo rand(1,100)."  ";
			//$array[$i] = array($i => rand(1,100));
			$array[$i] = rand(1,100);
			
			//if($i % 50 == 0) echo "<br>";
		}
		#
		
		for($i=1;$i<101;$i++)
		{
			$estatistica[$i] = 0;
			foreach ($array as $valor)
			{
				if($valor == $i)
				$estatistica[$valor]++;
			}
			
		}
		
		$maior = 0;
		$chave_maior = 0;
		
		foreach($estatistica as $chave => $valor)
		{
			if($maior < $valor)
			{
				$chave_maior = $chave;
				$maior = $valor;
			}
		}
		
		$esperanca[$cont] = $maior;
	}
	
	$soma = 0;
	foreach($esperanca as $grandes)
	{
		$soma += $grandes;
	}
	$contador = count($esperanca);
	
	$media_final = $soma/$contador;

	#####################################
	
	print_r ($array);
	
	echo "<br><br>";
	
	print_r($estatistica);
	
	echo "<br><br>";
	
	echo "O número {$chave_maior} repetiu {$maior} vezes!";
	
	echo "<br><br>";
	
	print_r ($esperanca);
	
	echo "<br><br>";
	
	echo $media_final;
	
	####################################
	
	$name = 'esperanca.txt';
	$file = fopen($name, 'a');
		$text = $media_final."\r\n";
	fwrite($file, $text);
	fclose($file);
	
	
	
?>