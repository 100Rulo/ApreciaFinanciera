<?php
	
		require_once('../modelos/conflicto.php');

		
		include('../modelos/conexion.php');
					
		$id_cfl = $_POST['id_cfl'];
		
		$instancia = new conflicto();
		if($instancia->eliminar($id_cfl)){
			echo "Se elimino el conflicto ".$id_cfl;
		}else{
			echo "No se completo la solicitud de eliminacion";
		}
		

		
?>