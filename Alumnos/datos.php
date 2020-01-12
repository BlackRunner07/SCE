<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <link rel="stylesheet" type="text/css" href="../css/style_index.php" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TU CALIFICACION</title>
</head>
<body class="datos">
<?php
	session_start();
	$usuarioAlumno = $_SESSION['alumno'];

	if(!isset($usuarioAlumno)){
		header("location: ../login/login_alumno.php");
	}
	else{
    ?>

<div class="todo_personal">
<div>
<table BORDER=0 CELLPADDING=1 CELLSPACING=3 class="table table-striped table-dark">
    <tr class="dif">
    <th class="cal">ID</th>
    <th class="cal">Apellido Paterno</th>
    <th class="cal">Apellido Materno</th>
    <th class="cal">Nombre</th>
    <th class="cal">CURP</th>
    <th class="cal"> Sexo</th>

    </tr>
<?php
$id=$_SESSION['alumno'];
include ("conex.php");
$query = "SELECT*FROM boleta 
            INNER JOIN alumnos ON boleta.id_alumnos=alumnos.id_alumnos
            INNER JOIN materias ON boleta.id_materias=materias.id_materias
            WHERE alumnos.id_alumnos='$id'
         ";
$result=$link->query($query);

$row = $result->fetch_assoc();
    echo '<tr>
        <td>'.$row['id_alumnos'].'</td>
        <td>'.$row['APPA'].'</td>
        <td>'.$row['APMA'].'</td>
        <td>'.$row['nombre_alumno'].'</td>
        <td>'.$row['curp'].'</td>
        <td>'.$row['sexo'].'</td>
        
        </tr>';

?>
</table>
</div>   
<div>
<table BORDER=0 CELLPADDING=1 CELLSPACING=3 class="table table-striped table-dark">
    <tr class="dif">
    <th class="cal">Numero(s) Telefonico</th>
    <th class="cal">Descripcion</th>

    </tr>
<?php
include ("conex.php");
$id=$_SESSION['alumno'];
$query = "SELECT*FROM telefono_alumno
            INNER JOIN alumnos ON telefono_alumno.id_alumnos=alumnos.id_alumnos
            INNER JOIN telefono ON telefono_alumno.id_telefono=telefono.id_telefono
            WHERE alumnos.id_alumnos='$id'
         ";
$result=$link->query($query);

while($row = $result->fetch_assoc()){

    echo '<tr>
        <td>'.$row['num_telefono'].'</td>
        <td>'.$row['descripcion_tel'].'</td>
        </tr>';
}

?>
</table>
</div>
<div>
<table BORDER=0 CELLPADDING=1 CELLSPACING=3 class="table table-striped table-dark">
    <tr class="dif">
    <th class="cal">Correo Electronico</th>
    <th class="cal">Descripcion</th>

    </tr>
<?php
include ("conex.php");
$id=$_SESSION['alumno'];
$query = "SELECT*FROM correo_alumno
            INNER JOIN alumnos ON correo_alumno.id_alumnos=alumnos.id_alumnos
            INNER JOIN correo ON correo_alumno.id_correo=correo.id_correo
            WHERE alumnos.id_alumnos='$id'
         ";
$result=$link->query($query);

while($row = $result->fetch_assoc()){

    echo '<tr>
        <td>'.$row['correo_electronico'].'</td>
        <td>'.$row['descripcion_correo'].'</td>
        </tr>';
}

?>
</table>
</div>
<div>
<table class="table table-striped table-dark">
    <tr class="dif">
    <th class="cal">NOMBRE CARRERA</th>
    <th class="cal">TURNO</th>
    <th class="cal">GRUPO</th>
    
    </tr>
<?php
$id=$_SESSION['alumno'];
include ("conex.php");
$query = "SELECT*FROM carrera_alumno
            INNER JOIN alumnos ON carrera_alumno.id_alumnos=alumnos.id_alumnos
            INNER JOIN carrera ON carrera_alumno.id_carrera=carrera.id_carrera
            WHERE alumnos.id_alumnos='$id'
         ";
$result=$link->query($query);
while($row = $result->fetch_assoc()){
    echo '<tr>
        
        <td>'.$row['nombre_carrera'].'</td>
        <td>'.$row['turno_carrera'].'</td>
        <td>'.$row['grupo_carrera'].'</td>
        </tr>';
}
?>
</table>
</div>
<a href="../index_alumno.php"><button type="button" class="btn btn-outline-secondary">Regresar</button></a>
</div>

    <?php 
	}?>
    


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    
</body>
</html>