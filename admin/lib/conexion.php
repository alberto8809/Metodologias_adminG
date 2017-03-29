<?php
class Conexion extends PDO {
  private $tipo_de_base = 'mysql';
  private $host = 'localhost';
  private $nombre_de_base = 'metodologia';
  private $usuario = 'root';
  private $contrasena = '';
  public function __construct() {

     try{
        parent::__construct($this->tipo_de_base.':host='.$this->host.';dbname='.$this->nombre_de_base, $this->usuario, $this->contrasena);
     }catch(PDOException $e){
        echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
        exit;
     }
  }
}



function an_queryi()
  {
    $QueryReceived=func_get_arg(0);
  
    
    
    if (!($link=new mysqli('localhost','root','','metodologia')))

  {
        echo "Error conectando a la base de datos."; exit();
    }
    
  //mysql_query("SET NAMES 'utf8'");
    $QueryResult =$link->query($QueryReceived);
  if (!mysqli_set_charset($link, "utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", mysqli_error($enlace));
    exit(); 
    } 
    mysqli_close($link);
    return $QueryResult;
  }

 ?>
