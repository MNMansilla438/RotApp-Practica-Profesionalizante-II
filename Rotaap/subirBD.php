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
	$texto = $_POST['Texto'];
	$diayhora= date("y-m-d h-i");

	
	


	
	//IMAGEN

	//recibir datos imagen

	$Nombre_imagen= $_FILES['foto']['name'];


	$destino= 'subidas/'. $_FILES['foto']['name'];

	move_uploaded_file ($_FILES['foto'] ['tmp_name'], $destino);



	$guardarBD ="INSERT INTO publicacion(Titulo, Texto, foto, fecha) Values( '$titulo', '$texto', '$Nombre_imagen', '$diayhora')";

	if ($conectar->query($guardarBD)===true) {
		header("Location:subir.php");

	} else{
		die("error al insertar los datos");
	}

 ?> 