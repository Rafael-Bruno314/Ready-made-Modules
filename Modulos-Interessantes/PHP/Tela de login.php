<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>
	</head>
	<body>
	
		
		<form id="theForm" method="POST" name="theForm" action="ope.php" enctype="multipart/form-data">
			<fieldset id="fie">
			<legend> LOGIN </legend><br/>
			<label>NOME: </label>
			<input type="text" name="login" placeholder="Login"><br/><br/>
			<label>SENHA: </label>
			<input type="password" name="senha" placeholder="Senha"><br/><br/>
			
			<input type="submit" value="LOGAR">
			</fieldset>
		</form>
		<hr>
		<div id="saida">	</div>
		
	</body>
</html>