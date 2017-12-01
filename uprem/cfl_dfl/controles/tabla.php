<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}

th {
    width:25%;
    text-align: left;
    background-color: #CEE3F6;
}

body {
   
    background-color: white;
}
</style>
</head>
<body>

<p>portada</p>
<hr>

<?php
	
	include('../modelos/conexion.php');
?>
<hr>
<?php

echo "<h3>Indice</h3><ul>";
$indice1="SELECT id_cfl, nombre FROM  conflicto ORDER BY id_cfl ASC";
$indice2="SELECT id_dfl, nombre FROM  defecto ORDER BY id_dfl ASC";

$ind_cfl = mysqli_query($link, $indice1);
$ind_dfl = mysqli_query($link, $indice2);

if (mysqli_num_rows($ind_cfl) >= 1) {
$row = mysqli_fetch_assoc($ind_cfl);
echo "<li><a href='#".$row['id_cfl']."'> cfl-".$row['id_cfl']."  ".$row['nombre']."</a></li>";
}

if (mysqli_num_rows($ind_dfl) >= 1) {

$row = mysqli_fetch_assoc($ind_dfl);
echo "<li><a href='#".$row['id_dfl']."'> dfl-".$row['id_dfl']."  ".$row['nombre']."</a></li>";
}

echo "<hr><br></ul>";
echo("<h3>CONFLICTOS</h3>");


$dato_cfl="SELECT id_cfl FROM  conflicto ORDER BY id_cfl ASC";
$c = mysqli_query($link, $dato_cfl);
$i=0;
$str;
$datos;
while ($row = mysqli_fetch_assoc($c)) {
    $datos[$i]=$row['id_cfl'];
    $i=$i+1;              
 }

for ($k=0; $k < sizeof($datos); $k++) { 
	# code...
	$con1=$datos[$k];
	$sql1 = "SELECT * FROM conflicto where id_cfl = '$con1'";
	$sql2 = "SELECT * FROM defecto where id_dfl = '$con1'";
	$cfl = mysqli_query($link, $sql1);
	$dfl = mysqli_query($link, $sql2);

if(mysqli_num_rows($cfl) == 1){

$row1 = mysqli_fetch_assoc($cfl);
echo "
<table id='".$row1['id_cfl']."' style='width:100%'>

<tr>
<th> cfl - ".$row1['id_cfl']."</th>
<td>".$row1['nombre']."</td>
</tr>

<tr>
<th>Versión</th>
<td>".$row1['version']."</td>
</tr>

<tr>
<th>Autores</th>
<td>".$row1['autores']."</td>
</tr>

<tr>
<th>Fuentes</th>
<td>".$row1['fuentes']."</td>
</tr>

<tr>
<th>Fecha</th>
<td>".$row1['fecha']."</td>
</tr>

<tr>
<th>Objetivos</th>
<td>".$row1['objetivos']."</td>
</tr>

<tr>
<th>Requerimientos de informacion</th>
<td>".$row1['req_info']."</td>
</tr>

<tr>
<th>Descripción</th>
<td>".$row1['descripcion']."</td>
</tr>
<tr>

<th>Alternativa</th>
<td>".$row1['alternativa']."</td>
</tr>
<tr>

<tr>
<th>Solucion</th>
<td>".$row1['solucion']."</td>
</tr>

<tr>
<th>Importancia</th>
<td>".$row1['importancia']."</td>
</tr>

<tr>
<th>Urgencia</th>
<td>".$row1['urgencia']."</td>
</tr>

<tr>
<th>Estado</th>
<td>".$row1['estado']."</td>
</tr>

<th>Comentarios</th>
<td>".$row1['comentario']."</td>
</tr>
</table>
<br>
";
}
}
echo("<h3>DEFECTOS</h3>");
$dato_dfl="SELECT id_dfl FROM  defecto ORDER BY id_dfl ASC";
$d = mysqli_query($link, $dato_dfl);
$i=0;
$str;
$datos;
while ($row = mysqli_fetch_assoc($d)) {
    $datos[$i]=$row['id_dfl'];
    $i=$i+1;              
 }
for ($k=0; $k < sizeof($datos); $k++) { 
	# code...
	$con1=$datos[$k];
	$sql2 = "SELECT * FROM defecto where id_dfl = '$con1'";
	$dfl = mysqli_query($link, $sql2);

if(mysqli_num_rows($dfl) == 1){

$row1 = mysqli_fetch_assoc($dfl);
echo "
<table id='".$row1['id_dfl']."' style='width:100%'>

<tr>
<th> dfl - ".$row1['id_dfl']."</th>
<td>".$row1['nombre']."</td>
</tr>

<tr>
<th>Versión</th>
<td>".$row1['version']."</td>
</tr>

<tr>
<th>Autores</th>
<td>".$row1['autores']."</td>
</tr>

<tr>
<th>Fuentes</th>
<td>".$row1['fuentes']."</td>
</tr>

<tr>
<th>Fecha</th>
<td>".$row1['fecha']."</td>
</tr>

<tr>
<th>Objetivos</th>
<td>".$row1['objetivos']."</td>
</tr>

<tr>
<th>Requerimientos de informacion</th>
<td>".$row1['req_info']."</td>
</tr>

<tr>
<th>Descripción</th>
<td>".$row1['descripcion']."</td>
</tr>
<tr>

<th>Alternativa</th>
<td>".$row1['alternativa']."</td>
</tr>
<tr>

<tr>
<th>Solucion</th>
<td>".$row1['solucion']."</td>
</tr>

<tr>
<th>Importancia</th>
<td>".$row1['importancia']."</td>
</tr>

<tr>
<th>Urgencia</th>
<td>".$row1['urgencia']."</td>
</tr>

<tr>
<th>Estado</th>
<td>".$row1['estado']."</td>
</tr>

<th>Comentarios</th>
<td>".$row1['comentario']."</td>
</tr>
</table>
<br>
";
}
}

?>
</body>
</html>