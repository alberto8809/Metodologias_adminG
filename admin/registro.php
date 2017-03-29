<?php
	
	require("class/user.php");  

	$nombre=$_POST['nombre'];
	$apP=$_POST['apP'];
	$apM=$_POST['apM'];
	$matricula=$_POST['matricula'];
	$lic=$_POST['lic'];

	
	
	$valid=User::Recover_Matricula($matricula);
		foreach ($valid as  $value) {
			if ($value['matricula']==$matricula) {
				echo "<script> alert('Ya existe Registro!');window.location.href='../admin/index';</script>";
			}
		}
				User::Insert($matricula,$apP,$apM,$nombre,$lic);			
				echo "<script> alert('Bienvenido!');window.location.href='../admin/validaMatricula?matricula=$matricula';</script>";
		
		
	

?>

















