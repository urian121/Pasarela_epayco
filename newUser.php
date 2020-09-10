<?php
include('config.php');
date_default_timezone_set("America/Bogota");

$name           = $_POST['name'];
$phone          = $_POST['phone'];
$email          = $_POST['email'];
$password       = $_POST['password'];
$fechActual    =  date("d/m/Y");


$query = "INSERT INTO login(
  name,
  phone,
  email,
  password,
  fechaRegistro
  )
VALUES (
  '" .$name. "',
  '" .$phone. "',
  '" .$email. "',
  '" .$password."',
  '". $fechActual."'
)";
$result = mysqli_query($con, $query);


//ENVIANDO INFORMACION AL EMAIL DEL USUARIO
$para = $email;
$titulo = 'Registro en ipavisual';
$mensaje = "<html>".
"<head><title>Email desde ipavisual</title>".
"<style>* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: 'Nunito', sans-serif;
    color: #333;
    font-size: 14px;
    background:#222;
}
.contenedor{
    width: 80%;
    min-height:auto;
    text-align: center;
    margin: 0 auto;
    padding: 40px;
    background: #ececec;
    }
    .hola{
    color:#333;
    font-size:25px;
    font-weight:bold;
    }
    img{
    margin-left: auto;
    margin-right: auto;
    display: block;
    padding:0px 0px 20px 0px;
   }
   .logo{
    width:30%;
   }
    </style></head>".
            "<body>" .
                "<div class='contenedor'>".
                "<p>&nbsp;</p>" .
                "<p>&nbsp;</p>" .
                    "<span class='hola'>Bienvenido Sr(a), <strong>" . $name . "</strong></span>" .
                    "<p>&nbsp;</p>" .
                    "<p>Ya te encuentras registrado en nuestra plataforma ipavisual, inicia sesion para que puedas ver mejor la galeria de cursos disponibles.</p> " .
                    "<p>&nbsp;</p>" .
                    "<p>Usuario: <strong>" . $email . "</strong> " .
                    "<p>Clave: <strong> " . $password . "</strong>" .
                    "<p>&nbsp;</p>" .
                    "<p>&nbsp;</p>" .
                "<p>Felicidades ya puedes iniciar session.!</p>" .
                "<p>&nbsp;</p>" .
                "<p><a title='ipavisual' href='https://ipavisual.com/ipa/' target='_blank'><img src='https://ipavisual.com/ipa/logoipa.png' width='120px'/></p>" .
                "</div>" .
            "</body>" .
        "</html>";

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabeceras .= 'From: ipavisual<elitebergroup@gmail.com>';
$enviado    = mail($para, $titulo, $mensaje, $cabeceras);


header("Location: index.php");
?>
