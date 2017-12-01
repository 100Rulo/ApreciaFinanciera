<?php 

include('conexion.php');
	class defecto{
		function registrar($nombre_dfl,$version_dfl,$autores_dfl,$fuentes_dfl,$fecha_dfl,$obj_dfl,$irq_dfl,$descripcion_dfl,$alternativa_dfl,$solucion_dfl,$importancia_dfl,$urgencia_dfl,$estado_dfl,$comentario_dfl){
			include('conexion.php');
			$sql="INSERT INTO defecto(nombre,version,autores,fuentes,fecha,objetivos,req_info,descripcion,alternativa,solucion,importancia,urgencia,estado,comentario) VALUES ('$nombre_dfl','$version_dfl','$autores_dfl','$fuentes_dfl','$fecha_dfl','$obj_dfl','$irq_dfl','$descripcion_dfl','$alternativa_dfl','$solucion_dfl','$importancia_dfl','$urgencia_dfl','$estado_dfl','$comentario_dfl')";
			if(mysqli_query($link, $sql)){
				return true;
			}else{
				return false;
			}			
		}

		function eliminar($id_dfl){
			include('conexion.php');
			$sql = "DELETE FROM defecto WHERE id_dfl ='$id_dfl'";
			if(mysqli_query($link, $sql)){
				return true;
			}else{
				return false;
			}
		}
		function editar($id_cfl , $nombre, $version, $autores, $fuentes,$fecha, $objetivos, $req_info, $descripcion, $alternativa, $solucion, $importancia, $urgencia, $estado, $comentario){

			include('conexion.php');
			$sql = "UPDATE defecto SET nombre='$nombre', version='$version', autores='$autores', fuentes='$fuentes',fecha='$fecha', objetivos='$objetivos', req_info='$req_info', descripcion='$descripcion', alternativa='$alternativa', solucion='$solucion', importancia='$importancia', urgencia='$urgencia', estado='$estado', comentario='$comentario' WHERE id_dfl='$id_cfl'";

			if(mysqli_query($link, $sql) ){
				return true;
			}else{
				return false; 
			}
		}

	}
?>