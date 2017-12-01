<script language="javascript">

        function doSearch()

        {

            var tableReg = document.getElementById('datos');

            var searchText = document.getElementById('searchTerm').value.toLowerCase();

            var cellsOfRow="";

            var found=false;

            var compareWith="";

 

            // Recorremos todas las filas con contenido de la tabla

            for (var i = 1; i < tableReg.rows.length; i++)

            {

                cellsOfRow = tableReg.rows[i].getElementsByTagName('td');

                found = false;

                // Recorremos todas las celdas

                for (var j = 0; j < cellsOfRow.length && !found; j++)

                {

                    compareWith = cellsOfRow[j].innerHTML.toLowerCase();

                    // Buscamos el texto en el contenido de la celda

                    if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1))

                    {

                        found = true;

                    }

                }

                if(found)

                {

                    tableReg.rows[i].style.display = '';

                } else {

                    // si no ha encontrado ninguna coincidencia, esconde la

                    // fila de la tabla

                    tableReg.rows[i].style.display = 'none';

                }

            }

        }

    </script>
<link rel="stylesheet" href="js/jquery.dataTables.min.css" type="text/css" media="screen" charset="utf-8" />
<div class="contatiner">
<div class="row">
     <div class="row">
<div class="table-responsive">
    <center><h2>LISTA DE CONFLICTOS</h2></center> 
        


        <table class="table table-hover table-condensed table-bordered" id="datos" >

        <caption>
           
        </caption>
            
        <tr >
          
            <th>id_cfl</th>
            <th>nombre</th>
            <th>version</th>
            <th>autores</th>
            <th>fuentes</th>
            <th>fecha</th>
            <th>objetivos</th>
            <th>req_info</th>
            <th>descripcion</th>
            <th>alternativa</th>
            <th>solucion</th>
            <th>importancia</th>
            <th>urgencia</th>
            <th>estado</th>
             <th>comentario</th>

        
        </tr>
         <?php
include "conexion.php";
$query  = 'SELECT * FROM `conflicto`  ORDER BY id_cfl DESC ';
$result = mysql_query("$query") or die("Error en la consulta <b>$query</b>:" . mysql_error());
if (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        
        $datos = $row[0]."||".$row[1]."||".$row[2]."||".$row[3]."||".$row[4];

      $datos1 = $row[0]."||".$row[1];





    
       
?>


        <tr class="info">
         
            <td><?php echo $row[1]?></td>
            <td><?php echo $row[2]?></td>
            <td><?php echo $row[3]?></td>
            <td><?php echo $row[4]?></td>
            <td><?php echo $row[9]?></td>
            <td><?php echo $row[10]?></td>
            <td><?php echo $row[5]?></td>
            <td><?php echo $row[5]?></td>
            <td><?php echo $row[5]?></td>
            <td><?php echo $row[5]?></td>
            <td><?php echo $row[5]?></td>
            <td><?php echo $row[5]?></td>
            <td><?php echo $row[5]?></td>

            
            <td>
                <button  class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalRegistro" onclick="agregaform1('<?php echo $datos; ?>')"></button>
            </td>            <td>
                <button  class="btn btn-info glyphicon glyphicon-phone" data-toggle="modal" data-target="#modaledicion" onclick="agregaform('<?php echo $datos1; ?>')"></button>
            </td>
            


            
        </tr>

            <?php
              }
            }
            ?>
        </table>

     </div>
   
</div>
</div>

</div