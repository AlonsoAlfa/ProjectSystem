<?php
try{
    $conexion = new pdo('mysql:host=localhost:3307;port=3307;dbname=login;charset=utf8','root','',array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ));
    }catch(PDOException $pe){
        echo $pe->getMessage();
    } 
?>