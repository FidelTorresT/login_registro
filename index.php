<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, 
	 initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Registrate</title>
</head>
<body>
	<div class="contendor">
		<h1 class="titulo">Registrate</h1>
		<hr class="border">
		
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="POST" class="formulario" name="login">
		<div class="form-group">
			<i class="izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
		</div>			
		</form>
	</div>
</body>
</html>
