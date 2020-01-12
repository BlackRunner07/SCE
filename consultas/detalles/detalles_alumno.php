<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../images/cbtis.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/style_consultasAlumnos.php" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles Alumno</title>
</head>

<body class="detalles_alumno">

    <div class="form-group ta">
        <table BORDER=0 CELLPADDING=1 CELLSPACING=3 class="table table-striped table-dark">
            <tr class="dir">

                <td class="ca">ID MATERIA</td>
                <td class="ca">Nombre de la materia</td>
                <td class="ca">Horas</dd>
                <td class="ca">calificacion</td>

            </tr>
            <?php
            $id = $_REQUEST['id_alumnos'];
            include("conex.php");
            $query = "SELECT*FROM boleta 
            INNER JOIN alumnos ON boleta.id_alumnos=alumnos.id_alumnos
            INNER JOIN materias ON boleta.id_materias=materias.id_materias
            WHERE alumnos.id_alumnos='$id'
         ";
            $result = $link->query($query);

            while ($row = $result->fetch_assoc()) {
                $idalumno = $row['id_alumnos'];
                echo '<tr>    
        <td class="ca">' . $row['id_materias'] . '</td>
        <td class="ca">' . $row['nombre_materias'] . '</td>
        <td class="ca">' . $row['horas'] . '</td>
        <td class="ca">' . $row['calificacion'] . '</td>
        </tr>';
            }

            ?>
        </table>
        <td class="ca"><a href="añadir_calificaciones.php?id_alumnos=<?php echo $id; ?>"><button type="button" class="btn btn-outline-primary color">Añadir Materia</button></a></td>
        <td class="ca"><a href="modificar_calificaciones.php?id_alumnos=<?php echo $idalumno; ?>"><button type="button" class="btn btn-outline-primary color">Modificar Materia</button></a></td>
    </div>
    <br>
    <div class="form-group ta">
        <table class="table table-striped table-dark">
            <tr class="dir">
                <td class="ca" class="ca"> ID TELEFONO</td>
                <td class="ca" class="ca">Numero de telefono</td>
                <td class="ca" class="ca">Descripcion</td>
            </tr>
            <?php
            $id = $_REQUEST['id_alumnos'];
            include("conex.php");
            $query = "SELECT*FROM telefono_alumno
            INNER JOIN alumnos ON telefono_alumno.id_alumnos=alumnos.id_alumnos
            INNER JOIN telefono ON telefono_alumno.id_telefono=telefono.id_telefono
            WHERE alumnos.id_alumnos='$id'
         ";
            $result = $link->query($query);
            while ($rowt = $result->fetch_assoc()) {
                echo '<tr>
        <td class="ca">' . $rowt['id_telefono'] . '</td>
        <td class="ca">' . $rowt['num_telefono'] . '</td>
        <td class="ca">' . $rowt['descripcion_tel'] . '</td>
        
        </tr>';
            }
            ?>
        </table>
        <td class="ca"><a href="añadir_telefono.php?id_alumnos=<?php echo $idalumno; ?>"><button type="button" class="btn btn-outline-primary color">Añadir Telefono</button></a></td>
        <td class="ca"><a href="modificar_telefonos.php?id_alumnos=<?php echo $idalumno; ?>"><button type="button" class="btn btn-outline-primary color">Modificar Telefono</button></a></td>
    </div>

    <br>
    <div class="form-group ta">
        <table class="table table-striped table-dark">
            <tr class="dir">
                <td class="ca">ID CORREO</td>
                <td class="ca">Correo Alumno</td>
                <td class="ca">Descripcion</td>
            </tr>
            <?php
            $id = $_REQUEST['id_alumnos'];
            include("conex.php");
            $query = "SELECT*FROM correo_alumno
            INNER JOIN alumnos ON correo_alumno.id_alumnos=alumnos.id_alumnos
            INNER JOIN correo ON correo_alumno.id_correo=correo.id_correo
            WHERE alumnos.id_alumnos='$id'
         ";
            $result = $link->query($query);
            while ($row = $result->fetch_assoc()) {
                echo '<tr>
        <td class="ca">' . $row['id_correo'] . '</td>
        <td class="ca">' . $row['correo_electronico'] . '</td>
        <td class="ca">' . $row['descripcion_correo'] . '</td>
        
        </tr>';
            }

            ?>
        </table>
        <td class="ca"><a href="añadir_correo.php?id_alumnos=<?php echo $idalumno; ?>"><button type="button" class="btn btn-outline-primary color">Añadir Correo</button></a></td>
        <td class="ca"><a href="modificar_correos.php?id_alumnos=<?php echo $idalumno; ?>"><button type="button" class="btn btn-outline-primary color">Modificar Correo</button></a></td>
    </div>
    <br>
    <div class="form-group ta">
        <table class="table table-striped table-dark">
            <tr class="dir">
                <td class="ca">ID CARRERA</td>
                <td class="ca">NOMBRE CARRERA</td>
                <td class="ca">TURNO</td>
                <td class="ca">GRUPO</td>

            </tr>
            <?php
            $id = $_REQUEST['id_alumnos'];
            include("conex.php");
            $query = "SELECT*FROM carrera_alumno
            INNER JOIN alumnos ON carrera_alumno.id_alumnos=alumnos.id_alumnos
            INNER JOIN carrera ON carrera_alumno.id_carrera=carrera.id_carrera
            WHERE alumnos.id_alumnos='$id'
         ";
            $result = $link->query($query);
            while ($row = $result->fetch_assoc()) {
                echo '<tr>
        <td class="ca">' . $row['id_carrera'] . '</td>
        <td class="ca">' . $row['nombre_carrera'] . '</td>
        <td class="ca">' . $row['turno_carrera'] . '</td>
        <td class="ca">' . $row['grupo_carrera'] . '</td>
        </tr>';
            }
            ?>
        </table>
    </div>
    <BR>
    <div class="form-group ta">
        <table class="table table-striped table-dark ">
            <tr class="dir">
                <td class="ca">ID especialidad</td>
                <td class="ca">NOMBRE ESPECIALIDAD</td>
            </tr>
            <?php
            $id = $_REQUEST['id_alumnos'];
            include("conex.php");
            $query = "SELECT*FROM carrera_tecnica
            INNER JOIN alumnos ON carrera_tecnica.id_alumnos=alumnos.id_alumnos
            INNER JOIN especialidad ON carrera_tecnica.id_especialidad=especialidad.id_especialidad
            WHERE alumnos.id_alumnos='$id'
         ";
            $result = $link->query($query);
            while ($row = $result->fetch_assoc()) {
                echo '<tr>
        <td class="ca">' . $row['id_especialidad'] . '</td>
        <td class="ca">' . $row['nombre_especialidad'] . '</td>
        </tr>';
            }
            ?>
        </table>
        <a href="../consultas_alumnos.php"><button type="submit" class="btn btn-outline-secondary">Regresar</button></a>

    </div>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>