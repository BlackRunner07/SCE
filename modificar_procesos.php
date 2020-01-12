<?php
include ("conex.php");
$id=$_REQUEST['id_alumnos'];
$id_alumnos = $_POST['id_alumnos'];
$APPA = $_POST['APPA'];
$APMA = $_POST['APMA'];
$nombre_alumno = $_POST['nombre_alumno'];
$curp = $_POST['curp'];
$sexo = $_POST['sexo'];



$query="UPDATE alumnos SET id_alumnos=$id,APPA='$APPA',APMA='$APMA',nombre_alumno='$nombre_alumno',curp='$curp',sexo='$sexo' WHERE id_alumnos='$id'";
$resultado=$link->query($query);



if($resultado){
    header ("location: consultas/consultas_alumnos.php");
}
else{
    echo "MODIFICACION NO EXITOSA";
    
}

?>