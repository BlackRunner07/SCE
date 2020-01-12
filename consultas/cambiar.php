<?php
	session_start();
	$usuario= $_SESSION['username'];

	if(!isset($usuario)){
		header("location: login/login.php");
	}
	else{
	
	?>

<?php
    include ("conex.php");
    $id = $_POST['usuario'];
    $password = $_POST['clave'];

    $query="UPDATE administrador SET usuario='$id',clave='$password' WHERE usuario='$usuario'";
    $resultado = $link->query($query);

    if($resultado){
        header ("location: ../index.php");
    }else{
        echo "NO SE PUDO CAMBIAR";
    }
?>

<?php
    }
?>