<?php
require 'conex.php';
session_start();

$usuarioAlumno = $_POST['usuarioAlumno'];
$clave = $_POST['clave'];

$query = "SELECT COUNT(*) as contar FROM usuarios where usuarioAlumno=$usuarioAlumno and clave='$clave' ";

$consulta = mysqli_query($link,$query);
$array=mysqli_fetch_array($consulta);



if($array['contar']>0){
    $_SESSION['alumno']=$usuarioAlumno;  
    header("location: ../index_alumno.php");
}


?>