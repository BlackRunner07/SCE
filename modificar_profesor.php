<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/cbtis.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style_consultasProfesores.php" />
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Modificar Profesor</title>
</head>
<body class="modificar">
<?php
	session_start();
	$usuario= $_SESSION['username'];

	if(!isset($usuario)){
		header("location: login/login.php");
	}
	else{
	
	
	?>

<center>
    <h1 class="encabezado">PROFESOR A MODIFICAR</h1>
    <div class="form-group">

    <?php
            $id=$_REQUEST['id_profesor'];
            include ("conex.php");
            $query = "SELECT * FROM profesor WHERE id_profesor='$id' ";
            $result=$link->query($query);
            $row = $result->fetch_assoc(); 
           
           
        ?>
        
        <form action="modificar_procesosP.php?id_profesor=<?php echo $row['id_profesor']; ?>" method="POST"><br>
            <h2 class="numero"><?php echo $row['id_alumnos'];?></h2><br>
            <input type="text" required name="apellido_paterno"class="form-control" id="exampleFormControlInput1" placeholder="APELLIDO PATERNO" value="<?php echo $row['apellido_paterno'];?>"/></br>
            <input type="text" required name="apellido_materno"class="form-control" id="exampleFormControlInput1" placeholder="APELLIDO MATERNO" value="<?php echo $row['apellido_materno'];?>"/></br>
            <input type="text" required name="nombre"class="form-control" id="exampleFormControlInput1" placeholder="NOMBRE" value="<?php echo $row['nombre'];?>"/></br></br>
            <button type="submit" class="btn btn-outline-secondary mod">Aceptar</button>
            <a href="consultas/consultas_profesores.php"><button type="submit" class="btn btn-outline-secondary mod">Regresar</button></a>
        </form>
    </center>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<?php
    }
?>
</body>
</html>

