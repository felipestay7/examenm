<?php
	
	$mysqli = new mysqli('localhost', 'root', '', 'atrasado_estay');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>