<?php
	
	require 'phpqrcode/qrlib.php';
	
	$dir = 'temp/';
	
	if(!file_exists($dir))
		mkdir($dir);
	
	$filename = $dir.'test.png';
	
	$tamanio = 15;
	$level = 'H';
	$frameSize = 1;
	$contenido = 'http://localhost/examen_multi/ficha.php?rut_trabajador=';

	QRcode::png($contenido, $filename, $level, $tamanio, $frameSize);
	
	echo '<img src="'.$filename.'" />';

?>