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

        $res = $cn->prepare("Select * from productos");
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

        $res = $cn->prepare("Select * from productos where codPro = $codigo");
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
}
