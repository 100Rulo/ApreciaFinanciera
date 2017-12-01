function tabla() {
    
var url = 'requisitos/controles/get_tabla.php';
        $.ajax({
        type:'POST',
        url:url,
        data:'boton=buscar',
        success: function(valores){

        // var datos =    JSON.parse(valores);
alert(valores);

// c = 0;
//     var text = "";
//     var i, j;
//          for (j = 0; j < datos[0].length ; j++) {

// // text +="<br> <a href=\"javascript:modificar_objetivo(\'"+datos[0][j]+"\');\" >Editar  - "+datos[1][j]+"</a> <a href=\"javascript:eliminar_objetivo(\'"+datos[0][j]+"\');\" >eliminar  - "+datos[1][j]+"</a> ";
// text +="<br> <a href=\"javascript:modificar_objetivo(\'"+datos[0][j]+"\');\" >Editar  - "+datos[1][j]+"</a> <a href=\"javascript:eliminar_objetivo(\'"+datos[0][j]+"\');\" >eliminar  - "+datos[1][j]+"</a> ";

//     }

    
//     document.getElementById("gestionObjetivos2").innerHTML = text;
//             return false;
        }


    });
    return false;
}
