<?php

include 'conexionModel.php';

class RegistroModel extends Database
{
    public function __construct()
    {
        $conexion = parent::conectar();
        var_dump($conexion);
    }

    public function registrar($Nombre, $Apellido, $Fecha_nacimiento, $Titulo_grado)
    {
        $sql = "INSERT INTO Profesores (Nombre,Apellido,Fecha_nacimiento,Titulo_grado) VALUES (?,?,?,?)";
        $query = $conexion->prepare($sql);
        $query->bind_param($Nombre, $Apellido, $Fecha_nacimiento, $Titulo_grado);
        return $query->execute();
    }
}
