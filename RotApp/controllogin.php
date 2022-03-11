<?php 
	require ("conectar.php");
		$Usuario= $_POST['Nombre'];
		$Contraseña= $_POST['Contraseña'];
		
		$consulta="SELECT * FROM administrador WHERE NombreAD='$Usuario' and Contraseña='$Contraseña'";
	

		$ejecutar= mysqli_query($conectar, $consulta);

		$row=mysqli_fetch_array($ejecutar);

		if (!$row['NombreAD']) {
			echo "error ";
		}else{
			session_start();
			$_SESSION['usuario']=$Usuario;
			header("Location:subir.php");
		}
		
	
 ?>