<?php
	require 'conexion.php';
	
	$where = "";
	
	if(!empty($_POST))
	{
		$rut_trabajador = $_POST['campo'];
		if(!empty($rut_trabajador)){
			$where = "WHERE rut_trabajador = '$rut_trabajador'";
		}
	}
	$sql = "SELECT * FROM trabajador $where";
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
				<h2 style="text-align:center">Trabajador</h2>
			</div>
			
			<div class="row">
				<a href="nuevo.php" class="btn btn-primary">Nuevo Registro</a>
				
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>Nombre: </b><input type="text" id="campo" name="campo" />
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
				</form>
			</div>
			
			<br>
			
			<div class="row table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Rut</th>
							<th>Nombre</th>
							<th>Departamento</th>
							<th>Telefono</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					
					<tbody>
						<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
					<tr>
					<td><?php echo $row['rut_trabajador']; ?></td>
					<td><?php echo $row['nombre_compl']; ?></td>
					<td><?php echo $row['departamento']; ?></td>
					<td><?php echo $row['telefono']; ?></td>
					<td><a href="modificar.php?rut_trabajador=<?php echo $row['rut_trabajador']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
					<td><a href="ficha.php?rut_trabajador=<?php echo $row['rut_trabajador']; ?>"><span class="glyphicon glyphicon-file"></span></a></td>
					<td><a href="qr.php?rut_trabajador=<?php echo $row['rut_trabajador']; ?>"><span class="glyphicon glyphicon-qrcode"></span></a></td>
					<td><a href="#" data-href="eliminar.php?rut_trabajador=<?php echo $row['rut_trabajador']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
		
	</body>
</html>	