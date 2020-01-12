<?php
include ("conex.php");

/*DATOS PARA ALUMNOS */
$id_alumnos = $_POST['id_alumnos'];
$clave = $_POST['clave'];
//$pass_cifrado=password_hash($clave,PASSWORD_DEFAULT);
$APPA = $_POST['APPA'];
$APMA = $_POST['APMA'];
$nombre_alumno = $_POST['nombre_alumno'];
$curp = $_POST['curp'];
$sexo = $_POST['sexo']; 
/*DATOS PARA TELEFONO */
$id_telefono=$_POST['id_telefono'];
$telefono=$_POST['num_telefono'];
$descripcion_telefono=$_POST['descripcion_tel'];
/*DATOS PARA CORREO */
$id_correo=$_POST['id_correo'];
$correo=$_POST['correo_electronico'];
$descripcion_correo=$_POST['descripcion_correo'];


/*QUERY INSERTAR EN ALUMNOS*/
$query="INSERT INTO alumnos(id_alumnos,APPA,APMA,nombre_alumno,curp,sexo) VALUES($id_alumnos,'$APPA','$APMA','$nombre_alumno','$curp','$sexo')
        ON DUPLICATE KEY UPDATE id_alumnos=id_alumnos and APPA=APPA and APMA=APMA and nombre_alumno=nombre_alumno and curp=curp and sexo=sexo";
$resultado=$link->query($query);

/*INGRESAR USUARIOS*/ 
if($resultado==true){
    $queryUs="INSERT INTO usuarios(usuarioAlumno,clave) VALUES($id_alumnos,'$clave')";
    $resultado0=$link->query($queryUs);
}

/*QUERY INSERTAR EN TELEFONO*/
if($resultado0==true){
    $query2="INSERT INTO telefono(id_telefono,num_telefono,descripcion_tel) VALUES($id_telefono,$telefono,'$descripcion_telefono')";
    $resultado2=$link->query($query2);
}

/*QUERY INSERTAR EN TELEFONO_ALUMNO*/
if($resultado2==true){
    $query3="INSERT INTO telefono_alumno(id_telefono,id_alumnos) VALUES($id_telefono,$id_alumnos)";
    $resultado3=$link->query($query3);
}

/*QUERY INSERTAR EN CORREO*/
if($resultado3==true){
    $query4="INSERT INTO correo(id_correo,correo_electronico,descripcion_correo) VALUES($id_correo,'$correo','$descripcion_correo')";
    $resultado4=$link->query($query4);
}

/*QUERY INSERTAR EN CORREO_ALUMNO*/
if($resultado4==true){
    $query5="INSERT INTO correo_alumno(id_correo,id_alumnos) VALUES($id_correo,$id_alumnos)";
    $resultado5=$link->query($query5);
}

/*INGRESAR ESPECIALIDAD */
if($resultado5==true){
    $especialidad=$_POST['especialidad'];
    $query6="INSERT INTO carrera_tecnica(id_alumnos,id_especialidad) VALUES($id_alumnos,$especialidad)";
    $resultado6=$link->query($query6);
}
if($resultado6==true){
    $salon=$_POST['salon'];
    $query7="INSERT INTO carrera_alumno(id_alumnos,id_carrera) VALUES($id_alumnos,$salon)";
    $resultado7=$link->query($query7);
}


 
if($resultado7){
    header("location: consultas/consultas_alumnos.php");
}
else{
    echo"INSERSION NO EXITOSA";
}





?>