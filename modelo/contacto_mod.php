<?php

class Contacto_Modelo
	{
	public $id, $d_estudiante, $t_estudiante, $correo, $representante, $afinidad, $d_representante, $t_representante, $t_laboral;

    public function __construct($d_estudiante, $t_estudiante, $correo, $representante, $afinidad, $d_representante, $t_representante, $t_laboral, $id=null ){
		$this->d_estudiante = $d_estudiante;
        $this->t_estudiante = $t_estudiante;
		$this->correo = $correo;
		$this->representante = $representante;
		$this->afinidad = $afinidad;
		$this->d_representante = $d_representante;
        $this->t_representante = $t_representante;
        $this->t_laboral = $t_laboral;      
        $this->id = $id;        
	  }	

    public static function obtener_contacto($id){        
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT * FROM contacto WHERE id = ?");        
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado->fetch_object();}
             
    public function guardar_contacto(){
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO contacto(d_estudiante, t_estudiante, correo, representante, afinidad, d_representante, t_representante, t_laboral) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $sentencia->bind_param("ssssssss", 
            $this->d_estudiante,
            $this->t_estudiante,
            $this->correo,
            $this->representante,
            $this->afinidad,
            $this->d_representante,
            $this->t_representante,
            $this->t_laboral);
        $sentencia->execute(); 
    }

    public function actualizar_contacto(){
        global $mysqli;
        $sentencia = $mysqli->prepare("UPDATE contacto SET d_estudiante = ?, t_estudiante = ?, correo= ?, representante = ?, afinidad = ?, d_representante = ?, t_representante= ?, t_laboral= ? WHERE id = ?");
        $sentencia->bind_param("ssssssssi", 
		$this->d_estudiante, 
		$this->t_estudiante,	
		$this->correo, 
		$this->representante, 
		$this->afinidad, 
		$this->d_representante,
		$this->t_representante, 
        $this->t_laboral,
		$this->id);
        $sentencia->execute();}

    
}

