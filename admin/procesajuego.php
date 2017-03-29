<?php
require("class/user.php");  
$juego=$_POST['select2'];
$matricula=$_POST['matricula'];
$id=User::Id($matricula);
$idU;
if( (isset($juego) && empty($juego)) || ((isset($matricula) &&  empty($matricula))) ){

			echo "<script>
							alert('Debes ingresar Juego');
							window.location.href='../admin/juego';
						</script>";
		}else{
				$id=User::Id($matricula);
				$idU;
				foreach ($id as  $value) {
					$idU= $value['id'];
				}

		 	   $conection=new Conexion();
		       $conection-> exec("set names utf8");
		       $query_update ='UPDATE Ludoteca SET id_alumno="'.$idU.'",control=control-1,total=total-1  WHERE nombre="'.$juego.'"';
		 	   $preparedStatement = $conection->prepare($query_update);
		       $preparedStatement->execute();
		       echo "<script> alert('Solicitud Exitosa');window.location.href='../admin/juego';</script>";
	}

?>


