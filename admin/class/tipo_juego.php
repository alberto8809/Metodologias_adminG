<?php
 require_once ('lib/conexion.php');
class Tipo_Juego {
  private $id;
  private $tipo_juego;
  private $activo;



  const TABLA = 'tipo_juegos';
  /*constructor de la clase user*/
  public function __construct($id,$tipo_juego,$activo) {
   $this->id = $id;
   $this->tipo_juego = $tipo_juego;
   $this->activo = $activo;
   


 }

 public static function Recover_Tipo_Juego(){
 $conection = new Conexion();
 $consult = $conection->prepare('SELECT  tipo_juego FROM ' . self::TABLA . ' ORDER BY tipo_juego ASC');
 $consult->execute();
 $values = $consult->fetchAll();
 return $values;
 }


 




}



 ?>
