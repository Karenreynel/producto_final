<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="css/bootstrap.min.css" rel="stylesheet/>"
        <link href="miscss/estiloscss.css" rel="stylesheet"/>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div id="div1" class="container">
            <br>
            <div id="div2">
                <img src="IMAGENES/banner.jpg ">
                <div id="div3">
                    <form id="formulario" method="post" action="menu.php">
                        <br>
                        <strong class="lgris">Ingrese su usuario y contraseña para iniciar sesion</strong>
                        <br>
                        <label class="lgris">Nombre de usuario:</label>
                        <br>
                        <input style="text-transform: uppercase;" type="text" name="usuario" value="" require/>
                        <br><br>
                        <input class="btn btn-primary" type="submit" value="iniciar sesion">

                        <br><br>
                    </form>
                </div>
            </div>
        </div>
        <br><br>
    </body>
</html>