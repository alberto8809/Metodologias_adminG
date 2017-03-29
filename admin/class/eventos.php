<?php
 require_once ('lib/conexion.php');
class Eventos {
  private $id;
  private $nombre;
  private $img;
  
  


  const TABLA = 'eventos';
  /*constructor de la clase user*/
  public function __construct($id,$nombre,$img) {
   $this->id = $id;
   $this->nombre = $nombre;
   $this->img = $img;
  

 }

 


 public static function Recover_Img_event(){
 $conection = new Conexion();
 $consult = $conection->prepare('SELECT  img FROM ' . self::TABLA );
 $consult->execute();
 $values = $consult->fetchAll();
 return $values;
}




}



 ?>

