<?php
	class insertar {

    function insertar_trabajador($rut_trabajador, $nombre_compl, $fecha_ing, $turno, $fecha_salida, $direccion, $profesion, $telefono, $tipo_cont, $horas_cont, $departamento){
        include "conexion.php";
        
        $sql ="INSERT INTO trabajador (rut_trabajador, nombre_compl, fecha_ing, turno, fecha_salida, direccion, profesion, telefono, tipo_cont, horas_cont, departamento) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $resultado = $mysqli->query($sql);
        $smt->bindparam(1,$rut_trabajador);
        $smt->bindparam(2,$nombre_compl);
        $smt->bindparam(3,$fecha_ing);
        $smt->bindparam(4,$turno);
        $smt->bindparam(5,$fecha_salida);
        $smt->bindparam(6,$direccion);
        $smt->bindparam(7,$profesion);
        $smt->bindparam(8,$telefono);
        $smt->bindparam(9,$tipo_cont);
        $smt->bindparam(10,$horas_cont);
        $smt->bindparam(11,$departamento);
       
        $smt->execute();
        $conn=null;
}

}

?>