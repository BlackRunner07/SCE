<?php

////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////
include ('conex.php');
/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////
$id=$_REQUEST['id_profesor'];
$telefono="SELECT*FROM telefono_profesor
INNER JOIN profesor ON telefono_profesor.id_profesor=profesor.id_profesor
INNER JOIN telefono ON telefono_profesor.id_telefono=telefono.id_telefono
WHERE profesor.id_profesor='$id'
";
$resAlumnos=$link->query($telefono);
?>

<html lang="es">

	<head>
		<title>Modificar Telefono Profesor</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link rel="shortcut icon" href="../../images/cbtis.png">
		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	</head>

	<body>
		<header>
			<div class="alert alert-info">
			<h2>Actualizar Telefono Profesor</h2>
			</div>
		</header>

		<section>
			<form method="post">
			<table class="table">

				<tr>
					
					<th>Numero de telefono</th>
					<th>Descripcion</th>
		
				</tr>

				<?php

				while ($registroAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))

				{

					echo'<tr>

						<td hidden><input name="idalu[]" value="'.$registroAlumnos['id_telefono'].'" /></td>

						 <td hidden><input name="idalu2['.$registroAlumnos['id_telefono'].']" value="'.$registroAlumnos['id_telefono'].'" /></td>
						 <td><input name="nom['.$registroAlumnos['id_telefono'].']" value="'.$registroAlumnos['num_telefono'].'" /></td>
						 <td><input name="carr['.$registroAlumnos['id_telefono'].']" value="'.$registroAlumnos['descripcion_tel'].'" /></td>
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
					

					$actualizar=$link->query("UPDATE telefono SET id_telefono='$editID', num_telefono='$editNom', descripcion_tel='$editCarr'
																		 WHERE id_telefono='$ids'");
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


