<?php

class ConexionDB
{

    public function getConexion()
    {
        try {
            $cnx = new PDO("mysql:host=localhost;dbname=techec", "root", "");
            return $cnx;
        } catch (PDOException $error) {
            echo "No hemos podido comunicarnos con la base de datos";
            exit;
        }
    }
}
