<?php

////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////
include ('conex.php');
/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////
$id=$_REQUEST['id_profesor'];
$correo="SELECT*FROM correo_profesor
INNER JOIN profesor ON correo_profesor.id_profesor=profesor.id_profesor
INNER JOIN correo ON correo_profesor.id_correo=correo.id_correo
WHERE profesor.id_profesor='$id'
";
$resAlumnos=$link->query($correo);
?>

<html lang="es">

	<head>
		<title>Actualizar Correos</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link rel="shortcut icon" href="../../images/cbtis.png">
		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	</head>

	<body>
		<header>
			<div class="alert alert-info">
			<h2>Actualizar Correos</h2>
			</div>
		</header>

		<section>
			<form method="post">
			<table class="table">

				<tr>
					
					<th>Correo Electronico</th>
					<th>Descripcion</th>
		
				</tr>

				<?php

				while ($registroAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))

				{

					echo'<tr>

						<td hidden><input name="idalu[]" value="'.$registroAlumnos['id_correo'].'" /></td>

						 <td hidden><input name="idalu2['.$registroAlumnos['id_correo'].']" value="'.$registroAlumnos['id_correo'].'" /></td>
						 <td><input name="nom['.$registroAlumnos['id_correo'].']" value="'.$registroAlumnos['correo_electronico'].'" /></td>
						 <td><input name="carr['.$registroAlumnos['id_correo'].']" value="'.$registroAlumnos['descripcion_correo'].'" /></td>
						</tr>';
				}


				?>

			</table>
			<input type="submit" name="actualizar" value="Actualizar Registros" class="btn btn-info col-md-offset-9" />
		</form>

		<?php

			if(isset($_POST['actualizar']))
			{
				foreach ($_POST['idalu'] as $ids) 
				{
					$editID=mysqli_real_escape_string($link, $_POST['idalu2'][$ids]);
					$editNom=mysqli_real_escape_string($link, $_POST['nom'][$ids]);
					$editCarr=mysqli_real_escape_string($link, $_POST['carr'][$ids]);
					

					$actualizar=$link->query("UPDATE correo SET id_correo='$editID', correo_electronico='$editNom', descripcion_correo='$editCarr'
																		 WHERE id_correo='$ids'");
				}

				if($actualizar==true)
				{
					echo "MODIFICACION EXITOSA ";
				}

				else
				{
					echo "NO FUNIONA!";
				}
			}

        ?>
       <a href='detalles_profesores.php?id_profesor=<?php echo $id;?> ' class="btn btn-info col-md-offset-9">Regresar a detalles</a>



		</section>

		<footer>
		</footer>
	</body>

</html>


