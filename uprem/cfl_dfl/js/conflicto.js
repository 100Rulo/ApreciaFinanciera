 function registrar_conflicto(){
    alert ("registrar");
            var id_cfl=$('#id_cfl').val();
            var nombre_cfl=$('#nombre_cfl').val();
            var version_cfl=$('#version_cfl').val();
            var autores_cfl=$('#autores_cfl').val();
            var fuentes_cfl=$('#fuentes_cfl').val();
            var fecha_cfl=$('#fecha_cfl').val();
            var obj_cfl=$('#obj_cfl').val();
            var irq_cfl=$('#irq_cfl').val();
            var descripcion_cfl=$('#descripcion_cfl').val();
            var solucion_cfl=$('#solucion_cfl').val();
            var alternativa_cfl=$('#alternativa_cfl').val();
            var importancia_cfl=$('#importancia_cfl').val();
            var urgencia_cfl=$('#urgencia_cfl').val();
            var estado_cfl=$('#estado_cfl').val();
            var comentario_cfl=$('#comentario_cfl').val();
                        
            
                    $.ajax({
                        type:'POST',
                        url:'cfl_dfl/controles/conflicto.php',                        
                        data:'id_cfl='+id_cfl+'&nombre_cfl='+nombre_cfl+'&version_cfl='+version_cfl+'&autores_cfl='+autores_cfl+
                        '&fuentes_cfl='+fuentes_cfl+'&fecha_cfl='+fecha_cfl+'&obj_cfl='+obj_cfl+'&irq_cfl='+irq_cfl
                        +'&descripcion_cfl='+descripcion_cfl+'&solucion_cfl='+solucion_cfl+'&alternativa_cfl='+alternativa_cfl
                        +'&importancia_cfl='+importancia_cfl+'&urgencia_cfl='+urgencia_cfl+'&estado_cfl='+estado_cfl+
                        '&comentario_cfl='+comentario_cfl
                    }).done(function(respuesta){
                        if (respuesta=='exito') {
                            $('#exito').show();

                        }
                        else{
                            alert(respuesta);
                        }
                        
                    })  .always(function(data) {

        location.reload();
      });
}
