<?php 
include ("conex.php");

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$query="INSERT INTO administrador(usuario,clave) VALUES('$usuario','$clave')";

$resultado = $link->query($query);

if($resultado){
    header ("location: ../index.php");
}else{
    header("location: añadir_administrador.php");
}
