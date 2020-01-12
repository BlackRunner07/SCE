<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/cbtis.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style_administrador.php" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cambios usuario</title>
</head>

<body>
    <?php
    session_start();
    $usuario = $_SESSION['username'];

    if (!isset($usuario)) {
        header("location: ../login/login.php");
    } else {

        ?>
        <?php
            include("conex.php");
            $id = $_SESSION['username'];
            $query = "SELECT*FROM administrador WHERE usuario='$id'";
            $resultado = $link->query($query);
            $row = $resultado->fetch_assoc();
            ?>

        <?php
            if (isset($_POST['usuario'])) {
                include("conex.php");
                $id = $_POST['usuario'];
                $password = $_POST['clave'];

                $query = "UPDATE administrador SET usuario='$id',clave='$password' WHERE usuario='$usuario'";
                $resultado = $link->query($query);
            }

            ?>


        <div>
            <form action="usuario_administrador.php" method="POST">
                <h1>CAMBIAR DATOS ADMINISTRADOR</h1>
                <input type="text" required name="usuario" class="form-control" placeholder="USERNAME" value="<?php echo $row['usuario']; ?>" /></br>
                <input type="password"  name="clave" class="form-control" placeholder="CONTRASEÑA" value="<?php echo $row['clave']; ?>" /></br>
                <button type="submit" class="btn btn-outline-secondary">Aceptar</button>
            </form><br>
            <a href="../index.php"><button type="submit" class="btn btn-outline-secondary">Regresar</button></a>
        </div>
        <?php
            if (isset($_POST['usuario'])) {
                $usuario = $_POST['usuario'];
                $clave = $_POST['clave'];

                $campo  = array();

                if ($usuario == "") {
                    array_push($campo, "INGRESE NOMBRE DE USUARIO");
                }
                if ($clave == "" || strlen($clave) < 8) {
                    array_push($campo, "La contraseña no debe estar vacio, debe tener una extension mayor a 8 caracteres");
                }
                if (count($campo) > 0) {
                    echo "<div class='error'>";
                    for ($i = 0; $i < count($campo); $i++) {
                        echo "<li>" . $campo[$i] . "</div>";
                    }
                } else {
                    echo "<div class='correcto'>
                            DATOS CORRECTOS";
                }
                echo "</div>";
            }
            ?>



    <?php
    }
    ?>
    <div class="rec">
        <h4>CONSEJOS PARA NUEVA CONTRASEÑA</h4>
        <h5>- USAR MAS DE 8 CARACTERES</h5>
        <h5>- NO USAR FRASES O PALABRAS CONOCIDAS</h5>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>