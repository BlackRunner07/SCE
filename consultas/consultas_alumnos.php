<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../images/cbtis.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style_consultasAlumnos.php" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultas Alumnos</title>
</head>
<body class="filtro">
    
<div  class="consultas_alumnos">
<?php
	session_start();
	$usuario= $_SESSION['username'];

	if(!isset($usuario)){
		header("location: ../login/login.php");
	}
	else{
	
	
	?>
    
    <div> 
   
    <center>
        <form action="../añadir.php" method="POST" ><br>
            <div class="form-group">
            <label for="exampleFormControlInput1">Ingresar Nuevo Alumno</label>
            <input type="text" required name="id_alumnos" class="form-control" id="exampleFormControlInput1" placeholder="ID" values=""/>
            <input type="text" required name="clave" class="form-control" id="exampleFormControlInput1" placeholder="CONTRASEÑA" values=""/>
            <input type="text" required name="APPA" class="form-control" id="exampleFormControlInput1" placeholder="APELLIDO PATERNO" values=""/>
            <input type="text" required name="APMA" class="form-control" id="exampleFormControlInput1" placeholder="APELLIDO MATERNO" values=""/>
            <input type="text" required name="nombre_alumno" class="form-control" id="exampleFormControlInput1" placeholder="NOMBRE" values=""/>
            <input type="text" required name="curp" class="form-control" id="exampleFormControlInput1" placeholder="CURP" values=""/>
            <input type="text" required name="sexo" class="form-control" id="exampleFormControlInput1" placeholder="SEXO" values=""/>
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">Ingresar Nuevo Telefono</label>
            <input type="text" required name="id_telefono" class="form-control" id="exampleFormControlInput1" placeholder="ID_TELEFONO">
            <input type="text" required name="num_telefono" class="form-control" id="exampleFormControlInput1" placeholder="NUMERO">
            <input type="text" required name="descripcion_tel" class="form-control" id="exampleFormControlInput1" placeholder="DESCRIPCION">
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">Ingresar Nuevo Correo</label>
            <input type="text" required name="id_correo" class="form-control" id="exampleFormControlInput1" placeholder="ID_CORREO">
            <input type="text" required name="correo_electronico" class="form-control" id="exampleFormControlInput1" placeholder="CORREO">
            <input type="text" required name="descripcion_correo" class="form-control" id="exampleFormControlInput1" placeholder="DESCRIPCION">
            </div>
        
            <div class="form-group">
            <label for="exampleFormControlInput1">Seleccionar Especialidad</label>
            <select name="especialidad" class="form-control" id="exampleFormControlSelect1">
            <option value="">Seleccione una especialidad</option>
            <?php
                     include ('conex.php');
                    $queryE = "SELECT * FROM especialidad";
                    $resultE = $link->query($queryE);

                    while($rowE=$resultE->fetch_assoc()){
                    ?>
                    <option value="<?php echo $rowE['id_especialidad']?>"><?php echo $rowE['nombre_especialidad']?> </option>
                    <?php
                    }
                    ?>
            </select>
            </div>

            <div class="form-group">
            <label for="exampleFormControlInput1">Seleccionar Salon</label>   
            <select name="salon" class="form-control" id="exampleFormControlSelect1">
                    <option value="">Selecciona un Salon</option>
                    <?php
                    include ('conex.php');
                    $queryS = "SELECT * FROM carrera";
                    $resultS = $link->query($queryS);

                    while($rowS=$resultS->fetch_assoc()){
                    ?>
                    <option value="<?php echo $rowS['id_carrera']?>"><?php echo $rowS['nombre_carrera']?> <?php echo $rowS['turno_carrera']?> <?php echo $rowS['grupo_carrera']?></option>
                    <?php
                    }
                    ?>
                </select>
                </div>
                <button class="btn btn-outline-secondary exit" type="submit" id="button-addon1" >ACEPTAR</button>
            
            

                    
            
            
        </form>
    </center>
    </div>
    <div class="tabla_alumnos">
    <center>
    <h1 >Alumnos registrados</h1>
        <TABLE BORDER=0 CELLPADDING=7 CELLSPACING=7 class="table table-striped table-dark"> 
		<tbody>
			<TR class="dif">
				<td class="ca"><div>iD_ALUMNOS</div></TD>
				<TD class="ca"><div>APPA</div></TD>
				<TD class="ca"><div>APMA</div></TD>
				<TD class="ca"><div>NOMBRE_ALUMNO</div></TD>
				<TD class="ca"><div>CURP</div></TD>
				<TD class="ca"><div>SEXO</div></TD>
                <TD class="ca"><div></div></TD>
				<TD class="ca"><div></div></TD>    
			</TR>
		</tbody>
<?php
include ("conex.php");
$query = "SELECT * FROM alumnos";
$result=$link->query($query);
while($row = $result->fetch_assoc()){ 
?>
<tr>
	<td class="ca"><?php echo $row['id_alumnos']; ?></td>
	<td class="ca"><?php echo $row['APPA']; ?></td>
    <td class="ca"><?php echo $row['APMA']; ?></td>
	<td class="ca"><?php echo $row['nombre_alumno']; ?></td>
	<td class="ca"><?php echo $row['curp']; ?></td>
	<td class="ca"><?php echo $row['sexo']; ?></td>
    <td class="ca"><a href="../modificar.php?id_alumnos=<?php echo $row['id_alumnos']; ?>"><button type="button" class="btn btn-outline-primary">Modificar</button></a></td> 
    <td class="ca"><a href="detalles/detalles_alumno.php?id_alumnos=<?php echo $row['id_alumnos']; ?>"><button type="button" class="btn btn-outline-primary">Detalles</button></a> </td>

    </tr>
    
<?php
}
?>
    </table>
    
    <a href="../index.php"><button type="button" class="btn btn-secondary btn-lg btn-block">Regresar</button></a>
    
<?php
    }
?>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
