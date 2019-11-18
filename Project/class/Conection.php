<?php

class Conection{

	static function Connect($host,$user,$pass,$db){
		$mysqli = new mysqli($host, $user, $pass, $db);
		
		return $mysqli;
	}
	
	
}

?>