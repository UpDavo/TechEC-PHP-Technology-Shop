<?php

class ConexionDB
{

    public function getConexion()
    {
        try {
            $cnx = new PDO("mysql:charset=utf8mb4;host=localhost;dbname=techec", "root", "");
            $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $cnx->setAttribute(PDO::ATTR_PERSISTENT, false);
            return $cnx;
        } catch (PDOException $error) {
            echo "No hemos podido comunicarnos con la base de datos";
            exit;
        }
    }
}
