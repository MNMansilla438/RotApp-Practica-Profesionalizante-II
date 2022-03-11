<?php  
	require ("conectar.php");
	session_start();
	$controlar= $_SESSION['usuario'];

	if ($controlar == null || $controlar == "") {
	
		header("Location:login.php");
	}
?>


<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, intitial-scale=1.0, maximum-scale=1.0, minium-scale=1.0">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	
	<link rel="stylesheet" type="text/css" href="css/subir.css">
	<title></title>
	<link rel="shortcut icon" href="fotos/LogoPestaña.png">

</head>
<body>
	<section id="seccion">
		<article class="articulo">
			<form action="subirBD.php" method="post" enctype="multipart/form-data">
				<h1 class="instrucciones">Titulo</h1><br>

				<input type="text" name="titulo" autofocus class="ingresa" required>
				<br><br>
				
				<h1 class="instrucciones">Texto</h1><br>
				<textarea class="muchotexto"  placeholder="Escribeme.." name="Texto" sentences required>Comité: </textarea>
				
				<br><br>
				<h1 class="instrucciones">Foto</h1><br>
				<input class="SubFotito" type="file" name="foto" accept="image/png, image/jpeg" required="">
				
				<br><br>
			
				<button type="submit" value="Submit" name="Submit" class="boton">SUBIR</button>
				
				
			</form>
			<a class="href" href="cerrar.php">Cerrar sesion</a>  
			<a class="href" href="Borrar.php">Borrar publicacion</a> 
			<a class="href2" href="Modificar.php">Modificar publicacion</a> 
			<a class="href2" href="index.php">Pagina de rotaract</a> 
			

		</article>
	</section>
</body>
</html>