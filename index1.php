
 <?php
  require "header.php";
  require "datos.php";
  
 
      
     $_SESSION['datos'] =  isset($_SESSION['datos']) ? $_SESSION['datos']: array();

    $Estudiantes = $_SESSION['datos'];
   
    if(!empty($Estudiantes))
    {
          if(isset($_GET['Genero']))
          {

               $Estudiantes = SearchStudent( $Estudiantes,'Genero',$_GET['Genero']);

          }

    }


  ?>
<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="css/style.css">

     <link rel="stylesheet" href="css/bootstrap.min.css">
 </head>
 <body>

  

     <div class="container">    
  

  <div class="list"> 
    <h2>Listado de Peliculas</h2>
    </div>
    <h5>Busqueda por Genero</h5>
    <div class="col-md-3">
   <div class="btn-group center">

   <a href="index1.php?Genero=1" class="btn  btn-outline-primary">Accion</a>
   <a href="index1.php?Genero=2" class="btn   btn-outline-primary">Suspenso</a>
   <a href="index1.php?Genero=3" class="btn   btn-outline-primary">Comedia</a>
   <a href="index1.php?Genero=4" class="btn   btn-outline-primary">Terror</a>
   <a href="index1.php?Genero=5" class="btn   btn-outline-primary">Documentales</a>
   <a href="index1.php" class="btn   btn-outline-primary">All</a>
   
   
   </div>
   </div>
<?php
  if(empty($Estudiantes)):?>
 
    <h4 class="enca">No existe ninguna pelicula registrada</h4>
 

 <?php else :?>
 <?php foreach($Estudiantes as $x): ?>
    <ul class="list-group">
  <li class="list-group-item active"><?php echo $x['Pelicula']?></li>
  <li class="list-group-item"><?php echo $x['Descripción']?></li>
  <li class="list-group-item"><?php echo obtenerGenero($x['Genero'])?></li>
  <li class="list-group-item"><?php echo  'status '. $x['status']?></li>
  <li class="list-group-item"><a href="editar.php?id=<?php echo $x['id'];?>">Edit</a></li>
  <li class="list-group-item"><a href="delete.php?id=<?php echo $x['id'];?>">Delete</a></li>
   
 
</ul>

 <?php endforeach;?>
 

 <?php endif;?>
 


    
</div>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.5.0.min.js"></script>
 </body>
 </html>