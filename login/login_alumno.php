<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.php" />
    <link rel="shortcut icon" href="../images/cbtis.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Alumno</title>
</head>

<body class="login_alumno">
    <?php
    require 'conex.php';
    session_start();

    if (isset($_POST['usuarioAlumno'])) {
        $usuarioAlumno = $_POST['usuarioAlumno'];
        $clave = $_POST['clave'];

        $query = "SELECT COUNT(*) as contar FROM usuarios where usuarioAlumno=$usuarioAlumno and clave='$clave' ";

        $consulta = mysqli_query($link, $query);
        $array = mysqli_fetch_array($consulta);



        if ($array['contar'] > 0) {
            $_SESSION['alumno'] = $usuarioAlumno;
            header("location: ../index_alumno.php");
        }
    }

    ?>

    <div>
        <center>
            <div>
                <span class="login100-form-title p-b-43">CUENTA DE ALUMNO</span>
                <form action="login_alumno.php" method="POST" class="wrap-login100 p-b-160 p-t-50">

                    <div class="cuadro">
                        <div>
                            <input type="text" name="usuarioAlumno" placeholder="USUARIO AlUMNO" class="username">
                        </div>
                        <br><br>
                        <input type="password" name="clave" placeholder="CONTRASEÑA" class="contraseña">
                        <br><br>
                        <div class="container-login100-form-btn">
                            <button type="sumbit" class="login100-form-btn">ENTRAR</button>
                        </div>
                    </div>
                </form>
                <?php
            if (isset($_POST['usuarioAlumno'])) {
                $usuario = $_POST['usuarioAlumno'];
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
            </div>
        </center>
    </div>
</body>

</html>