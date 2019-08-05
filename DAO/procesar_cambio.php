<?php

include_once 'ConexionDB.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    header("Content-Type: application/json");

    $array_devolver = [];
    $idCliente = ($_POST['nombre']);

    //Hay que comprobar si el usuario existe para no replicarlo en la base de datos

    /*------------------------------------------------------------------------*/
    $cnx = new ConexionDB();
    $cn = $cnx->getConexion();
    /*------------------------------------------------------------------------*/
    $insert = $cn->prepare("UPDATE orden SET status = '0' WHERE id = $idCliente");
    $array_devolver['insert'] = $insert;
    $insert->execute();

    /*------------------------------------------------------------------------*/
    //https://techec.herokuapp.com/Vistas/usuarioCreado.php
    $array_devolver['redirect'] = 'https://techec.herokuapp.com/Vistas/Admin.php';
    $array_devolver['mensaje'] = 'Campo cambiado correctamente';

    echo json_encode($array_devolver);
    $cnx->closeConexion($cn);
    $cnx = null;
} else {
    exit("Fuera de aqui");
}
