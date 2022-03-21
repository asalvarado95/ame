<?php

class Fisico_Modelo
	{
	public $id, $altura, $peso, $camisa, $pantalon, $zapato, $lateralidad, $condicion_f, $sangre;

    public function __construct($altura, $peso, $camisa, $pantalon, $zapato, $lateralidad, $condicion_f, $sangre, $id=null ){
		$this->altura = $altura;
        $this->peso = $peso;
		$this->camisa = $camisa;
		$this->pantalon = $pantalon;
		$this->zapato = $zapato;
		$this->lateralidad = $lateralidad;
        $this->condicion_f = $condicion_f;
        $this->sangre = $sangre;      
        $this->id = $id;        
	  }	

    public static function obtenerUno($id){        
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT * FROM salud_fisicos WHERE id = ?");        
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado->fetch_object();}
             
    public function guardar_fisico(){
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO salud_fisicos(altura, peso, camisa, pantalon, zapato, lateralidad, condicion_f, sangre) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $sentencia->bind_param("ssssssss", 
            $this->altura,
            $this->peso,
            $this->camisa,
            $this->pantalon,
            $this->zapato,
            $this->lateralidad,
            $this->condicion_f,
            $this->sangre);
        $sentencia->execute(); 
    }


    public function actualizar_fisico(){
        global $mysqli;
        $sentencia = $mysqli->prepare("UPDATE salud_fisicos SET altura = ?, peso = ?, camisa= ?, pantalon = ?, zapato = ?, lateralidad = ?, condicion_f= ?, sangre= ? WHERE id = ?");
        $sentencia->bind_param("ssssssssi", 
		$this->altura, 
		$this->peso,	
		$this->camisa, 
		$this->pantalon, 
		$this->zapato, 
		$this->lateralidad,
		$this->condicion_f, 
        $this->sangre,
		$this->id);
        $sentencia->execute();}

    
}

