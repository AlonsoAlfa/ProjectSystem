<?php  
try{
    $conexion = new pdo('mysql:host=localhost:3307;port=3307;dbname=proyecto;charset=utf8','root','',array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ));
    }catch(PDOException $pe){
        echo $pe->getMessage();
    }
    $ids=trim($_POST['id']);
    $porcentaje=trim($_POST['porcentaje']);
    $consulta = "UPDATE tarea SET `porcentaje`= :porcentaje WHERE `id` = :id";
    $sql = $conexion->prepare($consulta);
    $sql->bindParam(':id',$ids,PDO::PARAM_INT);
    $sql->bindParam(':porcentaje',$porcentaje,PDO::PARAM_INT);
    $sql->execute();
    if($sql->rowCount() > 0)
    {
    $count = $sql -> rowCount();
    echo"<script type=\"text/javascript\">alert('Registro Exitoso'); </script>"; 
    }
    else{
        echo"<script type=\"text/javascript\">alert('Ocurrio Algun error'); </script>"; 
    }    
?>