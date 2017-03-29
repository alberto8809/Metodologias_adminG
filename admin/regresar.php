<?php
require("class/ludoteca.php"); 

$id=$_REQUEST['id'];
$name=$_REQUEST['nombre'];

$game=Ludoteca::Recover_Tipo($name);
	foreach ($game as  $value) {
		if ( $value['nombre']==$name) {
			
			$conection=new Conexion();
       		$conection-> exec("set names utf8");
       		$query_update ='UPDATE Ludoteca SET id_alumno=0,control=control-1,total=control+cantidad WHERE id_alumno="'.$id.'" and nombre="'.$name.'"';
 	   		$preparedStatement = $conection->prepare($query_update);    
       		$preparedStatement->execute();	
       		header("location: prestamoDevuelto?id=$id");
		}
	}

	   
       
	
?>