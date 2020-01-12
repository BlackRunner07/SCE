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
    $id =$_SESSION['username'];

    $idtel=$_POST['id_telefono'];
    $tel1=$_POST['num_telefono'];
    $descripcion1=$_POST['descripcion_tel'];

    $idtel2=$_POST['id_telefono2'];
    $tel2=$_POST['telefono2'];
    $descripcion2 = $_POST['descripcion2'];

    $idtel3=$_POST['id_telefono3'];
    $tel3=$_POST['telefono3'];
    $descripcion3 = $_POST['descripcion3'];

    $query="INSERT INTO telefono(id_telefono,num_telefono,descripcion_tel) VALUES($idtel,$tel1,'$descripcion1')";
    $resultado=$link->query($query);

    if($resultado){
        
    $query2="INSERT INTO telefono(id_telefono,num_telefono,descripcion_tel) VALUES($idtel,$tel2,'$descripcion2')";
    $resultado2=$link->query($query2);
    }
    else {
        echo"error 1";
    }
    if($resultado2){
        
        $query3="INSERT INTO telefono(id_telefono,num_telefono,descripcion_tel) VALUES($idtel,$tel3,'$descripcion3')";
        $resultado3=$link->query($query3);
    }else {
        echo"error 2";
    }

    if($resultado3){
        
        $query4="INSERT INTO telefono_alumno(id_telefono,id_alumnos) VALUES($idtel,$id)";
        $resultado4=$link->query($query4);
        }else {
            echo"error 3";
        }
        
    if($resultado4){
        
        $query5="INSERT INTO telefono_alumno(id_telefono,id_alumnos) VALUES($idtel2,$id)";
        $resultado5=$link->query($query5);
        }else {
            echo"error 4";
        }
        
    if($resultado5){
        
        $query6="INSERT INTO telefono_alumno(id_telefono,id_alumnos) VALUES($idtel3,$id)";
        $resultado6=$link->query($query6);
        }else {
            echo"error 5";
        }
        
    if($resultado6){
            header ("location: detalles_alumno.php");
        }else{
            echo "ERROR EN LA INSERCION";
        }

?>


<?php
    }
?>