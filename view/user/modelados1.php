<?php  
try{
    $conexion = new pdo('mysql:host=localhost:3307;port=3307;dbname=login;charset=utf8','root','',array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ));
    }catch(PDOException $pe){
        echo $pe->getMessage();
    }
    $id=($_GET['id']);
    $consulta1 ="SELECT * FROM tarea WHERE id = $id";
    $result1 = $conexion->prepare($consulta1);
?>