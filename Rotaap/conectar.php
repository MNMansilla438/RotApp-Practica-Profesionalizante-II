<?php 
	//datos de la base de datos 
	$host="localhost";
	$nombre="rotaap";
	$usuario="root";
	$contraseña="";

	$conectar=mysqli_connect($host, $usuario, $contraseña, $nombre);
	if (mysqli_connect_errno()) {
		echo "fallo al conectar la base de datos comunicarse con el area de IT";
		exit();

	}





 ?>