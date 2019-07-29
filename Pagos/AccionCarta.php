<?php
date_default_timezone_set("America/Lima");


// Iniciamos la clase de la carta
include 'La-carta.php';
$cart = new Cart;

// Se incluye la conexion a la base de datos
include '../DAO/ConexionDB.php';
$cnx = new ConexionDB();
$cn = $cnx->getConexion();

if (isset($_REQUEST['action']) && !empty($_REQUEST['action'])) {

    //Si el objeto es ingresado por primera vez al carrito
    if ($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])) {

        //Se guarda el id de producto
        $productID = $_REQUEST['id'];

        // Con el id guardado se obtienen los detalles del producto
        $query = $cn->prepare("SELECT * FROM mis_productos WHERE id = :productosID ");
        $query->bindParam(":productosID", $productID, PDO::PARAM_STR);
        $query->execute();
        $row = $query->fetch(PDO::FETCH_ASSOC);
        $itemData = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'price' => $row['price'],
            'qty' => 1
        );

        //Se inserta el item dentro del carrito y se redireccion la location
        $insertItem = $cart->insert($itemData);
        $redirectLoc = $insertItem ? 'VerCarta.php' : 'index.php';
        header("Location: " . $redirectLoc);

        //Por si se actualiza un producto del carrito
    } elseif ($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])) {
        $itemData = array(
            'rowid' => $_REQUEST['id'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem ? 'ok' : 'err';
        die;


        //Por si se elimina un item del carrito
    } elseif ($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])) {
        $deleteItem = $cart->remove($_REQUEST['id']);
        header("Location: VerCarta.php");


        //Este metodo es para realizar el pedido de los objetos en el carrito
    } elseif ($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['user_id'])) {


        // Se insertan los detalles de la orden en la base de datos
        $insertOrder = $cn->prepare("INSERT INTO orden (customer_id, total_price, created, modified) VALUES ('" . $_SESSION['user_id'] . "', '" . $cart->total() . "', '" . date("Y-m-d H:i:s") . "', '" . date("Y-m-d H:i:s") . "')");
        $insertOrder->execute();

        if ($insertOrder) {
            $orderID = $cn->lastInsertId();
            $sql = '';


            // Obtiene los items del carrito de compras y los almacena en un array
            $cartItems = $cart->contents();

            //para cada item hay que hacerle una secuencia sql
            foreach ($cartItems as $item) {
                $sql .= "INSERT INTO orden_articulos (order_id, product_id, quantity) VALUES ('" . $orderID . "', '" . $item['id'] . "', '" . $item['qty'] . "');";
            }


            // inserta los datos dentro de la base de datos
            $insertOrderItems = $cn->prepare($sql);
            $insertOrderItems->execute();

            if ($insertOrderItems) {
                $cart->destroy();
                header("Location: OrdenExito.php?id=$orderID");
            } else {
                header("Location: Pagos.php");
            }
        } else {
            header("Location: Pagos.php");
        }
    } else {
        header("Location: index.php");
    }
} else {
    header("Location: index.php");
}
