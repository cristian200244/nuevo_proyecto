<?php
include_once '../models/ProfesorModel.php';
class RegistroController
{
    public $model;
    public function __construct()
    {
        $this->model = new Profesor  ;
    }
    public function index(){
       include '../index.php';
    }
    public function new(){
        $profesor = new Profesor();
        if (!isset($_REQUEST['id'])) {
           $profesor= $this->model->update($_REQUEST['id']);
        }
        include_once '../views/save.php';
    }
    public function save(){
        $profesor = new Profesor();
        $profesor->Nombre = $_POST['Nombre'];
        $profesor->Apellido = $_POST['Apellido'];
        $profesor->Fecha_nacimiento = $_POST['Fecha_nacimiento'];
        $profesor->Titulo_profesor = $_POST['Titulo_profesor'];

        $this->model->insert($profesor);
        header("Location: index.php");
    }
    public function delete( ){
        $this->model->delete($_POST['id']);
        header("Location: index.php");
    }
}
