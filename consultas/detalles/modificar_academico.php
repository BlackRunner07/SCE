<?php

////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////
include ('conex.php');
/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////
$id=$_REQUEST['id_profesor'];
$cali="SELECT*FROM nivel_academico
INNER JOIN profesor ON nivel_academico.id_profesor=profesor.id_profesor
INNER JOIN gradoestudio ON nivel_academico.id_gradoestudio=gradoestudio.id_gradoestudio
WHERE profesor.id_profesor='$id'
";
$resAlumnos=$link->query($cali);
?>

<html lang="es">

	<head>
		<title>Actualizar Nivel</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link rel="shortcut icon" href="../../images/cbtis.png">
		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	</head>

	<body>
		<header>
			<div class="alert alert-info">
			<h2>Actualizar Nivel Academico</h2>
			</div>
		</header>

		<section>
			<form method="post">
			<table class="table">

				<tr>
					
					<th>Nivel Academico</th>
					<th>Nombre especialidad</th>
		
				</tr>

				<?php

				while ($registroAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))

				{

					echo'<tr>

						<td hidden><input name="idalu[]" value="'.$registroAlumnos['id_gradoestudio'].'" /></td>

						 <td hidden><input name="idalu2['.$registroAlumnos['id_gradoestudio'].']" value="'.$registroAlumnos['id_gradoestudio'].'" /></td>
                         <td><input name="nom['.$registroAlumnos['id_gradoestudio'].']" value="'.$registroAlumnos['nivel_academico'].'" /></td>
						 <td><input name="carr['.$registroAlumnos['id_gradoestudio'].']" value="'.$registroAlumnos['nombre_estudio'].'" /></td>
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
					

				$actualizar=$link->query("UPDATE gradoestudio SET id_gradoestudio='$editID', nivel_academico='$editNom',nombre_estudio='$editCarr'
                                                                         WHERE id_gradoestudio='$ids'");
               
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


