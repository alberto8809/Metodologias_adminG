<?php

	require("class/user.php");
	
	$matricula=$_REQUEST['matricula'];
	$us=User::Recover_Users();
	$taller=User::Taller();	
	$user=User::Recover_All($matricula);
	$content=array();
	$tall=array();
	$contentUs=array();
	$i=0;
	foreach ($user as $value) {
			
		 $content[$i]=$value['id']."-".$value['matricula']."-".$value['nombre']."-".$value['apPaterno']."-".$value['apMaterno']."-".utf8_encode($value['licenciatura']);
		 $i++;

	}
	$j=0;	
	foreach ($us as  $value) {
		$contentUs[$j]=$value['matricula']."-".$value['nombre']."-".$value['apPaterno']."-".$value['apMaterno']."-".utf8_encode($value['licenciatura']);
		$j++;
	}
	$k=0;
	foreach ($taller as $value){
		$tall[$k]=utf8_encode($value['taller'])."-";
		$k++;
	}
	
	 $valid = json_encode($user);
	

	 	if ($valid=="[]") {
	 		echo "<script> alert('Matrícula Invalida');window.location.href='../admin/index';</script>";		
			
	 	}else{
	 		foreach ($user as  $value) {
		
	 			 if ($value['matricula']=="1255881255") {
	 			 	$t=serialize($tall);
	 			 	$value=base64_encode($t);
	 			 	$encript=base64_encode($matricula);	
	 			 	$con_grafic=serialize($contentUs);
	 			 	$en=base64_encode($con_grafic);		 		
	 		 		$con=serialize($content);
	 		 		$encript2=base64_encode($con);
	 			  	header("location:dynamic/admin?admin=$encript&all=$encript2&content=$en&val=$value");
	 			 }else if($value['matricula']==$matricula){
	 			 	/*se encripta la variable*/
	 		 		$encript=base64_encode($matricula);			 		
	 		 		$con=serialize($content);
	 		 		$encript2=base64_encode($con);
	 				header("location:dynamic/user?user=$encript&all=$encript2");
	 			 }
	 		}
	 	}
?>	