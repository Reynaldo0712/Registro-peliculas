
 <?php
  require "header.php";
  require "utilitis.php";

session_start();
 if(isset($_GET['id']))
{   $data = $_GET['id'];
    $_SESSION['datos'] =  isset($_SESSION['datos']) ? $_SESSION['datos']: array();
    $datos = $_SESSION['datos'];
    $Element = SearchStudent($datos,'id',$data)[0];
    $ElementIndex = GetIndexOfStudent($datos,'id',$data);

    if(isset($_POST['Pelicula']) && isset($_POST['Descripción']) && isset($_POST['Genero']) && isset($_POST['status']))
    {
       
            $updated = ['id' => $data, 'Pelicula' => $_POST['Pelicula'], 'Descripción' => $_POST['Descripción'], 'Genero'=> $_POST['Genero'],'status'=>$_POST['status']];      
           
             $datos[$ElementIndex] =$updated;
            $_SESSION['datos'] = $datos;
            header("Location: index1.php");
            exit();
    
    }
}
else
{

header("Location: index1.php");
 exit();

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


 <h1 class="titu bg-primary text-white">Bienvenido a editar los datos de las peliculas</h1>
     <div class="container container1">    
 
   
     <div class="centro"> 

 <form  method="POST" action="editar.php?id=<?php echo $Element['id']?>" class="formu">
<h3 class="h3s">Editar datos del estudiante</h3>
  <div class="form-group col-md-7">
    <label for="Pelicula" class="titulo">Pelicula</label>
    <input type="text" class="form-control" id="Pelicula" name="Pelicula" value="<?php echo $Element['Pelicula']?>">
  </div>
  <div class="form-group  col-md-7">
    <label for="Descripción" class="titulo">Descripción</label>
    <input type="text" class="form-control" id="Descripción"  name="Descripción"  value="<?php echo $Element['Descripción']?>">
  </div>
  
  <div class="form-group col-md-7">
    <label for="inputGroupSelect01" class="titulo">Genero</label>

  <select name="Genero" class="custom-select" id="inputGroupSelect01">
   <?php foreach($Genero as $pe => $tex):?>
     <option value="<?php echo $pe?>"><?php echo $tex?> </option>

   <?php endforeach; ?>
  </select>
  </div>
  
   </div>
   
 
   
  <div class="form-check">
  <input class="form-check-input check" type="radio" value="Activo" id="check1"  name="status">
  <label class="form-check-label check titulo"  for="check1">
   Activo
  </label>
</div>

<div class="form-check">
  <input class="form-check-input check" type="radio" value="Inactivo" id="check" name="status">
  <label class="form-check-label check titulo"   for="check">
   Inactivo
  </label>
</div>
  

  <button type="submit" class="btn btn-primary  col-md-2">Submit</button>
</form>



<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.5.0.min.js"></script>
 </body>
 </html>