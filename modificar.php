<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="css/style_index.php" />
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/cbtis.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style_consultasAlumnos.php" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Modificar Alumnos</title>
</head>
<body class="modificar">


    <h1 class="encabezado">ALUMNO A MODIFICAR</h1>
    <center>
    <?php
            $id=$_REQUEST['id_alumnos'];

            include ("conex.php");

            $query = "SELECT * FROM alumnos WHERE id_alumnos='$id' ";
            $result=$link->query($query);
            $row = $result->fetch_assoc(); 
            if($result){
                $query2="SELECT * FROM telefono_alumno WHERE id_alumnos='$id'";
                $result2=$link->query($query2);
                $row2 = $result2->fetch_assoc();
            }
            if($result2){
                $query3 = "SELECT * FROM correo_alumno WHERE id_alumnos = '$id'";
                $result3 = $link->query($query3);
                $row3 = $result3->fetch_assoc();
            }
           
        ?>
        <div class="form-group">
        <form action="modificar_procesos.php?id_alumnos=<?php echo $row['id_alumnos']; ?>" method="POST"><br>
            <h1 class="numero"><?php echo $row['id_alumnos'];?></h1><br>
            <input type="text" required name="APPA" class="form-control" id="exampleFormControlInput1" placeholder="APELLIDO PATERNO" value="<?php echo $row['APPA'];?>"/><br>
            <input type="text" required name="APMA" class="form-control" id="exampleFormControlInput1" placeholder="APELLIDO MATERNO" value="<?php echo $row['APMA'];?>"/><br>
            <input type="text" required name="nombre_alumno" class="form-control" id="exampleFormControlInput1" placeholder="NOMBRE" value="<?php echo $row['nombre_alumno'];?>"/><br>
            <input type="text" required name="curp" class="form-control" id="exampleFormControlInput1" placeholder="CURP" value="<?php echo $row['curp'];?>"/><br>
            <input type="text" required name="sexo" class="form-control" id="exampleFormControlInput1" placeholder="SEXO" value="<?php echo $row['sexo'];?>"/><br>
            <button type="submit" class="btn btn-outline-secondary">Aceptar</button>
            <a href="consultas/consultas_alumnos.php"><button type="submit" class="btn btn-outline-secondary">Regresar</button></a>
        </form>
        </div>
    </center>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>

