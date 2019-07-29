<!DOCTYPE html>
<?php
//Se incluyen los metodos a utilizar
include '../DAO/metodosDAO.php';
$objMetodo = new metodosDAO();

// Incluyendo la base de datos 
$cnx = new ConexionDB();
$cn = $cnx->getConexion();


// Inicializando la clase del carrito
include '../Pagos/La-carta.php';
$cart = new Cart;

// Si no hay nada que se redicreccione a los productos
if ($cart->total_items() <= 0) {
	header("Location: Catalogo.php");
}

// Obtener los detalles del consumidor
$query = $cn->prepare("SELECT * FROM clientes WHERE id = " . $_SESSION['user_id']);
$query->execute();
$customRow = $query->fetch(PDO::FETCH_ASSOC);

if ($_SESSION['user_id'] != null) {
	$usuario = $objMetodo->BuscarUsuarioNick($_SESSION['user_id']);
	$arrayDatos = [];
	$arrayDatos['usuarioNick'] = $usuario;
	$arrayDatos['usuarioId'] = $_SESSION['user_id'];
} else {
	$usuario = null;
	$arrayDatos = [];
	$arrayDatos['usuarioId'] = null;
}

?>
<html lang="en">

<head>
	<title>TechEC | Checkout</title>
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
								<h5>Nombre</h5>
								<p><?php echo $customRow['name']; ?></p>
								<h5>Email</h5>
								<p><?php echo $customRow['email']; ?></p>
								<h5>Numero de Telefono</h5>
								<p><?php echo $customRow['phone']; ?></p>
								<h5>Direccion de envio</h5>
								<p><?php echo $customRow['address']; ?></p>
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
									<div class="order_list_title">Producto</div>
									<div class="order_list_value ml-auto">Precio</div>
								</div>


								<ul class="order_list">

									<?php
									if ($cart->total_items() > 0) {
										//get cart items from session
										$cartItems = $cart->contents();
										foreach ($cartItems as $item) {
											?>
											<li class="d-flex flex-row align-items-center justify-content-start">
												<div class="order_list_title"><?php echo $item["name"]; ?></div>
												<div class="order_list_value ml-auto"><?php echo '$' . $item["subtotal"] . ' USD'; ?></div>
											</li>
										<?php }
									} else { ?>
										<p>No hay hay articulos en tu carrito</p>
									<?php } ?>





									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="order_list_title">Subtotal</div>
										<div class="order_list_value ml-auto">
											<?php if ($cart->total_items() > 0) { ?>
												<strong> <?php echo '$' . $cart->total() . ' USD'; ?></strong>
											<?php } ?>
										</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="order_list_title">Envio</div>
										<div class="order_list_value ml-auto"><strong>Gratis</strong></div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="order_list_title">Total</div>
										<div class="order_list_value ml-auto">
											<?php if ($cart->total_items() > 0) { ?>
												<strong> <?php echo '$' . $cart->total() . ' USD'; ?></strong>
											<?php } ?>
										</div>
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
							<script>
								function seguro() {
									const seguro = confirm("Estas seguro de realizar la compra?");
									if (seguro) {
										window.location = "../Pagos/AccionCarta.php?action=placeOrder";
									} else {
										return false;
									}
								}
							</script>
							<div class="button order_button"><a href="#" onclick="seguro()">Realizar pedido</a></div>
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