<!DOCTYPE html>

<?php
if (!isset($_REQUEST['id'])) {
    header("Location: Catalogo.php");
}
?>
<html>

<head>
    <title>TechEC | Felicidades</title>

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
        <div class="col-md-12 main-section">
            <div class="modal-content" style="margin-top: -10%;">
                <h1 style="color:white; margin-bottom: -10px; margin-top: 10%;" align="center">¡Felicidades tu orden ha sido realizada con exito!</h1>
                <h3 style="color:white; margin-bottom: -10px; margin-top: 10%;" align="center">El numero de tu orden es: #<?php echo $_GET['id']; ?></h3>


                <div class="col-12 forgot" style="margin-bottom: 20px; margin-top: 20%;">
                    <a class="btn btn-success btn-lg btn-block" role="button" href="Catalogo.php">Volver a la pagina principal</a>
                </div>
            </div>
        </div>
    </div>

    <!--JQUERY-->
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/aplicacion_login.js"></script>
</body>

</html>