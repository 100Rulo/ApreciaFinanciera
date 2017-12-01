<?php
require_once('../modelos/defecto.php');
include('../modelos/conexion.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
	
	$body = json_decode(file_get_contents("php://input"), true);
		$id_dfl = $_POST['id_dfl'];
		//echo $id_dfl;
		$nombre_dfl = $_POST['nombre_dfl'];
		//echo $nombre_dfl;
		$version_dfl = $_POST['version_dfl'];
		//echo $version_dfl;
		$autores_dfl = $_POST['autores_dfl'];
		//echo $autores_dfl;
		$fuentes_dfl = $_POST['fuentes_dfl'];
		//echo $fuentes_dfl;
		$fecha_dfl = $_POST['fecha_dfl'];
		//echo $fecha_dfl;
		$obj_dfl = $_POST['obj_dfl'];
		//echo $obj_dfl;
		$irq_dfl = $_POST['irq_dfl'];
		//echo $irq_dfl;
		$descripcion_dfl = $_POST['descripcion_dfl'];
		//echo $descripcion_dfl;
		$alternativa_dfl = $_POST['alternativa_dfl'];
		//echo $alternativa_dfl;
		$solucion_dfl = $_POST['solucion_dfl'];
		//echo $solucion_dfl;
		$importancia_dfl = $_POST['importancia_dfl'];
		//echo $importancia_dfl;
		$urgencia_dfl = $_POST['urgencia_dfl'];
		//echo $urgencia_dfl;
		$estado_dfl = $_POST['estado_dfl'];		
		//echo $estado_dfl;
		$comentarios_dfl = $_POST['comentarios_dfl'];
		//echo $comentarios_dfl;
		
		$instancia = new defecto();
		if ($instancia->editar($id_dfl , $nombre_dfl , $version_dfl , $autores_dfl , $fuentes_dfl ,$fecha_dfl , $obj_dfl , $irq_dfl , $descripcion_dfl ,$alternativa_dfl , $solucion_dfl , $importancia_dfl , $urgencia_dfl , $estado_dfl , $comentarios_dfl)) {
			echo "Modificaciones guardadas";
	}else{
		echo "No se pudo modificar";
	}	
	}
?> 