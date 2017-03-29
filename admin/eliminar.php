<?php
	require("class/user.php");
	$id=$_REQUEST['id'];
   $conection = new Conexion();
   $consult = $conection->prepare('DELETE FROM alumnos WHERE id="'.$id.'"');
   $consult->bindParam(':id', $id);   
   $consult->execute();
	header("location: abc.php");
	

?>