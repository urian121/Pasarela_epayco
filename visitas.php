<?php 
require_once('config.php');
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");
$fecha_actual  =  date("d/m/Y");
$hora_inicio   = date("g:i:a");


$name     	   ="urian";
$email    	   = "urian@gmail.com";
$hora_fin      = "09:50pm";
$pagina_actual = "2";
$visitaOne ="1";

	
//VERIFICO SI YA EXISTE UNA VISITA DEL USUARIO EN SESION ESE MISMO DIA Y EN ESA MISMA PAGINA
$sqlEmail 			   = ("SELECT * FROM visitas WHERE email='".$email."' AND fecha_sesion='".$fecha_actual."' AND pagina='".$pagina_actual."'");
$queryEmail 		   = mysqli_query($con, $sqlEmail);
$totalexistencia 	 = mysqli_num_rows($queryEmail);
$data 				     = mysqli_fetch_array($queryEmail);


if ($totalexistencia >0) {
  $visitaweb       = ($data['visitas'] +1);  

	$update = ("UPDATE visitas SET visitas='" .$visitaweb. "' WHERE email='".$email."' AND fecha_sesion='".$fecha_actual."' AND pagina='".$pagina_actual."'");
	$result = mysqli_query($con, $update);
  echo "condicion 1";

}else{
$InsertVisita = "INSERT INTO visitas(
  nombre,
  email,
  fecha_sesion,
  hora_inicio,
  hora_fin,
  pagina,
  visitas
  )
VALUES (
  '" .$name. "',
  '" .$email. "',
  '" .$fecha_actual. "',
  '" .$hora_inicio. "',
  '". $hora_fin."',
  '". $pagina_actual."',
  '". $visitaOne."'
)";
$resultInsert = mysqli_query($con, $InsertVisita);

 echo "condicion 2";
}

?>