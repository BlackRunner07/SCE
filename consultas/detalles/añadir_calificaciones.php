
<?php
////////////////// CONEXION A LA BASE DE DATOS //////////////////
include ("conex.php");

?>

<html lang="es">

	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link rel="shortcut icon" href="../../images/cbtis.png">
		<link rel="stylesheet" href="css/estilos.css" rel="stylesheet">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>

		<script>
			
    		$(function(){
				// Clona la fila oculta que tiene los campos base, y la agrega al final de la tabla
				$("#adicional").on('click', function(){
					$("#tabla tbody tr:eq(0)").clone().removeClass('fila-fija').appendTo("#tabla");
				});
			 
				// Evento que selecciona la fila y la elimina 
				$(document).on("click",".eliminar",function(){
					var parent = $(this).parents().get(0);
					$(parent).remove();
				});
			});
		</script>



	</head>

	<body>
    <?php
	session_start();
	$usuario= $_SESSION['username'];

	if(!isset($usuario)){
		header("location: login/login.php");
	}
	else{
	
	
    ?>
    
    <?php
    $alumno=$_REQUEST['id_alumnos'];
    ?>
    
			<form method="post">
				<h3 class="bg-primary text-center pad-basic no-btm">Agregar calificaciones </h3>
				<table class="table bg-info"  id="tabla">
					<tr class="fila-fija">
                        <td><input required name="id_materias[]" placeholder="ID MATERIA"/></td>
						<td><input required name="nombre_materias[]" placeholder="NOMBRE MATERIAS"/></td>
                        <td><input required name="horas[]" placeholder="HORAS A LA SEMANA"/></td>
                        <td><input required name="calificacion[]" placeholder="CALIFICACION"/></td>
	
						<td class="eliminar"><input type="button"   value="Menos -"/></td>
					</tr>
				</table>

				<div class="btn-der">
					<input type="submit" name="insertar" value="Inserta calificacion" class="btn btn-info"/>
					<button id="adicional" name="adicional" type="button" class="btn btn-warning"> Más + </button>
					<a href='detalles_alumno.php?id_alumnos=<?php echo $alumno;?> ' class="btn btn-info col-md-offset-9">Regresar a detalles</a>

				</div>
			</form>

			<?php

				//////////////////////// PRESIONAR EL BOTÓN //////////////////////////
				if(isset($_POST['insertar']))

				{


				$items1 = ($_POST['id_materias']);
				$items2 = ($_POST['nombre_materias']);
				$items3 = ($_POST['horas']);
				$items4 = ($_POST['calificacion']);
				 
				///////////// SEPARAR VALORES DE ARRAYS, EN ESTE CASO SON 4 ARRAYS UNO POR CADA INPUT (ID, NOMBRE, CARRERA Y GRUPO////////////////////)
				while(true) {

				    //// RECUPERAR LOS VALORES DE LOS ARREGLOS ////////
				    $item1 = current($items1);
				    $item2 = current($items2);
                    $item3 = current($items3);
                    $item4 = current($items4);


				    
				    ////// ASIGNARLOS A VARIABLES ///////////////////
				    $id=(( $item1 !== false) ? $item1 : ", &nbsp;");
				    $nom=(( $item2 !== false) ? $item2 : ", &nbsp;");
                    $carr=(( $item3 !== false) ? $item3 : ", &nbsp;");
                    $cali=(( $item4 !== false) ? $item4 : ", &nbsp;");

				    //// CONCATENAR LOS VALORES EN ORDEN PARA SU FUTURA INSERCIÓN ////////
                    $valores='('.$id.',"'.$nom.'","'.$carr.'"),';

				    //////// YA QUE TERMINA CON COMA CADA FILA, SE RESTA CON LA FUNCIÓN SUBSTR EN LA ULTIMA FILA /////////////////////
				    $valoresQ= substr($valores, 0, -1);
				    
				    ///////// QUERY DE INSERCIÓN ////////////////////////////
				    $sql = "INSERT IGNORE INTO materias (id_materias, nombre_materias, horas) 
					VALUES $valoresQ ";
                    $sqlRes=$link->query($sql) ;
                    
                    $sql2 = "INSERT INTO boleta (id_alumnos,id_materias,calificacion)
                    VALUES ($alumno,$id,$cali)";
                    $sqlRes2=$link->query($sql2);

				    
				    // Up! Next Value
				    $item1 = next( $items1 );
				    $item2 = next( $items2 );
                    $item3 = next( $items3 );
                    $item4 = next( $items4 );

				    
				    // Check terminator
				    if($item1 === false && $item2 === false && $item3 === false && $item4 === false  ) break;
    
				}
		
				}

			?>



		</section>

		<footer>
        </footer>
        
        <?php
    }
        ?>
	</body>

</html>


