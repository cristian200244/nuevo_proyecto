<?php

include "../models/RegistroModel.php";

class RegistroController
{
    private $autentificacion;

    public function __construct()
    {
        $this->autentificacion = new RegistroModel();
    }

    public function Register()
    {
        $Nombre = $_POST['Nombre'];
        $Apellidos = $_POST['Apellidos'];
        $Fecha_nacimiento = $_POST['Fecha_nacimiento'];
        $Titulo_grado = $_POST['Titulo_grado'];

        if ($this->autentificacion->Registrar($Nombre,$Apellidos,$Fecha_nacimiento,$Titulo_grado)) {
          
            header("location:../index.php");
        } else {
            echo "No se pudo registrar";
        }
    }
}
