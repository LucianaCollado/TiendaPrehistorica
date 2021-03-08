<?php

include_once "conexion.php";

class Craneos{
    private $nombre;
    private $descripcion;
    private $precio;
    private $imagen;
    //La cnstante de abajo es de la primera tabla, recordar hacer las siguientes
    const TABLA = "catalogotp";

    public function __construct($nombre, $descripcion=null,$precio=null,$imagen=null){
        $this->nombre=$nombre;
        $this->descripcion=$descripcion;
        $this->precio=$precio;
        $this->imagen= $imagen;
    }
    public function setNombre($nombre){
        $this->nombre= $nombre;
    }
    public function setDescripcion($descripcion){
        $this->descripcion= $descripcion;
    }
    public function setPrecio($precio){
        $this->precio= $precio;
    }
    public function setImagen($imagen){
        $this->imagen= $imagen;
    }
    public function getNombre(){
        return $this ->nombre;
    }
    public function getDescripcion(){
        return $this ->descripcion;
    }
    public function getPrecio(){
        return $this ->precio;
    }
    public function getImagen(){
        return $this ->imagen;
    }
    

    public static function mostrarProducto(){
        try{
            $conexion = new Conexion();
            $sql="SELECT * FROM " . self::TABLA ;
            $stmt=$conexion->prepare($sql);
            $stmt->execute();
           $row= $stmt->fetchAll();
           return $row;


        }catch(Exception $e){
            echo "Error. No se pudo conectar a la tabla. " .$e->getMessage();

        }finally{
            $conexion=null;
        }
    }

public function traerProducto($nombre){
    try{
        $conexion = new Conexion();
        $sql="SELECT * FROM " . self::TABLA ."WHERE nombre = ?";
        $stmt=$conexion->prepare($sql);
        $stmt->bindParam(1,$this->nombre, PDO::PARAM_STR);
        //$stmt->bindParam(2,$this->descripcion, PDO::PARAM_STR);
        //$stmt->bindParam(3,$this->imagen, PDO::PARAM_STR);
       if( $stmt->execute()){
       $row= $stmt->fetch();//aca no se si es fetch solo
       return $row;
    }

    }catch(Exception $e){
        echo "Error. No se pudo conectar a la tabla. " .$e->getMessage();

    }finally{
        $conexion=null;
    }
}

}