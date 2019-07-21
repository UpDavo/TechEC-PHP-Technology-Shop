<?php

require_once "../metodosDAO.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    header("content-Type: application/json");
    $array_devolver = [];
    $email = strtolower($_POST['mail']);
    $nombre = $_POST['nombre'];
    $apellito = $_POST['apellido'];
    $nickname = $_POST['nick'];

    //Hay que comprobar si el usuario existe para no replicarlo en la base de datos

    $metodosRegistro = new metodosDAO;
    $usuarioBuscado = $metodosRegistro->BuscarEmail($email);

    if ($usuarioBuscado->rowCount() == 1) {
        //Existe
        $array_devolver['error'] = "Este mail ya existe";
        $array_devolver['is_login'] = false;
    } else {
        //no existe
        //hash para el password para no guardarlo en texto plano
        $password = password_hash($_POST['clave1'], PASSWORD_DEFAULT);

        $metodosRegistro->IngresarUsuario($nombre, $apellito, $nickname, $email, $password);
        $array_devolver['redirect'] = '';
        $array_devolver['is_login'] = true;
    }

    echo json_encode($array_devolver);
} else {
    exit("Fuera de aqui");
}
