<?php 

include('conexion.php');
	class conflicto{
		function registrar($nombre_cfl,$version_cfl,$autores_cfl,$fuentes_cfl,$fecha_cfl,$obj_cfl,$irq_cfl,$descripcion_cfl,$alternativa_cfl,$solucion_cfl,$importancia_cfl,$urgencia_cfl,$estado_cfl,$comentario_cfl){
			include('conexion.php');
			$sql="INSERT INTO conflicto(nombre,version,autores,fuentes,fecha,objetivos,req_info,descripcion,alternativa,solucion,importancia,urgencia,estado,comentario) VALUES ('$nombre_cfl','$version_cfl','$autores_cfl','$fuentes_cfl','$fecha_cfl','$obj_cfl','$irq_cfl','$descripcion_cfl','$alternativa_cfl','$solucion_cfl','$importancia_cfl','$urgencia_cfl','$estado_cfl','$comentario_cfl')";
			if(mysqli_query($link, $sql)){
				return true;
			}else{
				return false;
			}
		}

		function eliminar($id_cfl){
			include('conexion.php');
			$sql = "DELETE FROM conflicto WHERE id_cfl ='$id_cfl'";
			if(mysqli_query($link, $sql)){
				return true;
			}else{
				return false;
			}
		}

		function editar($id_cfl , $nombre, $version, $autores, $fuentes,$fecha, $objetivos, $req_info, $descripcion, $alternativa, $solucion, $importancia, $urgencia, $estado, $comentario){

			include('conexion.php');
			$sql = "UPDATE conflicto SET nombre='$nombre', version='$version', autores='$autores', fuentes='$fuentes',fecha='$fecha', objetivos='$objetivos', req_info='$req_info', descripcion='$descripcion', alternativa='$alternativa', solucion='$solucion', importancia='$importancia', urgencia='$urgencia', estado='$estado', comentario='$comentario' WHERE id_cfl='$id_cfl'";

			if(mysqli_query($link, $sql) ){
				return true;
			}else{
				return false; 
			}
		}

	}
?>