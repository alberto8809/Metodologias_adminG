<?php
     session_start();
	   $matricula=$_REQUEST['user'];
     /*Se descencipta la variable*/
     $user= base64_decode($matricula);
     $all=$_REQUEST['all'];
     $values= base64_decode($all);
     $content= unserialize($values);     
     $content2=explode("-",$content[0]);  


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">    
    <link rel="stylesheet" type="text/css" href="/Proyect_Metodologias/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/Proyect_Metodologias/css/bootstrap-theme.css">    
    <script src="/Proyect_Metodologias/js/jquery-3.1.1.min.js"></script>
    <script src="/Proyect_Metodologias/js/bootstrap.js"></script>

   

    </head>
    <body>
     <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <label class="navbar-brand">Ludoteca</label>  
           <div class="form-inline mt-2 mt-md-0">
            <a href="http://www.cua.uam.mx/" target="_target"><img align="right" src="/Proyect_Metodologias/img/logo.png" width="" height="50px"></a>
           </div>
        </div>
    </nav>
   


      <div class="container-fluid">
      <div align="right">
           <a href="../dynamic/destroy"><button class="btn btn-info" aling="left">Salir</button></a>
           </div>
        <div class="row">
          <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
            <center>
              <h2>Licenciatura:<br><br><p class="bg-info"> <?php echo $content2[5]?></p></h2><br>
              <h2>Matrícula:<br><br><p class="bg-info"> <?php echo $content2[1]?></p></h2>

            </center>
           </nav>

           <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
            <blockquote class="blockquote">
              <center><h2><p class="bg-info">Bienvenido: <?php echo utf8_encode($content2[2])." ".utf8_encode($content2[3])?></p></h2></center>
            </blockquote>
              
              <center>
                <?php
                 echo "<iframe src='../prestamo?id=$content2[0]' frameBorder='0' width='100%' height='400'></iframe>";
                ?>
                </center>
              </main>
        </div>       
      </div>
        
    </body>
</html>