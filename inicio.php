<?php
error_reporting(0);
session_start();
header("Content-Type: text/html;charset=utf-8");
$name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio</title>
</head>
<body>

<?php

echo $name;
 ?>

 <a href="cerrar.php">Salir</a>
</body>
</html>
