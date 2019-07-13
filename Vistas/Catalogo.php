<!DOCTYPE html>

<?php
session_start();
$lista = $_SESSION['lista'];
?>

<html lang="en">

<head>
    <title>TechEC | Productos</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sublime project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="../assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="../assets/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/styles/categories.css">
    <link rel="stylesheet" type="text/css" href="../assets/styles/categories_responsive.css">
</head>

<body>

    <div class="super_container">

        <?php include('Header.php') ?>


        <!-- Home -->

        <div class="home">
            <div class="home_container">
                <div class="home_background" style="background-image:url(../assets/images/categories.jpg)"></div>
                <div class="home_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_content">
                                    <div class="home_title">Componentes Tecnológicos<span>.</span></div>
                                    <div class="home_text">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus.
                                            Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products -->

        <div class="products">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <!-- Product Sorting -->
                        <div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
                            <div class="results">Mostrando <span> <?php echo (count($lista)) ?></span> resultados</div>
                            <div class="sorting_container ml-md-auto">
                                <div class="sorting">
                                    <ul class="item_sorting">
                                        <li>
                                            <span class="sorting_text">Ordenar por</span>
                                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                            <ul>
                                                <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Sin Orden</span></li>
                                                <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Precio</span></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--Aqui comienza la seccion de productos-->
                <div class="row">
                    <div class="col">

                        <div class="product_grid">

                            <?php
                            foreach ($lista as $listado) {
                                ?>
                                <div class="product">
                                    <div class="product_image"><img src="../assets/img/<?php echo $listado[6] ?>" alt="Producto-<?php echo $listado[0] ?>" width="250px" height="220px"></div>
                                    <div class="product_extra product_new"><a href="#">Nuevo</a></div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="#"><?php echo $listado[1] ?></a></div>
                                        <div class="product_price">$<?php echo $listado[2] ?></div>
                                        <br>
                                        <button type="button" class="btn btn-success" id="Carrito">Añadir al Carrito</button>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <?php include('Soporte.php') ?>

        <?php include('Footer.php') ?>

    </div>

    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/styles/bootstrap4/popper.js"></script>
    <script src="../assets/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="../assets/plugins/greensock/TweenMax.min.js"></script>
    <script src="../assets/plugins/greensock/TimelineMax.min.js"></script>
    <script src="../assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="../assets/plugins/greensock/animation.gsap.min.js"></script>
    <script src="../assets/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="../assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="../assets/plugins/Isotope/isotope.pkgd.min.js"></script>
    <script src="../assets/plugins/easing/easing.js"></script>
    <script src="../assets/plugins/parallax-js-master/parallax.min.js"></script>
    <script src="../assets/js/categories.js"></script>
</body>

</html>