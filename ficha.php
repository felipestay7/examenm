<?php
	require 'conexion.php';
	
	$rut_trabajador = $_GET['rut_trabajador'];
	
	$sql = "SELECT * FROM trabajador WHERE rut_trabajador = '$rut_trabajador'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
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
				<h3 style="text-align:center">Ficha Trabajo</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre_compl" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre_compl" name="nombre_compl" placeholder="Primer Nombre" value="<?php echo $row['nombre_compl']; ?>" readonly>
					</div>
				</div>

				<input type="hidden" id="rut_trabajador" name="rut_trabajador" value="<?php echo $row['rut_trabajador']; ?>" />
				
				
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value="<?php echo $row['telefono']; ?>" readonly>
					</div>
				</div>
				
				<div class="form-group">
					<label for="direccion" class="col-sm-2 control-label">Direccion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" value="<?php echo $row['direccion']; ?>" readonly>
					</div>
				</div>

				<div class="form-group">
					<label for="profesion" class="col-sm-2 control-label">Profesion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="profesion" name="profesion" placeholder="Profesion" value="<?php echo $row['profesion']; ?>" readonly>
					</div>
				</div>

				<div class="form-group">
					<label for="tipo_cont" class="col-sm-2 control-label">Tipo Contrato</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="tipo_cont" name="tipo_cont" placeholder="Tipo Contrato" value="<?php echo $row['tipo_cont']; ?>" readonly>
					</div>
				</div>

				<div class="form-group">
					<label for="horas_cont" class="col-sm-2 control-label">Horas Contrato</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="horas_cont" name="horas_cont" placeholder="Horas Contrato" value="<?php echo $row['horas_cont']; ?>" readonly>
					</div>
				</div>

				<div class="form-group">
					<label for="departamento" class="col-sm-2 control-label">Departamento</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="departamento" name="departamento" placeholder="Departamento" value="<?php echo $row['departamento']; ?>" readonly>
					</div>
				</div>
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<a href="reporte.php?rut_trabajador=<?php echo $row['rut_trabajador']; ?>" class="btn btn-danger">Descargar PDF</a>
						
					</div>
				</div>
			</form>
		</div>
	</body>
</html>