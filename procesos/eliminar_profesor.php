<?php
include ("conex.php");
$id=$_POST['id_profesor'];
$query="DELETE FROM profesor WHERE id_profesor='$id'";
$resultado=$link->query($query);

if($resultado){
    header ("location: ../consultas/consultas_profesores.php");
}
else{
    echo "insersion no exitosa ";
    
}

?>

