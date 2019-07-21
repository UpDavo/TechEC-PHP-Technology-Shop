<?php

/*
 * Dao Significa Data Acces Object
 */

include '../util/ConexionDB.php';

class metodosDAO
{

    public function ListarProductos()
    {
        $cnx = new ConexionDB();
        $cn = $cnx->getConexion();

        $res = $cn->prepare("SELECT * FROM productos");
        $res->execute();

        /*
         * Lo que hace el for each es listar cada uno de
         * los productos de la base de datos dentro de un arreglo
         */
        foreach ($res as $row) {
            $lista[] = $row;
        }
        return $lista;
    }


    public function ListarProductosCodigo($codigo)
    {
        $cnx = new ConexionDB();
        $cn = $cnx->getConexion();

        $res = $cn->prepare("SELECT * FROM productos WHERE codPro = $codigo");
        $res->execute();

        /*
         * Lo que hace el for each es listar cada uno de
         * los productos de la base de datos dentro de un arreglo
         */
        foreach ($res as $row) {
            $lista[] = $row;
        }
        return $lista;
    }

    public function BuscarEmail($email)
    {
        $cnx = new ConexionDB();
        $cn = $cnx->getConexion();

        $res = $cn->prepare("SELECT * FROM clientes where correo = :email LIMIT 1");
        $res->bindParam(":email", $email, PDO::PARAM_STR);
        $res->execute();

        return $res;
    }

    public function IngresarUsuario($nombre, $apellido, $nickname, $correo, $password)
    {
        $cnx = new ConexionDB();
        $cn = $cnx->getConexion();

        $res = $cnx->prepare("INSERT INTO clientes (nombre, nickname, correo, pas) VALUES (:nombre :apellido, :nickname, :correo, :pass)");
        $res->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $res->bindParam(":apellido", $apellido, PDO::PARAM_STR);
        $res->bindParam(":nickname", $nickname, PDO::PARAM_STR);
        $res->bindParam(":correo", $correo, PDO::PARAM_STR);
        $res->bindParam(":pass", $password, PDO::PARAM_STR);

        $res->execute();

        $user_id = $cn->lastInsertId();
        $_SESSION['user_id'] = (int) $user_id;
    }
}
