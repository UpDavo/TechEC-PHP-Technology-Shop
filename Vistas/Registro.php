<!DOCTYPE html>
<html>

<head>
    <title>Registro</title>

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
            <div class="modal-content" style="margin-top: -10%;">
                <h1 style="color:white; margin-bottom: -10px; margin-top: 10px;" align="center">Tech EC</h1>
                <form class="col-12">
                    <div class="form-group" id="user-group" style="margin-top: 10%;">
                        <input type="text" class="form-control" placeholder="Nombre" />
                    </div>

                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Apellido" />
                    </div>

                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nickname" />
                    </div>

                    <div class="form-group" id="user-group">
                        <input type="email" class="form-control" placeholder="Correo electronico" />
                    </div>

                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contraseña" />
                    </div>

                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Confirmar Contraseña" />
                    </div>

                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-sign-in-alt"></i> Registrarse
                    </button>
                </form>
                <div class="col-12 forgot" style="margin-bottom: 10px; margin-top: -20px;">
                    <a href="Login.php">Ya tienes una cuenta?</a>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>

</html>