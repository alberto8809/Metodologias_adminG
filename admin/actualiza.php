<?php
require("class/user.php");
$id=$_POST['id'];
$name=$_POST['nombre'];
$ap=$_POST['apPaterno'];
$am=$_POST['apMaterno'];
$ma=$_POST['matricula'];
$lic=$_POST['licenciatura'];
   
   	   $conection=new Conexion();
       $conection-> exec("set names utf8");
       $query_update ='UPDATE alumnos SET nombre="'.$name.'",apPaterno="'.$ap.'",apMaterno="'.$am.'",matricula="'.$ma.'",licenciatura="'.$lic.'" WHERE id="'.$id.'"';
 	   $preparedStatement = $conection->prepare($query_update);    
       $preparedStatement->execute();
       
	header("location: abc.php");
?>





