<?php 
    require ("conectar.php");

	$Nombre = $_POST['Nombrecomen'];
	$texto = $_POST['Comentario'];
	$diayhora= date("y-m-d h-i");
    $titulo = $_POST['Titulo'];


	if ($Nombre==null) {
		$Nombre= "Anonimo";
	}




	$guardarComenBD ="INSERT INTO comentario(Id_comentario, NombreCom, TextoCom, FechaCom, TituloPu) Values( null, '$Nombre', '$texto', '$diayhora','$titulo')";

	if ($conectar->query($guardarComenBD)===true) {
		header("Location:index.php");

	} else{
		die("error al insertar los datos");
	}

 ?> 
