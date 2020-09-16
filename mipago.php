<?php
include('config.php');
date_default_timezone_set("America/Bogota");
session_start();
$idUser = $_SESSION['id'];
$email  = $_SESSION['email'];
$name   = $_SESSION['name'];

$fechPago   =  date("d/m/Y");
$plan       = "Pagado";

$statusPago = ("UPDATE login SET plan='".$plan."', fechaPago='".$fechPago."' WHERE id='".$idUser."' ");
$resultPago = mysqli_query($con, $statusPago);



//ENVIANDO INFORMACION AL EMAIL DEL USUARIO
$para = $email;
$titulo = 'Pago Plan Curso en ipavisual';
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
                    "<span class='hola'>Felicidades Sr(a), <strong>" . $name . "</strong></span>" .
                    "<p>&nbsp;</p>" .
                    "<p>Hemos recibido el Pago en la plataforma ipavisual, de forma satisfactoria, ya puedes empezar a disfrutas de la gran variedad de contenido y salcar el mejor provecho.</p> " .
                    "<p>&nbsp;</p>" .
                    "<p>&nbsp;</p>" .
                    "<p>&nbsp;</p>" .
                "<p>Exito.!</p>" .
                "<p>&nbsp;</p>" .
                "<p><a title='ipavisual' href='https://ipavisual.com/ipa/' target='_blank'><img src='https://ipavisual.com/ipa/logoipa.png' width='120px'/></p>" .
                "</div>" .
            "</body>" .
        "</html>";

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabeceras .= 'From: ipavisual<elitebergroup@gmail.com>';
$enviado    = mail($para, $titulo, $mensaje, $cabeceras);


////ENVIANDO INFORMACION AL EMAIL DEL USUARIO
$paraAlvaro ="elitebergroup@gmail.com";
$tituloAlvaro = 'Pago Plan Curso en ipavisual';
$mensajeAlvaro = "<html>".
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
                    "<span class='hola'>Felicidades el Sr(a), <strong>" . $name . "</strong></span>" .
                    "<p>&nbsp;</p>" .
                    "<p>Ha realizado un Pago en la plataforma ipavisual, de forma satisfactoria.</p> " .
                    "<p>&nbsp;</p>" .
                    "<p>&nbsp;</p>" .
                    "<p>&nbsp;</p>" .
                "<p>Exito.!</p>" .
                "<p>&nbsp;</p>" .
                "<p><a title='ipavisual' href='https://ipavisual.com/ipa/' target='_blank'><img src='https://ipavisual.com/ipa/logoipa.png' width='120px'/></p>" .
                "</div>" .
            "</body>" .
        "</html>";

$cabecerasAlvaro  = 'MIME-Version: 1.0' . "\r\n";
$cabecerasAlvaro .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabecerasAlvaro .= 'From: ipavisual<elitebergroup@gmail.com>';
$enviadoAlvaro    = mail($paraAlvaro, $tituloAlvaro, $mensajeAlvaro, $cabecerasAlvaro);
?>
