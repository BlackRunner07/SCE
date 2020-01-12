<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../images/cbtis.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/style_consultasProfesores.php" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles Profesor</title>
</head>
<body class="detalles">

<div class="form-group center">
<table BORDER=0 CELLPADDING=1 CELLSPACING=3 class="table table-striped table-dark ta">
    <tr class="dif man">
    
    <td class="ca">Materias impartidas</th>
    <td class="ca">horas</th>
    
    </tr>
<?php
$id=$_REQUEST['id_profesor'];
include ("conex.php");
$query = "SELECT*FROM horas_profesores 
            INNER JOIN materias ON horas_profesores.id_materias=materias.id_materias
            INNER JOIN profesor ON horas_profesores.id_profesor=profesor.id_profesor
            WHERE profesor.id_profesor='$id'
         ";
$result=$link->query($query);
while($row = $result->fetch_assoc()){
    echo '<tr>
        <td class="ca">'.$row['nombre_materias'].'</td>
        <td class="ca">'.$row['horas'].'</td>
        </tr>';
}
?>
</table>
<td class="ca"><a href="añadir_carreraProfesor.php?id_profesor=<?php echo $id;?>"><button type="button" class="btn btn-outline-primary prof">Añadir Materia y Carrera</button></a></td> 
<td class="ca"><a href="modificar_carreraProfesor.php?id_profesor=<?php echo $id;?>"><button type="button" class="btn btn-outline-primary prof">Modificar</button></a></td> 

</div>
<br>
<div class="form-group center">
<table class="table table-striped table-dark ta">
    <tr class="dif man">
  
    <td class="ca">Numero de telefono</th>
    <td class="ca">Descripcion</th>
    </tr>
<?php
$id=$_REQUEST['id_profesor'];
include ("conex.php");
$query = "SELECT*FROM telefono_profesor
            INNER JOIN profesor ON telefono_profesor.id_profesor=profesor.id_profesor
            INNER JOIN telefono ON telefono_profesor.id_telefono=telefono.id_telefono
            WHERE profesor.id_profesor='$id'
         ";
$result=$link->query($query);
while($row = $result->fetch_assoc()){
    echo '<tr>
        <td class="ca">'.$row['num_telefono'].'</td>
        <td class="ca">'.$row['descripcion_tel'].'</td>
        
        </tr>';
}
?>
</table>
<td class="ca"><a href="añadir_telefonoProfesor.php?id_profesor=<?php echo $id;?>"><button type="button" class="btn btn-outline-primary prof">Añadir Telefono</button></a></td> 
<td class="ca"><a href="modificar_telefonoProfesor.php?id_profesor=<?php echo $id;?>"><button type="button" class="btn btn-outline-primary prof">Modificar Telefono</button></a></td> 

</div>
<br>
<div class="form-group center">
<table class="table table-striped table-dark ta">
    <tr class="dif man">
    
    <td class="ca">Correo Profesor</th>
    <td class="ca">Descripcion</th>
    </tr>
<?php
$id=$_REQUEST['id_profesor'];
include ("conex.php");
$query = "SELECT*FROM correo_profesor
            INNER JOIN profesor ON correo_profesor.id_profesor=profesor.id_profesor
            INNER JOIN correo ON correo_profesor.id_correo=correo.id_correo
            WHERE profesor.id_profesor='$id'
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
<td class="ca"><a href="añadir_correoProfesor.php?id_profesor=<?php echo $id;?>"><button type="button" class="btn btn-outline-primary prof">Añadir Correo</button></a></td> 
<td class="ca"><a href="modificar_correoProfesor.php?id_profesor=<?php echo $id;?>"><button type="button" class="btn btn-outline-primary prof">Modificar Correo</button></a></td> 

</div>
<br>
<div class="form-group center"> 
<table class="table table-striped table-dark ta">
    <tr class="dif man">
   
    <td class="ca">SALON</th>
    <td class="ca">TURNO</th>
    <td class="ca">GRUPO</th>
    
    </tr>
<?php
$id=$_REQUEST['id_profesor'];
include ("conex.php");
$query = "SELECT*FROM carrera_profesor
            INNER JOIN profesor ON carrera_profesor.id_profesor=profesor.id_profesor
            INNER JOIN carrera ON carrera_profesor.id_carrera=carrera.id_carrera
            WHERE profesor.id_profesor='$id'
         ";
$result=$link->query($query);
while($row = $result->fetch_assoc()){
    echo '<tr>
        
        <td class="ca">'.$row['nombre_carrera'].'</td>
        <td class="ca">'.$row['turno_carrera'].'</td>
        <td class="ca">'.$row['grupo_carrera'].'</td>
        </tr>';
}
?>
</table>
</div>
<BR>
<div class="form-group center">
<table class="table table-striped table-dark ta">
    <tr class="dif man">
    <td class="ca">NIVEL ACADEMICO</th>
    <td class="ca">NOMBRE ESPECIALIDAD</th>
    
    </tr>
<?php
$id=$_REQUEST['id_profesor'];
include ("conex.php");
$query = "SELECT*FROM nivel_academico
            INNER JOIN profesor ON nivel_academico.id_profesor=profesor.id_profesor
            INNER JOIN gradoestudio ON nivel_academico.id_gradoestudio=gradoestudio.id_gradoestudio
            WHERE profesor.id_profesor='$id'
         ";
$result=$link->query($query);
while($row = $result->fetch_assoc()){
    echo '<tr>
        
        <td class="ca">'.$row['nivel_academico'].'</td>
        <td class="ca">'.$row['nombre_estudio'].'</td>
        </tr>';
}
?>
</table>
<td class="ca"><a href="añadir_nivel.php?id_profesor=<?php echo $id;?>"><button type="button" class="btn btn-outline-primary prof">Añadir Nivel</button></a></td> 
<td class="ca"><a href="modificar_academico.php?id_profesor=<?php echo $id;?>"><button type="button" class="btn btn-outline-primary prof">Modificar Nivel</button></a></td><br><br> 
<a href="../consultas_profesores.php"><button type="button" class="btn btn-outline-primary prof">Regresar</button></a>

</div>


</body>
</html>