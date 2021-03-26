<?php 

function getLastElement($listado)
{

$countlistado =count($listado);
$LastElement = $listado[$countlistado -1];

return $LastElement;

}


function SearchStudent($listado,$property,$value)
{

$filter=[];

foreach($listado as $student)
{

  if($student[$property] == $value)
  {

    array_push($filter,$student);
  }


}
return $filter;

}

function GetIndexOfStudent($listado,$property,$value)
{

$Index = 0;

foreach($listado as $key =>  $student)
{

  if($student[$property] == $value)
  {
    
     $Index = $key;
    
  }


}
return $Index;

}



function obtenerGenero($NomGenero)
  {
      return $GLOBALS['Genero'][$NomGenero];
  }


  $Genero = [1 => "Accion", 2 => "Suspenso", 3 => "Comedia", 4 => "Terror", 5 => "Documentales"];

?>