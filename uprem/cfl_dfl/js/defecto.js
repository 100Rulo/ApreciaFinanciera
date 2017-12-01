 function registrar_defecto(){
    alert ("registrar");
            var id_dfl=$('#id_dfl').val();
            var nombre_dfl=$('#nombre_dfl').val();
            var version_dfl=$('#version_dfl').val();
            var autores_dfl=$('#autores_dfl').val();
            var fuentes_dfl=$('#fuentes_dfl').val();
            var fecha_dfl=$('#fecha_dfl').val();
            var obj_dfl=$('#obj_dfl').val();
            var irq_dfl=$('#irq_dfl').val();
            var descripcion_dfl=$('#descripcion_dfl').val();
            var solucion_dfl=$('#solucion_dfl').val();
            var alternativa_dfl=$('#alternativa_dfl').val();
            var importancia_dfl=$('#importancia_dfl').val();
            var urgencia_dfl=$('#urgencia_dfl').val();
            var estado_dfl=$('#estado_dfl').val();
            var comentario_dfl=$('#comentario_dfl').val();            
            
            var cfl={
                "t1":id_dfl,
                "t2":nombre_dfl,
                "t3":version_dfl,
                "t4":autores_dfl,
                "t5":fuentes_dfl,
                "t6":fecha_dfl,
                "t7":obj_dfl,
                "t8":irq_dfl,
                "t9":descripcion_dfl,
                "t10":solucion_dfl,
                "t11":alternativa_dfl,
                "t12":importancia_dfl,
                "t13":urgencia_dfl,
                "t14":estado_dfl,
                "t15":comentario_dfl

            };
                    $.ajax({
                        type:'POST',
                        url:'../controles/defecto.php',                        
                        data:JSON.stringify(cfl);
                        dataTye:"json",
                        success: function(data,status){
                        alert(data.mensaje);
                        //cargarItems();
                    }
                    });

                
}
