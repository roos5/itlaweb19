<?php

class Materias{
	
	private $mysqli;
	public $materia;
	public $id_docente;
	
	function __construct(){
		$this->mysqli = Conection::Connect('localhost','root','','escuelaOnline');
	}
	
	public function agregarMateria(){
		
		$result = $this->mysqli->query("INSERT INTO materias (materia,id_docente) VALUES ('$this->materia',$this->id_docente)");
		
		if($result){
			return true;
		}else{
			return false;
		}
		
	}
	
}

?>