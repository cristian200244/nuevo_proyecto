<?php

class conexion
{

    public static function conectar()
    {
        $dbm = new PDO("mysql: host=localhost; dbname=colegio;charset=utf8", "root", "123456789");
        $dbm->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbm;
    }
}
