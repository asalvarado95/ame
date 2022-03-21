<?php
//require_once('../config/conex.php');
//$mysqli = new Conex();

class Usuario_Modelo
	{
	public $nombre_usuario, $contrasena;

    public function __construct($nombre_usuario, $contrasena, $id=null ){
		$this->nombre_usuario = $nombre_usuario;
        $this->contrasena = $contrasena;		   
        $this->id = $id;        
	  }	

    public static function buscar_admin(){
        global $mysqli;
        $resultado = $mysqli->query("SELECT * FROM usuarios WHERE id='1'");        
        return $resultado->fetch_all(MYSQLI_ASSOC);
        }

    public static function obtener(){
        global $mysqli;
        $resultado = $mysqli->query("SELECT * FROM usuarios"); 
        return $resultado->fetch_all(MYSQLI_ASSOC); }

    public static function obtenerUno($id){        
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT * FROM usuarios WHERE id = ?");        
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado->fetch_object();}
             
    public function guardar_usuario(){
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO usuarios(nombre_usuario, contrasena) VALUES (?, ?)");
        $sentencia->bind_param("ss", 
            $this->nombre_usuario,
            $this->contrasena);
        $sentencia->execute(); }

    public function actualizar_usuario(){
        global $mysqli;
        $sentencia = $mysqli->prepare("UPDATE usuarios SET nombre_usuario = ?, contrasena = ? WHERE id = ?");
        $sentencia->bind_param("ssi", 
		$this->nombre_usuario, 
		$this->contrasena,	
		$this->id);
        $sentencia->execute();}

    public static function borrar_usuario(){
        global $mysqli;
        $sentencia = $mysqli->prepare("DELETE FROM usuarios WHERE id = ?");
        $sentencia->bind_param('i');
        $sentencia->execute();


          }


}

