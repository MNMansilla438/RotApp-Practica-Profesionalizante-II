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
	
    $TituloORI= $_POST['TituloORI'];
	$titulo= $_POST['titulo'];
	$texto = $_POST['Texto'];
	$diayhora= date("y-m-d h-i");

	
	


	
	//IMAGEN

	//recibir datos imagen

	$Nombre_imagen= $_FILES['foto']['name'];


	



    if ($Nombre_imagen==null) {

        $actualizarBD ="UPDATE publicacion SET Titulo='$titulo',Texto='$titulo' WHERE publicacion.Titulo= '$TituloORI'";
        
        

        if ($conectar->query($actualizarBD)===true) {
            header("Location:index.php");
    
        } else{
            die("error al insertar los datos");
        }
    }
    else {
        $destino= 'subidas/'. $_FILES['foto']['name'];
	    move_uploaded_file ($_FILES['foto'] ['tmp_name'], $destino);


        $actualizarBD ="UPDATE publicacion SET Titulo='$titulo',Texto='$titulo',foto='$Nombre_imagen' WHERE publicacion.Titulo= '$TituloORI'";
        
        

        if ($conectar->query($actualizarBD)===true) {
            header("Location:index.php");
    
        } else{
            die("error al insertar los datos");
        }

    }


