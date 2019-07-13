<!DOCTYPE html>

<?php
session_start();
$lista = $_SESSION['lista'];
?>

<html lang="en">

<head>
    <title>Categories</title>
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

        <?php include('header.php') ?>


        <!-- Home -->

        <div class="home">
            <div class="home_container">
                <div class="home_background" style="background-image:url(../assets/images/categories.jpg)"></div>
                <div class="home_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_content">
                                    <div class="home_title">Telefonos Inteligentes <span>.</span></div>
                                    <div class="home_text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</p>
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
                            <div class="results">Mostrando <span>12</span> resultados</div>
                            <div class="sorting_container ml-md-auto">
                                <div class="sorting">
                                    <ul class="item_sorting">
                                        <li>
                                            <span class="sorting_text">Ordenar por</span>
                                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                            <ul>
                                                <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span></li>
                                                <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
                                                <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'><span>Name</span></li>
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

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="images/product_1.jpg" alt=""></div>
                                <div class="product_extra product_new"><a href="categories.html">Nuevo</a></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                    <div class="product_price">$670</div>
                                </div>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="images/product_2.jpg" alt=""></div>
                                <div class="product_extra product_sale"><a href="categories.html">Venta</a></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                    <div class="product_price">$520</div>
                                </div>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="images/product_3.jpg" alt=""></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                    <div class="product_price">$710</div>
                                </div>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="images/product_4.jpg" alt=""></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                    <div class="product_price">$330</div>
                                </div>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="images/product_5.jpg" alt=""></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                    <div class="product_price">$170</div>
                                </div>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="images/product_6.jpg" alt=""></div>
                                <div class="product_extra product_hot"><a href="categories.html">Hot</a></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                    <div class="product_price">$240</div>
                                </div>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="images/product_7.jpg" alt=""></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                    <div class="product_price">$70</div>
                                </div>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="images/product_8.jpg" alt=""></div>
                                <div class="product_extra product_sale"><a href="categories.html">Hot</a></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                    <div class="product_price">$490</div>
                                </div>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="images/product_9.jpg" alt=""></div>
                                <div class="product_extra product_sale"><a href="categories.html">Hot</a></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                    <div class="product_price">$410</div>
                                </div>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="images/product_10.jpg" alt=""></div>
                                <div class="product_extra product_sale"><a href="categories.html">Hot</a></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                    <div class="product_price">$365</div>
                                </div>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="images/product_11.jpg" alt=""></div>
                                <div class="product_extra product_sale"><a href="categories.html">Hot</a></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                    <div class="product_price">$195</div>
                                </div>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="images/product_12.jpg" alt=""></div>
                                <div class="product_extra product_sale"><a href="categories.html">Hot</a></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                    <div class="product_price">$580</div>
                                </div>
                            </div>

                        </div>
                        <div class="product_pagination">
                            <ul>
                                <li class="active"><a href="#">01.</a></li>
                                <li><a href="#">02.</a></li>
                                <li><a href="#">03.</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Barra final con soporte tecnico -->

        <div class="icon_boxes">
            <div class="container">
                <div class="row icon_box_row">

                    <!-- Caja 1 -->
                    <div class="col-lg-4 icon_box_col">
                        <div class="icon_box">
                            <div class="icon_box_image"><img src="../assets/images/icon_1.svg" alt=""></div>
                            <div class="icon_box_title">Envio gratis a nivel Mundial</div>
                            <div class="icon_box_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Caja 2 -->
                    <div class="col-lg-4 icon_box_col">
                        <div class="icon_box">
                            <div class="icon_box_image"><img src="../assets/images/icon_2.svg" alt=""></div>
                            <div class="icon_box_title">Cualquier error es acreedor a un reembolso</div>
                            <div class="icon_box_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Caja 3 -->
                    <div class="col-lg-4 icon_box_col">
                        <div class="icon_box">
                            <div class="icon_box_image"><img src="../assets/images/icon_3.svg" alt=""></div>
                            <div class="icon_box_title">Soporte 24H</div>
                            <div class="icon_box_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <?php include('footer.php') ?>

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