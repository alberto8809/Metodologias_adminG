<?php

	require("class/ludoteca.php");  
	$game=Ludoteca::Recover_NameTaller();
	$tam=Ludoteca::Recover_NumTaller();	
	$tam2=Ludoteca::Total();
	$array=array();
	$array2=array();
	$array3=array();
	$array4=array();
	$i=0;
	foreach ($game as  $value) {
		$array[$i]=utf8_encode($value['nombreTaller']);		
		$i++;
	}
	$j=0;
	foreach ($tam as  $value) {
		$array2[$j]=  (int) $value['alumnos'];				
		$j++;
	}

	$k=0;
	foreach ($tam2 as  $value) {
		$array3[$k]=  (int) $value['total'];				
		$k++;
	}



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">  
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">   

    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script> 
    <script src="../js/highcharts.js"></script> 
    <script src="../js/exporting.js"></script> 
    <script src="../js/function.js"></script> 

</head>
<body>
<h3 class="text-danger" align="center">Gráficas</h3><br><br><br>
<div id="content2" style='min-width: 210px; height: 400px; margin: 0 auto'></div> 
<script type="text/javascript">
	var content=<?php echo json_encode($array);?>;
	var content1=<?php echo json_encode($array3);?>;
	graf(content,content1);
</script>
<br><br><br>
<div id="content3" style='min-width: 210px; height: 400px; margin: 0 auto'></div> 
<script type="text/javascript">
var content=<?php echo json_encode($array);?>;
	var content1=<?php echo json_encode($array2);?>;
	graf2(content,content1);
</script>

</body>
</html>