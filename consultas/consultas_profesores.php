<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../images/cbtis.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style_consultasProfesores.php" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informacion Profesores</title>
</head>
<body class="consultas_profesores">
<?php
	session_start();
	$usuario= $_SESSION['username'];

	if(!isset($usuario)){
		header("location: /gin/login.php");
	}
	else{
	
	
	?>
	    <center>
        <form action="../añadir_profesor.php" method="POST" class="formulario"><br>
            <div class="form-group">
            <label for="exampleFormControlInput1">Ingresar Nuevo Profesor</label>
            <input type="text" required name="id_profesor"class="form-control" id="exampleFormControlInput1" placeholder="ID" values=""/>
            <input type="text" required name="apellido_paterno"class="form-control" id="exampleFormControlInput1" placeholder="APELLIDO PATERNO" values=""/>
            <input type="text" required name="apellido_materno"class="form-control" id="exampleFormControlInput1" placeholder="APELLIDO MATERNO" values=""/>
            <input type="text" required name="nombre"class="form-control" id="exampleFormControlInput1" placeholder="NOMBRE" values=""/>
            </div>
            
            <div class="form-group">
            <label for="exampleFormControlInput1">Ingresar Telefono</label>
            <input type="text" required name="id_telefono"class="form-control" id="exampleFormControlInput1" placeholder="ID_TELEFONO">
            <input type="text" required name="num_telefono"class="form-control" id="exampleFormControlInput1" placeholder="NUMERO">
            <input type="text" required name="descripcion_tel"class="form-control" id="exampleFormControlInput1" placeholder="DESCRIPCION">
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">Ingresar Correo Electronico</label>
            <input type="text" required name="id_correo"class="form-control" id="exampleFormControlInput1" placeholder="ID_CORREO">
            <input type="text" required name="correo_electronico"class="form-control" id="exampleFormControlInput1" placeholder="CORREO">
            <input type="text" required name="descripcion_correo"class="form-control" id="exampleFormControlInput1" placeholder="DESCRIPCION">
			</div>
			<div class="form-group">
            <label for="exampleFormControlInput1">Ingresar Nivel Academico</label>
			<input type="text" required name="id_gradoestudio"class="form-control" id="exampleFormControlInput1" placeholder="ID">
			<input type="text" required name="nivel_academico"class="form-control" id="exampleFormControlInput1" placeholder="Grado academico">
			<input type="text" required name="nombre_estudio"class="form-control" id="exampleFormControlInput1" placeholder="Especialidad egresada">
			</div>
        
            
            <button class="btn btn-outline-secondary exit" type="submit" id="button-addon1" >ACEPTAR</button>
        </form>
    </center>
    
    <center>
    <h1 >Profesores</h1>
        <TABLE BORDER=0 align="center" CELLPADDING=1 CELLSPACING=3 class="table table-striped table-dark"> 
		<tbody>
			<TR class="dif">
				<td class="ca"><div>ID</div></TD>
				<TD class="ca"><div>Apellido Paterno</div></TD>
				<TD class="ca"><div>Apellido Materno</div></TD>
                <TD class="ca"><div>Nombre</div></TD>
                <TD class="ca"><div></div></TD>
				<TD class="ca"><div></div></TD>                   
			</TR>
		</tbody>
<?php
include ("conex.php");
$query = "SELECT * FROM profesor";
$result=$link->query($query);
while($row = $result->fetch_assoc()){ 
?>
<tr>
	<td class="ca"><?php echo $row['id_profesor']; ?></td>
	<td class="ca"><?php echo $row['apellido_paterno']; ?></td>
    <td class="ca"><?php echo $row['apellido_materno']; ?></td>
	<td class="ca"><?php echo $row['nombre']; ?></td>
    <td ><a href="../modificar_profesor.php?id_profesor=<?php echo $row['id_profesor']; ?>"><button type="button" class="btn btn-outline-primary">Modificar</button></a></td> 
    <td><a href="detalles/detalles_profesores.php?id_profesor=<?php echo $row['id_profesor']; ?>"><button type="button" class="btn btn-outline-primary">Detalles</button></a> </td>
	
</tr>
<?php
}
?>
    </table>
        <center>
        <br>
        <a href="../index.php"><button type="button" class="btn btn-secondary btn-lg btn-block">Regresar</button></a>
        </center>
<?php
    }
?>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
