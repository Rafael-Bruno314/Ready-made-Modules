<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Adicionar pessoas</title>
		<script type="text/javascript" src="bibliotecaAjax.js"></script>
		<script type="text/javascript" src="POO_1.js"></script>
	</head>
	<body>
	
		<!--<form action="<?php #echo $_SERVER['PHP_SELF'];?>" method="POST"> -->
		<form id="theForm" method="POST" name="theForm" action="javascript:void%200" enctype="multipart/form-data">
		
			<input type="text" name="nome" placeholder="Nome"><br><br>
			<input type="number" name="idade" placeholder="Idade"><br><br>
			<input type="number" name="salario" placeholder="Salario"><br><br>
			
			Ativo?
			<input type="checkbox" name="situacao"><br><br>
			
			<input type="submit" onclick="Confirma()">
		</form>
		<hr>
		<div id="saida">	</div>
		
	</body>
</html>