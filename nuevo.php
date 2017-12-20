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
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
<br>
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="rut_trabajador" class="col-sm-2 control-label">Rut</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" minlength="8" maxlength="9" id="rut_trabajador" name="rut_trabajador" placeholder="Rut" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nombre_compl" class="col-sm-2 control-label">Nombre Completo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre_compl" name="nombre_compl" placeholder="Nombre Completo" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
					</div>
				</div>

				<label for="fecha_ing" class=" control-label">Fecha Ingreso:</label>
                   <div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                     <input class="form-control" size="16" type="text" value="" readonly name="fecha_ing">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                               </div>
                               <input type="hidden" id="fecha_ing" value="" />

                <label for="fecha_salida" class=" control-label">Fecha Salida:</label>
                   <div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                     <input class="form-control" size="16" type="text" value="" readonly name="fecha_salida">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                               </div>
                               <input type="hidden" id="fecha_salida" value="" />

				<div class="form-group">
					<label for="turno" class="col-sm-2 control-label">Turno</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="turno" name="turno" value="1" checked> DIURNO
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="turno" name="turno" value="0"> VESPERTINO
						</label>
					</div>
				</div>

                <div class="form-group">
					<label for="direccion" class="col-sm-2 control-label">Direccion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="tipo_cont" class="col-sm-2 control-label">Tipo Contrato</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="tipo_cont" name="tipo_cont" placeholder="Tipo Contrato" required>
					</div>
				</div>

					<div class="form-group">
					<label for="profesion" class="col-sm-2 control-label">Profesion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="profesion" name="profesion" placeholder="Profesion" required>
					</div>
				</div>

					<div class="form-group">
					<label for="horas_cont" class="col-sm-2 control-label">Hora Contrato</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="horas_cont" name="horas_cont" placeholder="Horas Contrato" required>
					</div>
				</div>

					<div class="form-group">
					<label for="departamento" class="col-sm-2 control-label">Departamento</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="departamento" name="departamento" placeholder="Departamento" required>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
						<div class="table-responsive ">
				<a href="index.php" class="btn btn-primary">Regresar</a>
				<div style="height:5px; width:5px; overflow-x:hidden; overflow-y: scroll; padding-bottom:10px;"></div>
                    <div style="height:5px; width:5px; overflow-x:scroll ; overflow-y: hidden; padding-bottom:10px;"></div>
					</div>
				</div>
			</form>
		</div>

<script src="js/jquery-3.2.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.es.js" charset="UTF-8"></script>

<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'es',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $('.form_date').datetimepicker({
        language:  'es',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    $('.form_time').datetimepicker({
        language:  'es',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
</script>

	</body>
</html>