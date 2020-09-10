<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>epayco</title>
    <link rel="stylesheet" type="text/css" href="css/login_regist.css">
</head>
<body>


    <div class="main-content-wrapper section-padding-100">
                <div class="row">
                    <div class="col-12 col-lg-12">
                <div class="form" style="border: 1px dashed #ececee; margin-top: 120px;">
            <div id="login">
                <h2 class="text-center" style="color: #FE642E; ">INICIAR SESIÓN</h2>
                <form  action="recibLogin.php" method="post">
                    <div class="field-wrap">
                        <label>Correo</label>
                        <input type="email" name="email" required="true" autocomplete="off"/>
                    </div>
                     <div class="field-wrap">
                        <div class="field-wrap">
                            <label>Clave</label>
                            <input type="password" name="password" required="true" autocomplete="off" />
                        </div>
                    </div>

                    <p class="forgot">
                        <span><a href="#" id="registrate"> Registate </a></span>
                        <table>
                            <tr>
                                <td><input type="checkbox" name="terminos" checked style="border:2px dotted #00f;display:block; width: auto !important; height: auto !important;"></td>
                                <td><a href="APP_BIO_POLITICAS_DE_CALIDAD_Y_MANEJO_DE_DATOS.pdf" download="Terminos" style="color: crimson; float: left;padding: 15px 10px;>">
                        Acepta los Téminos y Condiciones.</a></td>
                            </tr>
                        </table>
                    </p>

                    <button type="submit" class="button button-block"> ENTRAR</button>
                </form>
            </div>



            <!---NUEVO USUARIO--->
            <div id="newuser">
                <h2 class="text-center" style="color: #FE642E; ">CREAR UNA CUENTA</h2>
                <form  action="newUser.php" method="post">
                    <div class="field-wrap">
                        <div class="field-wrap">
                            <label>Nombre y Apellido</label>
                            <input type="text" name="name" required="true" autocomplete="off" />
                        </div>
                    </div>
                    <div class="field-wrap">
                        <div class="field-wrap">
                            <label>Teléfono</label>
                            <input type="number" name="phone" required="true" autocomplete="off" />
                        </div>
                    </div>
                    <div class="field-wrap">
                        <label>Correo</label>
                        <input type="email" name="email" required="true" autocomplete="off"/>
                    </div>
                     <div class="field-wrap">
                        <div class="field-wrap">
                            <label>Clave</label>
                            <input type="password" name="password" required="true" autocomplete="off" />
                        </div>
                    </div>

                    <p class="forgot">
                        <span><a href="#" id="volver"> Volver </a></span>
                        <table>
                            <tr>
                                <td><input type="checkbox" name="terminos" checked style="border:2px dotted #00f;display:block; width: auto !important; height: auto !important;"></td>
                                <td><a href="APP_BIO_POLITICAS_DE_CALIDAD_Y_MANEJO_DE_DATOS.pdf" download="Terminos" style="color: crimson; float: left;padding: 15px 10px;>">
                        Acepta los Téminos y Condiciones.</a></td>
                            </tr>
                        </table>
                    </p>

                    <button type="submit" class="button button-block"> REGISTRARME</button>
                </form>
            </div>

        </div>



        </div>
        </div>
    </div>



    <?php
    $precio = "50.000";
    $cantidad ="1";
    $descrip ="Cursos de Ingles";
     ?>
    <div>
        <h4>Implementado Pasarela de Epayco</h4>
     <img src="producto.png" alt="">
     <br>
     <span><?php echo $precio; ?>$ </span>
     <p><?php echo $descrip; ?></p>



<form>
    <?php echo "
    <script src='https://checkout.epayco.co/checkout.js'
        data-epayco-key='38f8e9cee71dd30fc10eb4b26fe30a69'
        class='epayco-button'
        data-epayco-amount='$precio'
        data-epayco-tax='0'
        data-epayco-tax-base='10'
        data-epayco-name='$descrip'
        data-epayco-description='$descrip'
        data-epayco-currency='usd'
        data-epayco-country='CO'
        data-epayco-test='true'
        data-epayco-external='false'
        data-epayco-response='http://www.ipavisual.com'
        data-epayco-confirmation='ipavisual.com'
        data-epayco-button='https://369969691f476073508a-60bf0867add971908d4f26a64519c2aa.ssl.cf5.rackcdn.com/btns/boton_carro_de_compras_epayco6.png'>
    </script>" ?>
</form>
</div>


<script  src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="active.js" type="text/javascript"></script>

<script type="text/javascript">
$('#newuser').hide();

$('#registrate').on('click', function() {
    $('#login').hide(); //para ocultar
    $("#newuser").fadeIn("slow"); //mostrar
});

$('#volver').on('click', function() {
    $('#newuser').hide(); //para ocultar
    $("#login").fadeIn("slow"); //mostrar
});
</script>

</body>
</html>
