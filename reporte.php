<?php
	include 'plantilla.php';
	require 'conexion.php';
	
	$query = "SELECT rut_trabajador, nombre_compl, profesion, tipo_cont, departamento FROM trabajador";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(20,6,'RUT',1,0,'C',1);
	$pdf->Cell(50,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(40,6,'PROFESION',1,0,'C',1);
	$pdf->Cell(40,6,'TIPO CONTRATO',1,0,'C',1);
	$pdf->Cell(40,6,'DEPARTAMENTO',1,1,'C',1);
	
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(20,6,utf8_decode($row['rut_trabajador']),1,0,'C');
		$pdf->Cell(50,6,$row['nombre_compl'],1,0,'C');
		$pdf->Cell(40,6,utf8_decode($row['profesion']),1,0,'C');
		$pdf->Cell(40,6,utf8_decode($row['tipo_cont']),1,0,'C');
		$pdf->Cell(40,6,utf8_decode($row['departamento']),1,1,'C');
	}
	$pdf->Output();
?>