<?php

include_once 'ConexionDB.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    header("Content-Type: application/json");

    $array_devolver = [];
    $email = strtolower($_POST['mail']);
    $nombre = strtoupper($_POST['nombre']);
    $apellido = strtoupper($_POST['apellido']);
    $nickname = strtoupper($_POST['nick']);
    $nombreCompleto = $nombre . '' . $apellido;

    //Hay que comprobar si el usuario existe para no replicarlo en la base de datos

    /*------------------------------------------------------------------------*/
    $cnx = new ConexionDB();
    $cn = $cnx->getConexion();
    /*------------------------------------------------------------------------*/

    /*------------------------------------------------------------------------*/
    $revisar = $cn->prepare("SELECT * FROM clientes where correo = :email");
    $revisar->bindParam(":email", $email, PDO::PARAM_STR);
    $revisar->execute();
    /*------------------------------------------------------------------------*/

    if ($revisar->rowCount() == 1) {
        //Existe
        $array_devolver['error'] = "Este mail ya existe";
        $array_devolver['is_login'] = false;
    } else {
        //no existe
        //hash para el password para no guardarlo en texto plano
        $password = (string) password_hash($_POST['clave1'], PASSWORD_DEFAULT);

        /*------------------------------------------------------------------------*/
        $insert = $cn->prepare("INSERT INTO `clientes` (`nombre`, `nickname`, `correo`, `pas`, `fecha_creado`) VALUES (:nombre , :nickname, :correo, :pass, CURRENT_TIMESTAMP)");
        $insert->bindParam(":nombre", $nombreCompleto, PDO::PARAM_STR);
        $insert->bindParam(":nickname", $nickname, PDO::PARAM_STR);
        $insert->bindParam(":correo", $email, PDO::PARAM_STR);
        $insert->bindParam(":pass", $password, PDO::PARAM_STR);
        $insert->execute();

        /*------------------------------------------------------------------------*/
        //http://localhost/TechEC-1/Vistas/Login.php
        $user_id = $cn->lastInsertId();
        $_SESSION['user_id'] = (int) $user_id;
        $array_devolver['redirect'] = 'http://localhost/TechEC-1/Vistas/Login.php';
        $array_devolver['is_login'] = true;
    }

    echo json_encode($array_devolver);
} else {
    exit("Fuera de aqui");
}
