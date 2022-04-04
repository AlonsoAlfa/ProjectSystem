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
    <title>Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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

    
    <div id="wrapper" class="container">
  
  

    <hr>
         <form  method="POST" name="form-work" action="logica/guardar.php">
     
                 <fieldset>
                 
                   <div class="form-group">
                     <div class="col-md-6">
                       <label class="control-label" for="nome">Nombre de la tarea</label>
                       <input name="nombre" class="form-control" placeholder="Nombre del proyecto" type="text">
                       </div>
                     </div>
           
                   <div class="form-group">
                       <div class="col-md-6">
                         <label class="control-label" for="surname">Descripción</label>
                         <input name="descrip" class="form-control" placeholder="Descripción" type="text">
                       </div>
                     </div>
           
                     
                     <div class="form-group">
                       <div class="col-md-6">
                         <label class="control-label" for="surname">Tipo de Usuario</label>
                         <input name="id_rol" class="form-control" placeholder="Tipo de Usuario" type="number" min="1" max="2">
                       </div>
                     </div>
                    
           
                     <div class="form-group">
                       <div class="col-md-6">
                         <label class="control-label" for="porcen">Porcentaje</label>
                         <input name="porcentaje" class="form-control" placeholder="" type="number" min="1" max="100">
                       </div>
                     </div>
           
                  
                   
                     <div class="form-group">
                       <div class="col-md-12">
                         <button type="submit" class="btn btn-primary">Guardar</button>
                       </div>
                     </div>     
                 </fieldset> 
               </form>
  
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>