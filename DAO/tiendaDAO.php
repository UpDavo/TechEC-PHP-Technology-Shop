<?php

session_start(); //Inicializa la sesion del usuario

include './metodosDAO.php';

$op = $_REQUEST['op'];

switch ($op) {
    case 1:
        unset($_SESSION['lista']); //Esto limpia la lista de la variable de sesion
        $objMetodo = new metodosDAO();
        $lista = $objMetodo->ListarProductos();
        $_SESSION['lista'] = $lista;
        header("location: ../Vistas/Catalogo.php");
    case 2:
        break;
}
