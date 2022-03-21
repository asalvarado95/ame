<?php

class Estudiante_Modelo
	{
	public $id, $cedula, $nombre, $apellido, $gen, $nac, $ano, $secc, $estatus, $f_estatus;

    public function __construct($cedula, $nombre, $apellido, $gen, $nac, $ano, $secc, $estatus, $f_estatus, $id=null ){
		$this->cedula = $cedula;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
		$this->gen = $gen;
		$this->nac = $nac;
		$this->ano = $ano;
		$this->secc = $secc;
        $this->estatus = $estatus;
        $this->f_estatus = $f_estatus;      
        $this->id = $id;        
	  }	

    public static function obtener(){
        global $mysqli;
		$resultado = $mysqli->query("SELECT * FROM estudiantes order by ".'cedula'." ASC"); 
        return $resultado->fetch_all(MYSQLI_ASSOC); 
		}   

    public function guardar(){
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO estudiantes(cedula, nombre, apellido, gen, nac, ano, secc, estatus, f_estatus) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $sentencia->bind_param("sssssssss", 
        	$this->cedula,
        	$this->nombre,
        	$this->apellido,
        	$this->gen,
        	$this->nac,
        	$this->ano,
        	$this->secc,
            $this->estatus,
            $this->f_estatus);
        $sentencia->execute();       
    }


	public static function obtener_seleccionado(){
        global $mysqli;
		$resultado = $mysqli->query(
                    "SELECT * FROM estudiantes WHERE ano LIKE '%".$_POST['select_escolar']."%' 
                    AND secc LIKE '%".$_POST['select_secc']."%'
                    AND gen LIKE '%".$_POST['select_gen']."%'");     


        return $resultado->fetch_all(MYSQLI_ASSOC);
    }


    public static function buscar_apellido(){
        global $mysqli;        
        $resultado = $mysqli->query("SELECT * FROM estudiantes WHERE apellido LIKE '%".$_POST['buscar']."%'");
        return $resultado->fetch_all(MYSQLI_ASSOC);} 

    public static function buscar_cedula(){
        global $mysqli;        
        $resultado = $mysqli->query("SELECT * FROM estudiantes WHERE cedula LIKE '%".$_POST['cedula']."%'");
        return $resultado->fetch_all(MYSQLI_ASSOC);} 
        
        public static function buscar_estatus(){
        global $mysqli;        
        $resultado = $mysqli->query("SELECT * FROM estudiantes WHERE estatus LIKE '%".$_POST['estatus']."%'");
        return $resultado->fetch_all(MYSQLI_ASSOC);} 

	
    public static function obtenerUno($id){
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT * FROM estudiantes WHERE id = ?");		
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado->fetch_object();}

    public function actualizar(){
        global $mysqli;
        $sentencia = $mysqli->prepare("UPDATE estudiantes SET cedula = ?, nombre = ?, apellido= ?, gen = ?, nac = ?, ano = ?, secc= ?, estatus= ?, f_estatus= ? WHERE id = ?");
        $sentencia->bind_param("sssssssssi", 
		$this->cedula, 
		$this->nombre,	
		$this->apellido, 
		$this->gen, 
		$this->nac, 
		$this->ano,
		$this->secc, 
        $this->estatus,
        $this->f_estatus, 		
		$this->id);
        $sentencia->execute();}

    public static function contar_masculino_seleccion(){
        global $mysqli; 
        $sql_m="SELECT * FROM estudiantes where gen='m'and ano LIKE '%".$_POST['select_escolar']."%' 
                AND secc LIKE '%".$_POST['select_secc']."%' AND gen LIKE '%".$_POST['select_gen']."%'";
       
        if ($result_m=mysqli_query($mysqli,$sql_m))  {  
        $contar_masc=mysqli_num_rows($result_m); }       

        return array($contar_masc);}  

    
    public static function contar_femenino_seleccion(){
        global $mysqli; 
        $sql_f="SELECT * FROM estudiantes where gen='f'and ano LIKE '%".$_POST['select_escolar']."%' 
                AND secc LIKE '%".$_POST['select_secc']."%' AND gen LIKE '%".$_POST['select_gen']."%'";
       
        if ($result_f=mysqli_query($mysqli,$sql_f))  {  
        $contar_fem=mysqli_num_rows($result_f); }       

        return array($contar_fem);} 

    public static function contar_masculino(){
        global $mysqli; 
        $sql_m="SELECT * FROM estudiantes where gen='m'";
       
        if ($result_m=mysqli_query($mysqli,$sql_m))  {  
        $contar_masc=mysqli_num_rows($result_m); }       

        return array($contar_masc);}  
          
    
    public static function contar_femenino(){
        global $mysqli; 
        $sql_f="SELECT * FROM estudiantes where gen='f'";
       
        if ($result_f=mysqli_query($mysqli,$sql_f))  {  
        $contar_fem=mysqli_num_rows($result_f); }       

        return array($contar_fem);} 



    public static function contar_ingreso_todo(){
        global $mysqli; 
        $sql_i="SELECT * FROM estudiantes where estatus='ingreso'";
       
        if ($result_i=mysqli_query($mysqli,$sql_i))  {  
        $contar_in=mysqli_num_rows($result_i); }       

        return array($contar_in);} 


    public static function contar_egreso_todo(){
        global $mysqli; 
        $sql_e="SELECT * FROM estudiantes where estatus='egreso'";
       
        if ($result_e=mysqli_query($mysqli,$sql_e))  {  
        $contar_eg=mysqli_num_rows($result_e); }       

        return array($contar_eg);} 

    public static function contar_ingreso_seleccion(){
        global $mysqli; 
        $sql_m="SELECT * FROM estudiantes where estatus='ingreso'and ano LIKE '%".$_POST['select_escolar']."%' 
                AND secc LIKE '%".$_POST['select_secc']."%' AND gen LIKE '%".$_POST['select_gen']."%'";
       
        if ($result_m=mysqli_query($mysqli,$sql_m))  {  
        $contar_ing=mysqli_num_rows($result_m); }       

        return array($contar_ing);}  

     public static function contar_egreso_seleccion(){
        global $mysqli; 
        $sql_m="SELECT * FROM estudiantes where estatus='egreso'and ano LIKE '%".$_POST['select_escolar']."%' 
                AND secc LIKE '%".$_POST['select_secc']."%' AND gen LIKE '%".$_POST['select_gen']."%'";
       
        if ($result_m=mysqli_query($mysqli,$sql_m))  {  
        $contar_egr=mysqli_num_rows($result_m); }       

        return array($contar_egr);}     
 
   
}

