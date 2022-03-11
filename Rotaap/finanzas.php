<!DOCTYPE html>
<html>
<head>
<?php include("header.php") ?>
<title>Finanzas</title>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------->

<section id="principal">

<section id="publicaciones">

<!-- traer publicacion  --> 				
		<?php 
							require  ("conectar.php");

							$consulta="SELECT * FROM publicacion WHERE Texto like '%finanzas%' ORDER BY fecha DESC";

							if ($resultado=mysqli_query($conectar, $consulta)) {
								while ($registro=mysqli_fetch_assoc($resultado)) {

									
									$titulo=$registro['Titulo']; 
									$data = explode(" ", $registro['fecha']);
									$fecha= $data[0];
									$nombrefoto= $registro['foto'];
									$texto= $registro['Texto'];
									publicar($titulo, $fecha, $nombrefoto, $texto);
									traercom($titulo);
									Hacercom($titulo);
									
								}
				}
		 ?>



<!-- mostrar publicacion --> 
		<?php 
			function publicar($titulo, $fecha, $nombrefoto, $texto)
			{
				?>
				<html><body>
					<article class="post"> 
						<h2 class="titulo-post"><?php echo $titulo; ?></h2>
						<p>
		
					<strong class="fech">Publicado el:</strong>  <span class="fecha"> <span><?php echo $fecha; ?></span>
					</p>
					<img id="fotop" src="subidas/<?php echo $nombrefoto; ?>" class="img-post">
					<p class="parrafo-post"> <?php echo str_replace("\n", "<br>", $texto); ?></p>
					</article>
				</body></html>

				<?php
			}
		
		 ?>

<!-- traer Comentarios   --> 

				
		<?php	
			function traercom($x){
				
					require   ("conectar.php");
					$ConsultaComen="SELECT * FROM comentario WHERE TituloPu = '$x' ORDER BY FechaCom DESC";
					if ($resultadocomen=mysqli_query($conectar, $ConsultaComen)) {
						while ($registrocomen=mysqli_fetch_assoc($resultadocomen)) {
							
							$Nombrecomen=$registrocomen['NombreCom'];
							$HoraComen =explode(" ", $registrocomen['FechaCom']);
							$TextoComen=$registrocomen['TextoCom'];
							publicarComen($Nombrecomen, $HoraComen, $TextoComen);	
							
						}
						
					}
				}
				
		?>
<!-- mostrar  Comentarios  --> 

		<?php	
			function publicarComen($Nombrecomen, $HoraComen, $TextoComen)
			{
				?>
					<html><body>
						<article class="comen" id="comen">
							<p class="nombre"><?php echo $Nombrecomen ." " . $HoraComen[0] ." " . $HoraComen[1]; ?></p>
					
							<p class="comentario"> <?php echo str_replace("\n", "<br>", $TextoComen); ?></p>
						</article>
					</body></html>
				<?php
			}
		?>	
		
<!-- Hacer comentario --> 

		 
			  <?php function Hacercom($z){?>
				<html><body><article class="hcomen">
					<form id="hcomenta"action="comentarBD.php" method="post" enctype="multipart/form-data">
						<h1 class="instrucomen" >Nombre:</h1>
							<input type="text" name="Nombrecomen"  placeholder="Si no llenas este campo aparecera como anonimo" class="Nombretext" > 
						
						<h1 class="instrucomen">Comentario</h1>
						<textarea class="Comentario"  placeholder="Escribe un comentario" name="Comentario" sentences required></textarea>
						<br>
						<input type="hidden" name="Titulo" id="Titulo" Value="<?php echo $z; ?>" >
						<button type="submit" value="Submit" name="Submit" class="boton">SUBIR</button>
					</form>
				</article></body></html>
			<?php	}?>

</section>	
<!-- publicidad --> 	
</section>
<section id=ads>
<aside class="adsBox">
<a href="https://www.google.com/"> 
	<img src="https://campaignsandcoffee.files.wordpress.com/2012/12/179546_456365777743951_2086700720_n.jpg?w=584" alt="fake_Ad" id="imagenRand">
</a>
</aside>
</section>
<script src="mainScript.js"></script>
</body>
</html>



