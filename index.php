
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
 <?php
    
    require "header.php";
    require "datos.php";
  
  ?>
  
                                                      

  <h1 class="titu bg-primary text-white">Bienvenido al programa que registra tus peliculas</h1>
   <div class="container container1"> 
 <div class="centro"> 
 

 <form  method="POST" action="index1.php">
 <h3 class="h3s">Datos de las peliculas</h3>
  <div class="form-group col-md-7">
    <label for="Pelicula" class="titulo">Pelicula</label>
    <input type="text" class="form-control" id="Pelicula" name="Pelicula">
  </div>
  <div class="form-group  col-md-7">
    <label for="Descripción" class="titulo">Descripción</label>
    <input type="text" class="form-control" id="Descripción"  name="Descripción">
  </div>
  

  <div class="form-group col-md-7">
  <label for="inputGroupSelect01" class="titulo">Genero</label>
  <select name="Genero" class="custom-select" id="inputGroupSelect01">
   <?php foreach($Genero as $pe => $tex):  ?>
     <option value="<?php echo $pe?>"><?php echo $tex?> </option>

   <?php endforeach; ?>
  </select>
  </div>
   
   </div>
   <div>
   <div class="form-group  col-md-7">

</div>
  <div class="form-check">
  <label class="form-check-label" for="check" class="activo">
  <input class="form-check-input" type="radio" value="Activo" id="check" name="status" checked Hidden>
   </div>
  </div>
  

  <button type="submit" class="btn btn-primary  col-md-2">Submit</button>
</form>
 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.5.0.min.js"></script>
 </body>
 </html>