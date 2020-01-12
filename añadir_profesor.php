<?php
include ("conex.php");

/*DATOS PARA ALUMNOS */
$id_profesor = $_POST['id_profesor'];
$APPA = $_POST['apellido_paterno'];
$APMA = $_POST['apellido_materno'];
$nombre= $_POST['nombre'];

/*DATOS PARA TELEFONO */
$id_telefono=$_POST['id_telefono'];
$telefono=$_POST['num_telefono'];
$descripcion_telefono=$_POST['descripcion_tel'];
/*DATOS PARA CORREO */
$id_correo=$_POST['id_correo'];
$correo=$_POST['correo_electronico'];
$descripcion_correo=$_POST['descripcion_correo'];

/*NIVEL DE ESTUDIOS */
$id_gradoestudios=$_POST['id_gradoestudio'];
$nivel_academico=$_POST{'nivel_academico'};
$nombre_estudio=$_POST['nombre_estudio'];



/*QUERY INSERTAR EN ALUMNOS*/
$query="INSERT INTO profesor(id_profesor,apellido_paterno,apellido_materno,nombre) VALUES($id_profesor,'$APPA','$APMA','$nombre')
        ON DUPLICATE KEY UPDATE id_profesor=id_profesor and apellido_paterno=apellido_paterno and apellido_materno=apellido_materno and nombre=nombre";
$resultado=$link->query($query);

/*QUERY INSERTAR EN TELEFONO*/
if($resultado==true){
    $query2="INSERT INTO telefono(id_telefono,num_telefono,descripcion_tel) VALUES($id_telefono,$telefono,'$descripcion_telefono')";
    $resultado2=$link->query($query2);
}

/*QUERY INSERTAR EN TELEFONO_ALUMNO*/
if($resultado2==true){
    $query3="INSERT INTO telefono_profesor(id_telefono,id_profesor) VALUES($id_telefono,$id_profesor)";
    $resultado3=$link->query($query3);
}

/*QUERY INSERTAR EN CORREO*/
if($resultado3==true){
    $query4="INSERT INTO correo(id_correo,correo_electronico,descripcion_correo) VALUES($id_correo,'$correo','$descripcion_correo')";
    $resultado4=$link->query($query4);
}

/*QUERY INSERTAR EN CORREO_ALUMNO*/
if($resultado4==true){
    $query5="INSERT INTO correo_profesor(id_correo,id_profesor) VALUES($id_correo,$id_profesor)";
    $resultado5=$link->query($query5);
}
if($resultado5==true){
    $query6 = "INSERT INTO gradoestudio(id_gradoestudio,nivel_academico,nombre_estudio) VALUES($id_gradoestudios,'$nivel_academico','$nombre_estudio')";
    $resultado6=$link->query($query6);
}
if($resultado6==true){
    $query7 = "INSERT INTO nivel_academico(id_gradoestudio,id_profesor) VALUES($id_gradoestudios,$id_profesor)";
    $resultado7=$link->query($query7);
}
 
if($resultado7){
    header("location: consultas/consultas_profesores.php");
}
else{
    echo"INSERSION NO EXITOSA";
}





?>