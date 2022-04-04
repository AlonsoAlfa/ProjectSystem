<?php
include("modelados1.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

<header class="p-2 bg-secondary">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#navbarColapsable" aria-controls="navarColapsable">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navarColapsable" class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li>
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li>
                            <a class="nav-link" href="Caracteristicas.html">Caracteristicas</a>
                        </li>
                        <li>
                            <a class="nav-link" href="Contacto.html">Contacto</a>
                        </li>                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <br>
    <br>
    <form action="update.php" method="post">
    <div class="row">
                <div class="col-8 card" style="height: 18rem;">
                <br>
                    <div class="input-group">
                    
                        <span class="input-group-text">Nombre de la tarea</span>
                        <?php
                                    $result1->execute();
                                     while($row1=$result1->fetch(PDO::FETCH_ASSOC)){
                                        echo "<input type='text' readonly class='form-control' value='$row1[nombre]'>";
                                     }?>
                    </div>
                    <br>
                    <div class="input-group">
                    
                        <span class="input-group-text">Nombre de la tarea</span>
                        <?php
                                    $result1->execute();
                                     while($row1=$result1->fetch(PDO::FETCH_ASSOC)){
                                        echo "<input type='text' readonly class='form-control' value='$row1[descrip]'>";
                                     }?>
                    </div>
                    <br>
                    <div class="input-group">
                    
                        <span class="input-group-text">Nombre de la tarea</span>
                        <?php
                                    $result1->execute();
                                     while($row1=$result1->fetch(PDO::FETCH_ASSOC)){
                                        echo "<input type='numeric' readonly class='form-control' value='$row1[porcentaje]'>";
                                     }?>
                    </div>
                    
                    </div>
                    <br>
                </div>
            </div>
            <br>
            <input type="text" name="id" class="form-control form-control-sm" value="<?php echo $id ?>" readonly style="display: none">
        <input type="submit" name="submit" value="Actualizar" class="btn btn-success">
   </form>
</body>
</html>