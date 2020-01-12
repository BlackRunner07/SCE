<?php

////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////
include ('conex.php');
/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////
$id=$_REQUEST['id_profesor'];
$cali="SELECT*FROM horas_profesores 
INNER JOIN materias ON horas_profesores.id_materias=materias.id_materias
INNER JOIN profesor ON horas_profesores.id_profesor=profesor.id_profesor
WHERE profesor.id_profesor='$id'
";
$resAlumnos=$link->query($cali);
?>

<html lang="es">

	<head>
		<title>Actualizar Carrera</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link rel="shortcut icon" href="../../images/cbtis.png">
		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	</head>

	<body>
		<header>
			<div class="alert alert-info">
			<h2>Actualizar Materias</h2>
			</div>
		</header>

		<section>
			<form method="post">
			<table class="table">

				<tr>
					
					<th>Materia</th>
					<th>Horas</th>
		
				</tr>

				<?php

				while ($registroAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))

				{

					echo'<tr>

						<td hidden><input name="idalu[]" value="'.$registroAlumnos['id_materias'].'" /></td>

						 <td hidden><input name="idalu2['.$registroAlumnos['id_materias'].']" value="'.$registroAlumnos['id_materias'].'" /></td>
                         <td><input name="nom['.$registroAlumnos['id_materias'].']" value="'.$registroAlumnos['nombre_materias'].'" /></td>
						 <td><input name="carr['.$registroAlumnos['id_materias'].']" value="'.$registroAlumnos['horas'].'" /></td>
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
					

				$actualizar=$link->query("UPDATE materias SET id_materias='$editID', nombre_materias='$editNom', horas='$editCarr'
                                                                         WHERE id_materias='$ids'");
               
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


