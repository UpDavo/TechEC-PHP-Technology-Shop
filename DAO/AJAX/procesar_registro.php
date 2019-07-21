<?php

include "../metodosDAO.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    header("Content-Type: application/json");

    $array_devolver = [];
    $email = strtolower($_POST['mail']);
    $nombre = strtoupper($_POST['nombre']);
    $apellido = strtoupper($_POST['apellido']);
    $nickname = strtoupper($_POST['nick']);

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

        $user_id = $metodosRegistro->IngresarUsuario($nombre, $apellido, $nickname, $email, $password);
        $_SESSION['user_id'] = (int) $user_id;
        $array_devolver['redirect'] = '';
        $array_devolver['is_login'] = true;
    }

    echo json_encode("$array_devolver");
} else {
    exit("Fuera de aqui");
}
