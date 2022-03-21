<?php
class Conex {	

     private $host   ="localhost";
     private $usuario="root";
     private $clave  ="";
     private $db     ="ame";
     public $conexion;

     function __construct(){
        $this->conexion = new mysqli($this->host, $this->usuario, $this->clave,$this->db) or die(header("location:../vista/error.html"));
        $this->conexion->set_charset("utf8");    
}

}
?>
