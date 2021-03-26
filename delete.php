<?php
require 'datos.php';

session_start();

$datos = $_SESSION['datos'];

if(isset($_GET['id']))
{
    $increment = $_GET['id'];

      $IndexStudent = GetIndexOfStudent($datos,'id',$increment);

      unset($datos[$IndexStudent]);

     $_SESSION['datos'] = $datos;

}

header("Location: index1.php");
exit();





?>