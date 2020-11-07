<?php
error_reporting(0);
session_start();
include('config.php');
/*if (isset($_SESSION['email']) != "") {
$_SESSION['id']         = $row['id'];
$_SESSION['email']      = $row['email'];
$_SESSION['name']       = $row['name'];
$_SESSION['plan']       = $row['plan']; */

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mis Visitas</title>
    <link rel="icon" href="https://ipavisual.com/raiz/imagenes/ipau1.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style type="text/css">
        #letras{
            font-size: 14px;
        }
    </style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<br><br>
<br><br>

<div class="container">

<h3 class="text-center" style="color: Crimson;">
Mis Visitas de Usuarios
<a href="descargar_mis_visitas.php" id="letras" download="mis_visitas">Descargar Visitas</a>
</h3>
<hr>
<br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Fecha de Sesión</th>
      <th scope="col">Hora Inicio de Sesión</th>
      <th scope="col">Hora fin de Sesión</th>
      <th scope="col">Pagina Visitada</th>
      <th scope="col">Cantidad de Visitas</th>
    </tr>
  </thead>
  <tbody>
<?php
$ConsultarProduct = ("SELECT * FROM visitas");
$jqueryProduct = mysqli_query($con, $ConsultarProduct);

while ($Product = mysqli_fetch_array($jqueryProduct)) { ?>
    <tr>
        <td><?php echo $Product['nombre'];  ?></td>
        <td><?php echo $Product['email'];  ?></td>
        <td><?php echo $Product['fecha_sesion'];  ?></td>
        <td><?php echo $Product['hora_inicio'];  ?></td>
        <td><?php echo $Product['hora_fin']; ?></td>
        <td><?php echo $Product['pagina'];  ?></td>
        <td><?php echo $Product['visitas'];  ?></td>
</tr>
<?php } ?>

</tbody>
</table>
</div>



</body>
</html>

<?php /* } */ ?>
