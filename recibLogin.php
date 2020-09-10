<?php
session_start();
include('config.php');

$usuario =  ($_POST['email']);
$password = ($_POST['password']);
$consulta = ("SELECT * FROM login WHERE email COLLATE utf8_bin ='" .$usuario. "' AND password COLLATE utf8_bin='" .$password. "'");
$res = mysqli_query($con, $consulta);
$c = mysqli_num_rows($res);

if ($c >0) {
        $row = mysqli_fetch_assoc($res);
    $_SESSION['id']         = $row['id'];
    $_SESSION['email']      = $row['email'];
    $_SESSION['name']       = $row['name'];
    $_SESSION['plan']       = $row['plan'];
?> <script type="text/javascript">
    location.href ="inicio.php";
</script>
<?php
}else {
echo "<script type='text/javascript'>
        alert('Datos Incorrectos Intenta Nuevamente');
        window.location='index.php';
     </script>";
}
?>
