<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <link rel="stylesheet" type="text/css" href="../css/style_index.php" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TU CALIFICACION</title>
</head>
<body class="calificaciones">
   

   
<?php
	session_start();
	$usuarioAlumno = $_SESSION['alumno'];

	if(!isset($usuarioAlumno)){
		header("location: ../login/login_alumno.php");
	}
	else{
    ?>

        
<div id="box">
    <main id="center">
   <table BORDER=0 CELLPADDING=1 CELLSPACING=3 class="table table-striped table-dark">
   <thead> 
   <tr class="dif">
    <th scope="col" class="cal"> Materia</th>
    <th scope="col" class="cal">Calificacion</th>
    </tr>
    </thead>
<?php
include ("conex.php");
$id=$_SESSION['alumno'];
$query = "SELECT*FROM boleta 
            INNER JOIN alumnos ON boleta.id_alumnos=alumnos.id_alumnos
            INNER JOIN materias ON boleta.id_materias=materias.id_materias
            WHERE alumnos.id_alumnos='$id'
         ";
$result=$link->query($query);

while($row = $result->fetch_assoc()){

    echo '<tr>
        <td>'.$row['nombre_materias'].'</td>
        <td>'.$row['calificacion'].'</td>
        </tr>';
}

?>

</table>
<a href="../index_alumno.php"><button type="button" class="btn btn-outline-primary" >Regresar</button></a>
</main>
</div>


    <?php 
    }?>
    







<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    
</body>
</html>