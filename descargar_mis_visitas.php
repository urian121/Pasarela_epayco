<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Ipavisual</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

</head>
<style type="text/css" media="screen">
.stle_tbody{
    font-size: 10px;
    color: #999696 !important;
    }
.color{
  background-color: white;
}
table thead tr th{
    background: #eee !important;
}
</style>
<body>

<?php
include('config.php');
date_default_timezone_set("America/Bogota");
$fecha = date("d/m/Y");

header("Content-Type: text/html;charset=utf-8");
header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
$filename = "Visitas_" .$fecha. ".xls";
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Disposition: attachment; filename=" . $filename . "");

$sql = ("SELECT * FROM visitas");
$mostar = mysqli_query($con, $sql);
?>
<table border=1 align="center" cellpadding=1 cellspacing=1>
<thead>
    <tr style="background: #D0CDCD;">
    <th class="color">NOMBRE</th>
    <th class="color">EMAIL</th>
    <th class="color">FECHA DE SESIÓN</th>
    <th class="color">HORA INICIO DE SESION</th>
    <th class="color">HORA FIN DE SESION</th>
    <th class="color">PAGINA VISITADA</th>
    <th class="color">CANTIDAD DE VISITAS</th>
    </tr>
</thead>
<?php
while ($row = mysqli_fetch_array($mostar)) {
echo "<tbody>";
       echo "<tr>";
            echo "<td class='style_tbody'>" . $row['nombre']. "</td>";
            echo "<td class='style_tbody'>" . $row['email']. "</td>";
            echo "<td class='style_tbody'>" . $row['fecha_sesion']. "</td>";
            echo "<td class='style_tbody'>" . $row['hora_inicio']. "</td>"; 
            echo "<td class='style_tbody'>" . $row['hora_fin']. "</td>";
            echo "<td class='style_tbody'>" . $row['pagina']. "</td>";
            echo "<td class='style_tbody'>" . $row['visitas']. "</td>";
        echo "</tr>";
echo "</tbody>";
    }
?>
</table>


</body>
</html>


