<?php

require "utilitis.php";
session_start();

if(isset($_POST['Pelicula']) && isset($_POST['Descripción']) && isset($_POST['Genero']) && isset($_POST['status']))
{
   
   
       $_SESSION['datos'] =  isset($_SESSION['datos']) ? $_SESSION['datos']: array();
       $datos = $_SESSION['datos'];
        $increment = 1;
        if(!empty($datos))
        {
          $LastElement = getLastElement($datos);
        $increment =  $LastElement['id'] + 1; 
        }
      
        array_push($datos,['id' =>$increment, 'Pelicula' => $_POST['Pelicula'], 'Descripción' => $_POST['Descripción'], 'Genero'=> $_POST['Genero'],'status'=> $_POST['status']]);      
        $_SESSION['datos'] = $datos;
        
 
         
        header('Location: index1.php');
        exit();
        


}

?>