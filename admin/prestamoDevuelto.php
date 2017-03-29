<?php
session_start();
require("class/ludoteca.php");  
$id=$_REQUEST['id'];

$us=Ludoteca::Recover_JuegoID($id);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/Proyect_Metodologias/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/Proyect_Metodologias/css/bootstrap-theme.css">    
   
</head>
<body>
<h2 align="center" class="text-danger">Ustede tiene en préstamo</h2><br>
<table  class="table table-hover">
	<th>Nombre de Juego</th>
	<th>Tipo de Juego</th>
	<th>Regresar Juego</th>
	
		<?php 

		foreach ($us as  $value) {
		echo "<tr>";
		$value2=$value['id_alumno']; 
		$tipo=utf8_encode($value['nombre']);
		echo "<td>".utf8_encode($value['nombre'])."</td>";
		echo "<td>".utf8_encode($value['tipo_juego'])."</td>";
		echo "<td> <a href='regresar?id=$value2&nombre=$tipo'><button class='btn btn-info'>Regresar</button></a></td>";
		echo "</tr>";
	}
		?>
  </table>


</body>
</html