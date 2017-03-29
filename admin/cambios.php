<?php

	require("class/user.php");
$id=$_REQUEST['id'];
$user=User::Recover_Id($id);
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
<h3 class="text-danger" align="center">Edita Usuario</h3><br>
<center><a href="javascript:history.back(-1);"><button class="btn btn-info">Atrás</button></a></center><br>
<form action="actualiza" method="post">
<table  class="table table-hover">
	<th>Nombre</th>
	<th>Apellido Materno</th>
	<th>Apellido Paterno</th>
	<th>Matrícula</th>
	<th>Licenciatura</th>
	<th>Actualizar</th>

	<?php
	foreach ($user as  $value) {
		echo "<tr>";	
		echo "<td><input type='text' name='nombre' value=".utf8_encode($value['nombre'])." required/></td>";
		echo "<td><input type='text' name='apMaterno' value=".utf8_encode($value['apMaterno'])." required/></td>";
		echo "<td><input type='text' name='apPaterno' value=".utf8_encode($value['apPaterno'])." required/></td>";
		echo "<td><input type='text' name='matricula' value=".utf8_encode($value['matricula'])." required/></td>";
		echo "<td><input type='text' name='licenciatura' value=".utf8_encode($value['licenciatura'])." required/></td>";
		echo "<input type='hidden' name='id' value=".$value['id'].">";
		echo "<td> <button class='btn btn-info'>Actualizar</button></td>";
}
	
?>
</table>
</form>

</body>
</html>