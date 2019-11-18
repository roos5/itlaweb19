<?php

class Personas{
	
	private $mysqli;
	public $tipo;
	public $nombre;
	
	function __construct(){
		$this->mysqli = Conection::Connect('localhost','root','','escuelaOnline');
	}
	
	public function agregarPersona(){
		
		$result = $this->mysqli->query("INSERT INTO personas (tipo,nombre_persona) VALUES ($this->tipo,'$this->nombre')");
		
		if($result){
			return true;
		}else{
			return false;
		}
		
	}
	
	public function personas($tipo){
		$result = $this->mysqli->query("SELECT * FROM personas WHERE tipo = {$tipo}");
		if($result){
			return $result;//$result->fetch_assoc();
		}
	}
	
}

$persona = new Personas();

if(!empty($_POST)){
	$persona->tipo = $_POST['tipo'];
	$persona->nombre = $_POST['persona'];
	$message = $persona->agregarPersona();
}

?>