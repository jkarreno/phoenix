<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Registro</title>

	<link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="img/favicon.png" rel="icon" type="image/png">
	<link href="img/favicon.ico" rel="shortcut icon">

    <link rel="stylesheet" href="public/css/separate/pages/login.min.css">
    <link rel="stylesheet" href="public/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/main.css">
</head>
<body>
    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">

                <form class="sign-box" action="" method="post" id="login_form">

                    <input type="hidden" id="rol_id" name="rol_id" value="1">

                    <header class="sign-title" id="lbltitulo">Formulario Registro</header>

                    <?php
                        include("config/conexion.php");
                        include("controller/registro.php");
                    ?>

                    <div class="form-group">
                        <input type="text" id="usu_nom" name="usu_nom" class="form-control" placeholder="Nombre"/>
                    </div>
                    <div class="form-group">
                        <input type="text" id="usu_ape" name="usu_ape" class="form-control" placeholder="Apellido"/>
                    </div>
                    <div class="form-group">
                        <input type="text" id="usu_correo" name="usu_correo" class="form-control" placeholder="E-Mail"/>
                    </div>
                    <div class="form-group">
                        <input type="password" id="usu_pass" name="usu_pass" class="form-control" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <select type='scripts' class="form-control" onchange="window.location.href=this.value";>
                            <option value="index.php" >Select Option</option>
                            <option value="administrador.php">Administrador</option>
                            <option value="gerente.php">Gerente</option>
                            <option value="supervisor.php">Supervisor</option>
                            <option value="operador.php">Operador</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="float-right reset">
                            <a href="index.php">¿Ya Tienes Cuenta?</a>
                        </div>
                        <div class="float-left reset"> 
                            <a href="terminosycondiciones.php">Terminos y Condiciones</a>
                        </div>
                    </div>
                    <input class="btn btn-rounded" type="submit" value="Registrar" name="registro">
                </form>
            </div>
        </div>
    </div>

<script src="public/js/lib/jquery/jquery.min.js"></script>
<script src="public/js/lib/tether/tether.min.js"></script>
<script src="public/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="public/js/plugins.js"></script>
<script type="text/javascript" src="public/js/lib/match-height/jquery.matchHeight.min.js"></script>
<script>
    $(function() {
        $('.page-center').matchHeight({
            target: $('html')
        });

        $(window).resize(function(){
            setTimeout(function(){
                $('.page-center').matchHeight({ remove: true });
                $('.page-center').matchHeight({
                    target: $('html')
                });
            },100);
        });
    });
</script>
<script src="public/js/app.js"></script>

<script type="text/javascript" src="datos.js"></script>

</body>
</html>