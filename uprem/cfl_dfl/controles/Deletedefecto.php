<?php
	
		require_once('../modelos/defecto.php');

		
		include('../modelos/conexion.php');
					
		$id_dfl = $_POST['id_dfl'];
		
		$instancia = new defecto();
		if($instancia->eliminar($id_dfl)){
			echo "Se elimino el conflicto ".$id_dfl;
		}else{
			echo "No se completo la solicitud de eliminacion";
		}
		

		
?>