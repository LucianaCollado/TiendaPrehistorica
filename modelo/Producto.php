<?php 

include_once "conexion.php";

class Productos{
    public $imagen;

    /*public function __construct($imagen){
        $this->imagen=$imagen;
    
    }*/

        public function setImagen($imagen){
            $this->imagen= $imagen;}
        
            public function getImagen(){
                return $this ->imagen;}


                public function traerProducto($imagen){
                    try{
                        $conexion = new Conexion();
                        $sql="SELECT * FROM catalogotp WHERE imagen = ?";
                        $stmt=$conexion->prepare($sql);
                        $stmt->bindParam(1,$imagen, PDO::PARAM_STR);

                       if( $stmt->execute()){
                       $row= $stmt->fetch();
                       
                      
                        } 
                        return $row;
                
                    }catch(Exception $e){
                        echo "Error. No se pudo conectar a la tabla. " .$e->getMessage();
                
                    }finally{
                        $conexion=null;
                    }
                }

}