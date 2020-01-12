<?php
require 'conex.php';
session_start();

$usuario=$_POST['usuario'];
$clave = $_POST['clave'];

$query = "SELECT COUNT(*) as contar FROM administrador where usuario ='$usuario' and clave='$clave' ";


$consulta = mysqli_query($link,$query);
$array=mysqli_fetch_array($consulta);



if($array['contar']>0){
    $_SESSION['username']=$usuario;  
    header("location: ../index.php");
}else {
    header("location: login.php");
}


?>