<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">       
    
</head>
<body>
  <h3 class="text-danger" align="center">Alta de Usuario</h3><br>
 <center><a href="javascript:history.back(-1);"><button class="btn btn-info">Atrás</button></a></center><br>
<form class="form-horizontal" action="nuevo_registro" method="post">
            <div class="form-group">
               <label class="control-label col-sm-2" for="nombre">Nombre:</label>
               <div class="col-sm-10">
                <input type="text" class="form-control"  name="nombre" required/>
              </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2" for="apP">Apellido Paterno:</label>
               <div class="col-sm-10">
                <input type="text" class="form-control" name="apP" required/>
              </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2" for="apM">Apellido Materno:</label>
               <div class="col-sm-10">
                <input type="text" class="form-control" name="apM" required/>
              </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2" for="matricula">Matrícula:</label>
               <div class="col-sm-10">
                <input type="text" class="form-control" name="matricula" pattern="^[0|1|2|3|4|5|6|7|8|9]\d{9}$"  placeholder="10 dígitos" required/>
              </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2" for="lic">Licenciatura:</label>
               <div class="col-sm-10">
                <input type="text" class="form-control" name="lic" required/>
              </div>
            </div>
            <center><input type="submit" name="" value="Registrar" class="btn btn-primary"></center>

        </form>
</body>
</html>


<?php

	
		
		
?>