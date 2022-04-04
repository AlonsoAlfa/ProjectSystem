<?php
include("../../model/consults.php");
?>
<?php
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){
    header('location: ../../index.php');
  }

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
                            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li>
                            <a class="nav-link" href="proyecto.php">Proyecto</a>
                        </li>
                        <li>
                            <a class="nav-link" href="Tareas.php">Tareas</a>
                        </li>  
                        <li>
                            <a class="nav-link" href="../../controller/cerrarSesion.php">Cerrar sesion</a>  

                        </li>  
                        <li>
                            
                        <a class="nav-link" href="#" style="margin:left" >  Bienvenido (a) : <?php echo ucfirst($_SESSION['nombre']); ?></a>  
                      

                           
                        </li>           
                    </ul>
                </div>
            </div>
        </nav>
    </header>
   
            <div class="row">
                <div class="col-12">
                    <br />
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Mis Proyectos 
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                            <div class="row">
                                <div class="col-1">
                                </div>
                                <div class="col-10">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th class="table-primary">Nombre Del Proyecto</th>
                                        <th class="table-primary">Descripcion</th>
                                        <th class="table-primary">Porcentaje</th>
                                    </tr>
                                    </thead>
                                    <?php
                                    $result1->execute(array($rol));
                                     while($row1=$result1->fetch(PDO::FETCH_ASSOC)){
                                    
                                        echo "<tr>";
                                        echo "<td>"; echo $row1['nombre']; echo "</td>";
                                        echo "<td>"; echo $row1['descrip']; echo "</td>";
                                        echo "<td>"; echo '%'; echo $row1['porcentaje']; echo "</td>";
                                        echo "<th> <a href='#'><button type='button' class='btn btn-success'>Actualizar</button></a></td>";
                                        echo "</tr>";
                                     }?>
                                     </table>
                                     </div>
                                     <div class="col-1">
                                     </div>
                            </div>
                                </div>
                            </div>
                        </div>
                      
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Mis Proyectos Concluidos 
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <div class="row">
                                <div class="col-1">
                                </div>
                                <div class="col-10">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th class="table-primary">Nombre Del Proyecto</th>
                                        <th class="table-primary">Descripcion</th>
                                        <th class="table-primary">Estatus</th>
                                    </tr>
                                    </thead>
                                    <?php
                                    $result2->execute(array($rol));
                                     while($row2=$result2->fetch(PDO::FETCH_ASSOC)){
                                    
                                        echo "<tr>";
                                        echo "<td>"; echo $row2['nombre']; echo "</td>";
                                        echo "<td>"; echo $row2['descrip']; echo "</td>";
                                        echo "<td> <div class='alert alert-primary' role='alert'>Proyecto Completado</div></td>";
                                        echo "<td><button type='button' class='btn btn-outline-primary'>Ver</button></td>";
                                        echo "</tr>";
                                     }?>
                                     </table>
                                     </div>
                                     <div class="col-1">
                                     </div>
                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Mis Tareas 
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <div class="row">
                                <div class="col-1">
                                </div>
                                <div class="col-10">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th class="table-primary">Nombre De La Tarea</th>
                                        <th class="table-primary">Descripcion</th>
                                        <th class="table-primary">Porcentaje</th>
                                    </tr>
                                    </thead>
                                    <?php
                                    $result3->execute(array($rol));
                                     while($row3=$result3->fetch(PDO::FETCH_ASSOC)){
                                    
                                        echo "<tr>";
                                        echo "<td>"; echo $row3['nombre']; echo "</td>";
                                        echo "<td>"; echo $row3['descrip']; echo "</td>";
                                        echo "<td>"; echo '%'; echo $row3['porcentaje']; echo "</td>";
                                        echo "<th> <a href='#'><button type='button' class='btn btn-success'>Actualizar</button></a></td>";
                                        echo "</tr>";
                                     }?>
                                     </table>   
                                </div>
                                <div class="col-1">
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                                <div class="col-1">
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>