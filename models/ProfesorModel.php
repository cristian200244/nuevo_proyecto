<?php
 
include '../config/conexion.php';

class Profesor  
{
   public $conex;
   public $Id_profesor;
   public $Nombre;
   public $Apellido;
   public $Fecha_nacimiento;
   public $Titulo_profesor;

    public function __construct()
    {
     try {
        $this->conex = conexion::conectar();
     } catch (Exception $e) {
       die($e->getMessage());
     }   
    }
     
     public function show(){
        try {
           $query= "SELECT FROM Profesores";
           $smt = $this->conex->prepare($query);
           $smt ->execute( );
           return $smt->fetchAll(PDO::FETCH_OBJ);

        } catch (Exception $e)   {
            die($e->getMessage());
        }
     }
     public function insert($data ){
        try {
            $query = "INSERT INTO Profesores(Nombre,Apellido,Fecha_nacimiento,Titulo_profesor) VALUES (?,?,?,?)";
            $this->conex->prepare($query)->execute(array($data->Nombre,$data->Apellido,$data->Fecha_nacimiento,$data->Titulo_profesora));
        } catch (Exception $e)   {
            die($e->getMessage());
        }
     }
     
     public function delete($id){
        try {
            $query = "DELETE FROM Profesor WHERE Id_profesor =?";
            $smt= $this->conex->prepare($query);
            $smt->execute(array($id));
        } catch (Exception $e)   {
            die($e->getMessage());
        }
     }
     public function update($id ){
        try {
            $query = " SELECT FROM Profesores WHERE  Id_profesor=?";
            $smt= $this->conex->prepare($query);
            $smt->execute(array($id));
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e)   {
            die($e->getMessage());
        }
     }
}
