<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="style.php" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Administrador</title>
</head>
<body>

<center>
    <div>
        <h1>INICIAR SESION</h1>
    </div>
    <form action="loguear.php" method="POST" class="tabla">
    <input type="text" name="usuario" placeholder="USUARIO ADMINISTRADOR" class="usuario">
    <br><br>
    <input type="password" name="clave" placeholder="CONTRASEÑA" class="pass">
    <br><br>
    <button type="sumbit" class="entrar">ENTRAR</button>
    <br><br>
    <a href="../../index_publico.php"><input type="button" value="Regresar" class="entrar" ></a>
    </form>
</center>
    
</body>
</html>