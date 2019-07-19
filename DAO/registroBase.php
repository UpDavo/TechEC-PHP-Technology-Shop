<?php

include '../util/ConexionDB.php';

//Guardado de datows dentro de las variables del formulario
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$nickname = $_POST["nick"];
$email = $_POST["mail"];
$password = $_POST["clave"];

//conexion a la base de datos
$cnx = new ConexionDB();
$cn = $cnx->getConexion();

$nombreCompleto = $nombre . $apellido;


$res = $cn->prepare("INSERT INTO clientes (nombre,correo,pas,nickname) VALUES (" . $nombreCompleto . "," . $email . "," . $password . "," . $nickname . ")");
$res->execute();

header(" location: . . / Vistas / Catalogo . php ");
