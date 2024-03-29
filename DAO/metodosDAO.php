<?php

/*
 * Dao Significa Data Acces Object
 */

include_once 'ConexionDB.php';


class metodosDAO
{

    public function ListarProductos()
    {
        $cnx = new ConexionDB();
        $cn = $cnx->getConexion();

        $res = $cn->prepare("SELECT * FROM mis_productos");
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

        $res = $cn->prepare("SELECT * FROM mis_productos WHERE id = $codigo");
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

    public function obtenerNombrePorCodigo($codigo)
    {
        $cnx = new ConexionDB();
        $cn = $cnx->getConexion();

        $res = $cn->prepare("SELECT name,price FROM mis_productos WHERE id = $codigo");
        $res->execute();

        /*
         * Lo que hace el for each es listar cada uno de
         * los productos de la base de datos dentro de un arreglo
         */
        foreach ($res as $row) {
            $nombre[] = $row;
        }
        return $nombre;
    }

    public function ListarProductosVendidos($codigo)
    {
        $cnx = new ConexionDB();
        $cn = $cnx->getConexion();

        $res = $cn->prepare("SELECT * FROM orden_articulos WHERE order_id = $codigo");
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

    public function BuscarUsuarioNick($id)
    {

        $cnx = new ConexionDB();
        $cn = $cnx->getConexion();

        $res = $cn->prepare("SELECT * FROM clientes WHERE id = :id");
        $res->bindParam(":id", $id, PDO::PARAM_INT);
        $res->execute();


        foreach ($res as $row) {
            $user = $row[2];
        }

        return $user;
    }

    public function BuscarUsuarioNombre($id)
    {

        $cnx = new ConexionDB();
        $cn = $cnx->getConexion();

        $res = $cn->prepare("SELECT * FROM clientes WHERE id = :id");
        $res->bindParam(":id", $id, PDO::PARAM_INT);
        $res->execute();


        foreach ($res as $row) {
            $user = $row[1];
        }

        return $user;
    }

    public function listarOrdenes()
    {

        $cnx = new ConexionDB();
        $cn = $cnx->getConexion();

        $res = $cn->prepare("SELECT * FROM orden");
        $res->execute();

        foreach ($res as $row) {
            $listaOrdenes[] = $row;
        }
        return $listaOrdenes;
    }
}
