<?php

	require("class/user.php");  

	$us=User::Recover_Users();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>	 
    <link rel="stylesheet" type="text/css" href="/Proyect_Metodologias/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/Proyect_Metodologias/css/bootstrap-theme.css">    
    <script src="/Proyect_Metodologias/js/highcharts.js"></script>
    <script src="/Proyect_Metodologias/js/exporting.js"></script>
    <script src="/Proyect_Metodologias/js/function.js"></script>
    <script src="/Proyect_Metodologias/js/jquery-3.1.1.min.js"></script>
    <script src="/Proyect_Metodologias/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-danger" align="center">Control de Usuarios</h3><br>
<center><a href="nuevo"><button class='btn btn-info'>Nuevo Usuario</button></a></center>
<br><br>
<table  class="table table-hover">
	<th>Nombre</th>
	<th>Apellido Materno</th>
	<th>Apellido Paterno</th>
	<th>Matrícula</th>
	<th>Licenciatura</th>
	<th>Editar</th>
	<th>Eliminar</th>
<?php
	foreach ($us as  $value) {
		echo "<tr>";	
		echo "<td>".utf8_encode($value['nombre'])."</td>";
		echo "<td>".utf8_encode($value['apMaterno'])."</td>";
		echo "<td>".utf8_encode($value['apPaterno'])."</td>";
		echo "<td>".utf8_encode($value['matricula'])."</td>";
		echo "<td>".utf8_encode($value['licenciatura'])."</td>";
		$value2=$value['id'];
		echo "<td> <a href='cambios.php?id=$value2'><button class='btn btn-info'> Editar</button></a></td>";
		echo "<td> <a href='eliminar.php?id=$value2'><button class='btn btn-info'> Eliminar</button></a></td>";
		echo "</tr>";
	}
	
?>
</table>

</body>
</html>