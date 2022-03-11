<?php 
	require ("conectar.php");
	session_start();
	$controlar= $_SESSION['usuario'];

	if ($controlar == null || $controlar == "") {
		echo "no se encuentra conectado";
		die();
	}
	//TEXTO
	//recibir datos
	
	$titulo= $_POST['titulo'];
	
	


	$guardarBD ="DELETE FROM publicacion WHERE Titulo= '$titulo'";

	if ($conectar->query($guardarBD)===true) {
		header("Location:subir.php");

	} else{
		die("error al insertar los datos");
	}

 ?> 