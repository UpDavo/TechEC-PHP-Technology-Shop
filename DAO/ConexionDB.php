<?php

class ConexionDB
{

    public function getConexion()
    {
        $cnx = new PDO("mysql:host=localhost;dbname=techec2", "root", "");
        return $cnx;
    }

    //hacer el metodo de cerrar la conexion
    public function closeConexion($cn)
    {
        $cn = null;
    }
}
