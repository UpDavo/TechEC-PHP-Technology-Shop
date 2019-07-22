<!DOCTYPE html>
<html>

<head>
    <title>TechEC | Login</title>

    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" />
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="../assets/styles/index-registro-login.css" />

</head>

<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="../assets/img/user.png" />
                </div>
                <form class="col-12" id="formulario_login">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Email" name="mail" />
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="clave" />
                    </div>
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-sign-in-alt"></i> Ingresar
                    </button>
                </form>

                <div id="msg_error" class="alert alert-danger" role="alert" style="display: none; margin-top: -16px; margin-bottom: 26px;">Error</div>
                <div class="col-12 forgot" style="margin-bottom: 10px; margin-top: -20px;">
                    <a href="#">Olvidó su contraseña?</a>
                </div>
                <div class="col-12 forgot" style="margin-bottom: 10px; margin-top: -20px;">
                    <a href="Registro.php">Usuario nuevo? Registrate aqui</a>
                </div>
                <div class="col-md-12">
                    <button class="btn btn-success btn-sm">
                        <a href="Catalogo.php" style="text-decoration: none; color:white;"> Pagina Principal</a>
                    </button>
                </div>
            </div>
        </div>
    </div>


    <!--JQUERY-->
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/aplicacion_login.js"></script>
</body>

</html>