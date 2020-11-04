<?php 
require_once('config.php');
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");
$fecha_sesion  =  date("d/m/Y");
$hora_inicio   = date("g:i:a");


$name     	="urian";
$email    	= "urian@gmail.com";
$hora_fin   = "09:50pm";
$pagina     ="1";

$paginasarray = array('1', '2', '3');

foreach ($paginasarray as $valor) {
	
//VERIFICO SI YA EXISTE UNA VISITA DEL USUARIO EN SESION ESE MISMO DIA
$sqlEmail 			= ("SELECT fecha_sesion, email, pagina FROM visitas WHERE fecha_sesion='".$fecha_sesion."' AND email='".$email."' AND pagina='".$valor."'");
$queryEmail 		= mysqli_query($con, $sqlEmail);
$totalexistencia 	= mysqli_num_rows($queryEmail);
$data 				= mysqli_fetch_array($queryEmail);
$valorpagina 		= ($data['pagina'] +1);

if ($totalexistencia >0) {

	$update = ("UPDATE visitas SET pagina='" .$valorpagina. "' WHERE fecha_sesion='".$fecha_sesion."' AND email='".$email."'");
	$result = mysqli_query($con, $update);

}else{

$InsertVisita = "INSERT INTO visitas(
  nombre,
  email,
  fecha_sesion,
  hora_inicio,
  hora_fin,
  pagina
  )
VALUES (
  '" .$name. "',
  '" .$email. "',
  '" .$fecha_sesion. "',
  '" .$hora_inicio. "',
  '". $hora_fin."',
  '". $pagina."'
)";
$resultInsert = mysqli_query($con, $InsertVisita);

}

}

?>