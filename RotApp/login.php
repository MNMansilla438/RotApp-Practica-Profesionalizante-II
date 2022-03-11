<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, intitial-scale=1.0, maximum-scale=1.0, minium-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<title>Login</title>
	<link rel="shortcut icon" href="fotos/LogoPestaña.png">


</head>
<body>
	<section id="login">
		<section id="datos">
		<article class="poner">
			<form action="controllogin.php" method="POST">
				<label class="texto">Usuario</label>
				<br>
				<input type="text" name="Nombre" class="ingresa">

				<br><br><br>

				<label class="texto">Contraseña</label>
				<br>
				<input type="password" name="Contraseña" class="ingresa">

				<br><br><br>

				<button type="submit" name="login" class="boton"> Ingresar</button>
				</form>
			</article>
		</section>
	</section>
</body>
</html>