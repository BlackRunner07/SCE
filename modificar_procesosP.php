<?php
include ("conex.php");

$profesor=$_REQUEST['id_profesor'];
$apellido_paterno=$_POST['apellido_paterno'];
$apellido_materno=$_POST['apellido_materno'];
$nombre=$_POST['nombre'];

$query2="UPDATE profesor SET apellido_paterno='$apellido_paterno', apellido_materno='$apellido_materno', nombre='$nombre' WHERE id_profesor='$profesor'";
$resultado2=$link->query($query2);

if($resultado2){
    header ("location: consultas/consultas_profesores.php");
}
else{
    echo "MODIFICACION NO EXITOSA";
    
}

?>