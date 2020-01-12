<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="style.php" />
    <link rel="shortcut icon" href="../images/cbtis.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Administrador</title>
</head>

<body class="login">

    <?php
    if (isset($_POST['usuario'])) { 
        require 'conex.php';
        session_start();

        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];

        $query = "SELECT COUNT(*) as contar FROM administrador where usuario ='$usuario' and clave='$clave' ";


        $consulta = mysqli_query($link, $query);
        $array = mysqli_fetch_array($consulta);



        if ($array['contar'] > 0) {
            $_SESSION['username'] = $usuario;
            header("location: ../index.php");
        }
    }

    ?>

    <center>
        <form action="login.php" method="POST" class="tabla">
            <div>
                <h1>INICIAR SESION</h1>
            </div>
            <input type="text" name="usuario" placeholder="USUARIO ADMINISTRADOR" class="usuario">
            <br><br>
            <input type="password" name="clave" placeholder="CONTRASEÑA" class="pass">
            <br><br>
            <input type="submit" value="ENTRAR" class="button">
            <br><br>
            <a href="../index_publico.php"><input type="button" value="Regresar" class="button"></a>
            <?php
            if (isset($_POST['usuario'])) {
                $usuario = $_POST['usuario'];
                $clave = $_POST['clave'];

                $campo  = array();

                if ($array['contar'] <= 0) {
                    array_push($campo, "USUARIO O CONTRASEÑA INCORRECTOS");
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
        </form>

    </center>


</body>

</html>