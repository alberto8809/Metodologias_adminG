<?php
 require("class/ludoteca.php");
        $juego=Ludoteca::Recover_Juego();
        $juegos=Ludoteca::Recover_Game();

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $( document ).ready(function() {
         $("#select").on("change", function(){
      value =  $("#select").val();
      //alert(id_entidad);
      $.post("select_juego.php", { value: value }, function(data){
          $("#select2").html(data);

        });

    });
  });


    </script>

</head>
<body>
              <h3 align="center">Seleccione Tipo de Juego</h3>
              <select class="form-control input-lg" id="select" name="select">
                  <?php  foreach ($juego as $value) {?>
                  <option value="<?php echo utf8_encode($value['tipo_juego']); ?>"><?php echo utf8_encode($value['tipo_juego']); ?></option>
                  <?php }?>}
              </select>
            <div >
                    <br><br><br>
              <h3 align="center">Escoge Juego</h3>
              <form method="post" action="procesajuego">
                 <select class="form-control input-lg" id="select2" name="select2" required>

                       <?php  foreach ($juegos as $value) {?>
                        <option value="<?php echo utf8_encode($value['nombre']); ?>"><?php echo utf8_encode($value['nombre']);?></option>

                        <?php }?>}

                   </select> <br>
                   <center>
                   <h3>Ingrese Matrícula</h3>
                    <input class="form-control input-lg" type="text" id="ma" name="matricula" pattern="^[0|1|2|3|4|5|6|7|8|9]\d{9}$" placeholder="21130662221" required/><br><br>
                    <button class="btn btn-info btn-lg">Solicitar</button>
                    </center>
                </form>
            </div>

</body>
</html>
