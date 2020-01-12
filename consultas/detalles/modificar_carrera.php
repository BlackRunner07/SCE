<?php

////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////
include ('conex.php');
/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////
$id=$_REQUEST['id_profesor'];
$cali="SELECT*FROM carrera
";
$resAlumnos=$link->query($cali);
?>

<html lang="es">

	<head>
		<title>Actualizar Salones</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link rel="shortcut icon" href="../../images/cbtis.png">
		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	</head>

	<body>
		<header>
			<div class="alert alert-info">
			<h2>Actualizar Salones</h2>
			</div>
		</header>

		<section>
			<form method="post">
			<table class="table">

				<tr>
					
					<th>AULA</th>
					<th>TURNO</th>
                    <th>GRUPO</th>
				</tr>

				<?php

				while ($registroAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))

				{

					echo'<tr>

						<td hidden><input name="idalu[]" value="'.$registroAlumnos['id_carrera'].'" /></td>

						 <td ><input name="idalu2['.$registroAlumnos['id_carrera'].']" value="'.$registroAlumnos['nombre_carrera'].'" /></td>
                         <td><input name="nom['.$registroAlumnos['id_carrera'].']" value="'.$registroAlumnos['turno_carrera'].'" /></td>
						 <td><input name="carr['.$registroAlumnos['id_carrera'].']" value="'.$registroAlumnos['grupo_carrera'].'" /></td>
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
					

				$actualizar=$link->query("UPDATE carrera SET nombre_carrera='$editID', turno_carrera='$editNom', grupo_carrera='$editCarr'
                                                                         WHERE id_carrera='$ids'");
               
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
       <a href='../consultas_academicas.php?id_profesor=<?php echo $id;?> ' class="btn btn-info col-md-offset-9">Regresar a detalles</a>



		</section>

		<footer>
		</footer>
	</body>

</html>


