<?php  
try{
    $conexion = new pdo('mysql:host=localhost:3307;port=3307;dbname=login;charset=utf8','root','',array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ));
    }catch(PDOException $pe){
        echo $pe->getMessage();
    } $rol=1;
$consulta1 ="SELECT * FROM proyecto WHERE id_rol = ? AND porcentaje<100";
$result1 = $conexion->prepare($consulta1);
$consulta2 ="SELECT * FROM proyecto WHERE id_rol = ? AND porcentaje=100";
$result2 = $conexion->prepare($consulta2);
$consulta3 ="SELECT * FROM tarea WHERE id_rol = ? AND porcentaje<100";
$result3 = $conexion->prepare($consulta3);
$consulta4 ="SELECT * FROM tarea WHERE id_rol = ? AND porcentaje=100";
$result4 = $conexion->prepare($consulta4);
?>