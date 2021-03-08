<?php
class Conexion extends PDO
{
    private $tipoBase = 'mysql';
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $bd = 'tiendaprehistorica';
    public function __construct()
    {
        try {
            parent::__construct("{$this->tipoBase}:dbname={$this->bd};host={$this->host};", $this->user, $this->pass);
        
        } catch (PDOException $e) {
            echo "Error " . $e->getMessage();
        } 
    }
}



//new Conexion();
