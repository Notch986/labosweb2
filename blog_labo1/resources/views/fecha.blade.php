@extends('plantilla')
@section('pestaña_name','Saludo')
@section('content')
<h1>Fecha</h1>


<?php

// Formato 24 horas (de 1 a 24) 

$hora = date('G'); if (($hora >= 3) AND ($hora < 12)) 
  { 
    $mensaje = "Buenos dias"; 
  } 
  else if (($hora >= 12) AND ($hora < 18)) 
  { 
    $mensaje = "Buenas tardes"; 
  } 
  else
  { 
  $mensaje = "Buenas noches"; 
  } 
 echo $mensaje;


?>
@endsection