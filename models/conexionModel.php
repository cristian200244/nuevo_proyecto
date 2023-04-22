<?php

class Database{
    
    private $server = "localhost";
    private $user = "root";
    private $password = "root";
    private $database = "colegio";

    public function conectar()
    {
        try {
            $mbd = new PDO('mysql:host=localhost;dbname=colegio', $this->user, $this->password);
            foreach ($mbd->query('SELECT * FROM Profesores') as $fila) {
                print_r($fila);
            }
            $mbd = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}