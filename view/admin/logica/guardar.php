<?php
 require 'conexion.php';
  
 $nombre  = $_POST['nombre'];
 $descrip  = $_POST['descrip'];
 $porcentaje = $_POST['porcentaje'];
 $id_rol = $_POST['id_rol'];

$insertar = "INSERT INTO proyecto VALUES (',','$nombre','$descrip','$id_rol','$porcentaje') ";
$insertar2 = "INSERT INTO tarea VALUES (',','$nombre','$descrip','$id_rol','$porcentaje') ";

$query = mysqli_query($conectar, $insertar);
$query2 = mysqli_query($conectar, $insertar2);

if($query){

   echo "<script> alert('correcto');
    location.href = '../proyecto.php';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '../proyecto.php';
    </script>";
}

if($query2){

    echo "<script> alert('correcto');
     location.href = '../tareas.php';
    </script>";
 
 }else{
     echo "<script> alert('incorrecto');
     location.href = '../tareas.php';
     </script>";
 }
 
 
 




?>