<?php

class ConexionDB
{

    public function getConexion()
    {
        $cnx = new PDO("pgsql:host=ec2-174-129-229-106.compute-1.amazonaws.com;dbname=d39kvmuni3s6bj", "ymqellhuegmcib", "d1da0964e0461ce04ef40fcb6179857f83a1ad42c30446c21face9e93565b454");
        return $cnx;
    }

    //hacer el metodo de cerrar la conexion
    public function closeConexion($cn)
    {
        $cn = null;
    }
}
