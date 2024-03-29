<?php

include_once 'ConexionDB.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    header("Content-Type: application/json");

    $array_devolver = [];
    $email = strtolower($_POST['mail']);
    $password = $_POST['clave'];

    //Hay que comprobar si el usuario existe para no replicarlo en la base de datos

    /*------------------------------------------------------------------------*/
    $cnx = new ConexionDB();
    $cn = $cnx->getConexion();
    /*------------------------------------------------------------------------*/

    /*------------------------------------------------------------------------*/
    $revisar = $cn->prepare("SELECT * FROM clientes WHERE email = :email");
    $revisar->bindParam(":email", $email, PDO::PARAM_STR);
    $revisar->execute();
    /*------------------------------------------------------------------------*/

    if ($revisar->rowCount() == 1) {
        //Existe
        $user = $revisar->fetch(PDO::FETCH_ASSOC);
        $usuario = (int) $user['id'];
        $hash = (string) $user['pas'];
        //password_verify($password, $hash)
        if (password_verify($password, $hash)) {
            $_SESSION['user_id'] = $usuario;
            $array_devolver['redirect'] = 'https://techec.herokuapp.com/Vistas/Catalogo.php';
            $array_devolver['is_registered'] = true;
        } else {
            $array_devolver['error'] = "Los datos no son validos.";
        }
    } else {
        $array_devolver['error'] = "No tienes cuenta";
    }

    echo json_encode($array_devolver);
} else {
    exit("Fuera de aqui");
}
