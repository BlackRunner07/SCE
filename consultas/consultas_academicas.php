<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/cbtis.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style_consultasAcademicas.php" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultas Academicas</title>
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

<div class="form-group">
    <center>
    <label for="exampleFormControlInput1">Carreras con Aulas</label>
        <TABLE BORDER=0 align="center" CELLPADDING=1 CELLSPACING=3 class="table table-striped table-dark"> 
		<tbody>
			<TR class="dif">
				<td class="ca">iD_AULA</TD>
                <TD class="ca">ABREVIATURA_AULA</TD>
                <td class="ca">Turno</TD>
				<TD class="ca">Grupo</TD>
               
			</TR>
		</tbody>
<?php
include ("conex.php");
$query = "SELECT * FROM carrera";
$result=$link->query($query);
while($row = $result->fetch_assoc()){ 
?>
<tr>
	<td class="ca"><?php echo $row['id_carrera']; ?></td>
	<td class="ca"><?php echo $row['nombre_carrera']; ?></td>
    <td class="ca"><?php echo $row['turno_carrera']; ?></td>
    <td class="ca"><?php echo $row['grupo_carrera']; ?></td>
	</tr>
<?php
}
?>
    </table>
        
        <td class="ca"><a href="detalles/añadir_Carrera.php"><button type="button" class="btn btn-outline-primary">Añadir Salon</button></a></td> 
        <td class="ca"><a href="detalles/modificar_carrera.php?id_profesor=<?php echo $id;?>"><button type="button" class="btn btn-outline-primary">Modificar Salon</button></a></td> 
        </center>
</div>
        

<div class="form-group">
        <center>
        <label for="exampleFormControlInput1">Especialidades</label>
        <TABLE BORDER=0 align="center" CELLPADDING=1 CELLSPACING=3 class="table table-striped table-dark"> 
		<tbody>
			<TR class="dif"> 
				<td class="ca"><div>iD ESPECIALIDAD</div></TD>
                <TD class="ca"><div>NOMBRE ESPECILIDAD</div></TD>
                
               
			</TR>
		</tbody>
<?php
include ("conex.php");
$query = "SELECT * FROM especialidad";
$result=$link->query($query);
while($row = $result->fetch_assoc()){ 
?>
<tr>
	<td class="ca"><?php echo $row['id_especialidad']; ?></td>
	<td class="ca"><?php echo $row['nombre_especialidad']; ?></td>
	</tr>
<?php
}
?>
    </table>
        <br>
        <td class="ca"><a href="detalles/añadir_especialidad.php"><button type="button" class="btn btn-outline-primary">Añadir Especialidad</button></a></td> 
        <td class="ca"><a href="detalles/modificar_especialidad.php?id_profesor=<?php echo $id;?>"><button type="button" class="btn btn-outline-primary">Modificar Especialidad</button></a></td>     
       
    </center><br>
    <a href="../index.php"><button type="submit" class="btn btn-outline-secondary mod">Regresar</button></a>
    </div>

    <?php
    }
    ?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>