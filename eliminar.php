<?php
include ("conex.php");
$id=$_REQUEST['id_alumnos'];

$query="DELETE FROM alumnos WHERE id_alumnos='$id'";
$resultado=$link->query($query);

if($resultado){
    header ("location: consultas/consultas_alumnos.php");
}
else{
    echo "INSERSION NO EXITOSA";
    
}

?>

