<?php
require_once('../modelos/conflicto.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
	
	$body = json_decode(file_get_contents("php://input"), true);
		//$id_cfl = $_POST['id_cfl'];
		//echo $id_cfl;
		$nombre_cfl = $_POST['nombre_cfl'];
		//echo $nombre_cfl;
		$version_cfl = $_POST['version_cfl'];
		//echo $version_cfl;
		$autores_cfl = $_POST['autores_cfl'];
		//echo $autores_cfl;
		$fuentes_cfl = $_POST['fuentes_cfl'];
		//echo $fuentes_cfl;
		$fecha_cfl = $_POST['fecha_cfl'];
		//echo $fecha_cfl;
		$obj_cfl = $_POST['obj_cfl'];
		//echo $obj_cfl;
		$irq_cfl = $_POST['irq_cfl'];
		//echo $irq_cfl;
		$descripcion_cfl = $_POST['descripcion_cfl'];
		//echo $descripcion_cfl;
		$alternativa_cfl = $_POST['alternativa_cfl'];
		//echo $alternativa_cfl;
		$solucion_cfl = $_POST['solucion_cfl'];
		//echo $solucion_cfl;
		$importancia_cfl = $_POST['importancia_cfl'];
		//echo $importancia_cfl;
		$urgencia_cfl = $_POST['urgencia_cfl'];
		//echo $urgencia_cfl;
		$estado_cfl = $_POST['estado_cfl'];		
		//echo $estado_cfl;
		$comentarios_cfl = $_POST['comentarios_cfl'];
		//echo $comentarios_cfl;

		
		$instancia = new conflicto();
		if($instancia->registrar( $nombre_cfl , $version_cfl , $autores_cfl , $fuentes_cfl , $fecha_cfl , $obj_cfl , $irq_cfl , $descripcion_cfl , $alternativa_cfl , $solucion_cfl , $importancia_cfl , $urgencia_cfl , $estado_cfl , $comentarios_cfl)){
			echo "Se a guardado el conflicto";
		}else{
			echo "No se pudo guardar. Debe llenar todos los campos";
		}		
	}
?> 