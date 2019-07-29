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
	<title>Checkout</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Sublime project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../assets/styles/bootstrap4/bootstrap.min.css">
	<link href="../assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../assets/styles/checkout.css">
	<link rel="stylesheet" type="text/css" href="../assets/styles/checkout_responsive.css">
</head>

<body>

	<div class="super_container">

		<!-- Header -->
		<?php include('header.php') ?>
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
											<li><a href="Carrito.php">Carrito de Compras</a></li>
											<li>Checkout</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Checkout -->

		<div class="checkout">
			<div class="container">
				<div class="row">

					<!-- Billing Info -->
					<div class="col-lg-6">
						<div class="billing checkout_section">
							<div class="section_title">Direccion de envio</div>
							<div class="section_subtitle">Enter your address info</div>
							<div class="checkout_form_container">
							</div>
						</div>
					</div>

					<!-- Order Info -->

					<div class="col-lg-6">
						<div class="order checkout_section">
							<div class="section_title">Tu orden</div>
							<div class="section_subtitle">Detalles de la orden</div>

							<!-- Order details -->
							<div class="order_list_container">
								<div class="order_list_bar d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Product</div>
									<div class="order_list_value ml-auto">Total</div>
								</div>
								<ul class="order_list">
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="order_list_title">Cocktail Yellow dress</div>
										<div class="order_list_value ml-auto">$59.90</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="order_list_title">Subtotal</div>
										<div class="order_list_value ml-auto">$59.90</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="order_list_title">Shipping</div>
										<div class="order_list_value ml-auto">Free</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="order_list_title">Total</div>
										<div class="order_list_value ml-auto">$59.90</div>
									</li>
								</ul>
							</div>

							<!-- Payment Options -->
							<div class="payment">
								<div class="payment_options">
									<label class="payment_option clearfix">Paypal
										<input type="radio" name="radio">
										<span class="checkmark"></span>
									</label>
									<label class="payment_option clearfix">Pago al recibir el producto
										<input type="radio" name="radio">
										<span class="checkmark"></span>
									</label>
									<label class="payment_option clearfix">Tarjeta de credito
										<input type="radio" name="radio">
										<span class="checkmark"></span>
									</label>
								</div>
							</div>

							<!-- Order Text -->
							<div class="order_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra temp or so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</div>
							<div class="button order_button"><a href="#">Realizar pedido</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
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
	<script src="../assets/plugins/easing/easing.js"></script>
	<script src="../assets/plugins/parallax-js-master/parallax.min.js"></script>
	<script src="../assets/js/checkout.js"></script>

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