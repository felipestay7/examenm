<?php
	
	require 'conexion.php';
	
	$rut_trabajador = $_POST['rut_trabajador'];
	$nombre_compl = $_POST['nombre_compl'];
	$fecha_ing = $_POST['fecha_ing'];
	$turno = isset($_POST['turno']) ? $_POST['turno'] : 0;
	$fecha_salida = $_POST['fecha_salida'];
	//$avatar = $_POST['avatar'];
	$direccion = $_POST['direccion'];
	$profesion = $_POST['profesion'];
	$telefono = $_POST['telefono'];
	$tipo_cont = $_POST['tipo_cont'];
	$horas_cont = $_POST['horas_cont'];
	$departamento = $_POST['departamento'];
	
	$sql = "INSERT INTO trabajador (rut_trabajador, nombre_compl, fecha_ing, fecha_salida, direccion, profesion, telefono, tipo_cont, horas_cont, departamento) VALUES ('$rut_trabajador', '$nombre_compl', '$fecha_ing', '$fecha_salida', '$direccion', '$profesion', '$telefono', '$tipo_cont', '$horas_cont','$departamento')";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="index.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
