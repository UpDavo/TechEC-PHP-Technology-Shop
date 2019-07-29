<!DOCTYPE html>

<?php
session_start();
include '../DAO/metodosDAO.php';
$objMetodo = new metodosDAO();
if ($_SESSION['user_id'] != null) {
    $usuario = $objMetodo->BuscarUsuarioNick($_SESSION['user_id']);
    $lista = $_SESSION['lista'];
    $arrayDatos = [];
    $arrayDatos['lista'] = $lista;
    $arrayDatos['usuarioNick'] = $usuario;
    $arrayDatos['usuarioId'] = $_SESSION['user_id'];
} else {
    $usuario = null;
    $lista = $_SESSION['lista'];
    $arrayDatos = [];
    $arrayDatos['lista'] = $lista;
    $arrayDatos['usuarioId'] = null;
}
?>

<html lang="en">

<head>
    <title>Carrito de compras</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sublime project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/styles/bootstrap4/bootstrap.min.css">
    <link href="../assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../assets/styles/cart.css">
    <link rel="stylesheet" type="text/css" href="../assets/styles/cart_responsive.css">
</head>

<body>

    <div class="super_container">

        <!-- Header -->
        <?php include("header.php") ?>

        <!-- Home -->

        <div class="home">
            <div class="home_container">
                <div class="home_background" style="background-image:url(../assets/images/cart.jpg)"></div>
                <div class="home_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_content">
                                    <div class="breadcrumbs">
                                        <ul>
                                            <li><a href="Catalogo.php">Inicio</a></li>
                                            <li>Carrito de compras</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cart Info -->

        <div class="cart_info">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <!-- Column Titles -->
                        <div class="cart_info_columns clearfix">
                            <div class="cart_info_col cart_info_col_product">Producto</div>
                            <div class="cart_info_col cart_info_col_price">Precio</div>
                            <div class="cart_info_col cart_info_col_quantity">Cantidad</div>
                            <div class="cart_info_col cart_info_col_total">Total</div>
                        </div>
                    </div>
                </div>
                <div class="row cart_items_row">
                    <div class="col">

                        <!-- Cart Item -->
                        <div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                            <!-- Name -->
                            <div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
                                <div class="cart_item_image">
                                    <div><img src="../assets/images/pc-armada.jpg" alt=""></div>
                                </div>
                                <div class="cart_item_name_container">
                                    <div class="cart_item_name"><a href="#">Pc de escritorio personalizada</a></div>
                                    <div class="cart_item_edit"><a href="#">
                                            <p>
                                                <i>Editar producto </i><br>
                                                Gtx 1060 6gb <br>
                                                16gb Ram <br>
                                                I7 7700k <br>
                                                Placa base chida <br>
                                            </p>
                                        </a></div>
                                </div>
                            </div>
                            <!-- Price -->
                            <div class="cart_item_price">$790.90</div>
                            <!-- Quantity -->
                            <div class="cart_item_quantity">
                                <div class="product_quantity_container">
                                    <div class="product_quantity clearfix" style="height:64px !important;">
                                        <input id="quantity_input" type="text" pattern="[1-9]*" value="1" style="margin-top: 2px;" min="1">
                                        <div class="quantity_buttons">
                                            <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
                                            <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Total -->
                            <div class="cart_item_total">$790.90</div>

                        </div>
                        <div class="button"><a href="#">Eliminar Producto</a></div>



                    </div>
                </div>
                <div class="row row_cart_buttons">
                    <div class="col">
                        <div class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
                            <div class="button continue_shopping_button"><a href="Catalogo.php">Continuar comprando</a></div>
                            <div class="cart_buttons_right ml-lg-auto">
                                <div class="button clear_cart_button"><a href="#">Limpiar carrito</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row_extra">
                    <div class="col-lg-4">

                        <!-- Delivery -->
                        <div class="delivery">
                            <div class="section_title">Metodo de envio</div>
                            <div class="section_subtitle">SSeleccione el que desee</div>
                            <div class="delivery_options">
                                <label class="delivery_option clearfix">Al dia siguiente
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                    <span class="delivery_price">$4.99</span>
                                </label>
                                <label class="delivery_option clearfix">Envio Standar
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                    <span class="delivery_price">$1.99</span>
                                </label>

                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 offset-lg-2">
                        <div class="cart_total">
                            <div class="section_title">Total del carrito</div>
                            <div class="section_subtitle">Informacion Final</div>
                            <div class="cart_total_container">
                                <ul>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="cart_total_title">Subtotal</div>
                                        <div class="cart_total_value ml-auto">$790.90</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="cart_total_title">Envio</div>
                                        <div class="cart_total_value ml-auto">Gratis</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="cart_total_title">Total</div>
                                        <div class="cart_total_value ml-auto">$790.90</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="button checkout_button"><a href="Checkout.php">Proceder al checkout</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->

        <?php include("footer.php") ?>
    </div>

    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/styles/bootstrap4/popper.js"></script>
    <script src="../assets/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="../assets/plugins/greensock/TweenMax.min.js"></script>
    <script src="../assets/plugins/greensock/TimelineMax.min.js"></script>
    <script src="../assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="../assets/plugins/greensock/animation.gsap.min.js"></script>
    <script src="../assets/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="../assets/plugins/easing/easing.js"></script>
    <script src="../assets/plugins/parallax-js-master/parallax.min.js"></script>
    <script src="../assets/js/cart.js"></script>
    <script type="text/javascript">
        const datos = <?php echo json_encode($arrayDatos); ?>;
        console.log(datos);
        $('#iniciado').hide();
        $('#carrito').hide();
        if (datos.usuarioId != null) {
            $('#iniciado').show();
            $('#carrito').show();
            $("#registrar").hide();
        }
    </script>
</body>

</html>