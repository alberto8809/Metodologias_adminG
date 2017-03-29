<?php
 require_once ('lib/conexion.php');
class Juego {
  private $id;
  private $nombre_juego;
  private $img_juego;
  private $disponibilidad;
  private $tipo_juego;


  const TABLA = 'juegos';
  /*constructor de la clase user*/
  public function __construct($id,$nombre_juego,$img_juego,$disponibilidad,$tipo_juego) {
   $this->id = $id;
   $this->nombre_juego = $nombre_juego;
   $this->img_juego = $img_juego;
   $this->disponibilidad = $disponibilidad;
   $this->tipo_juego = $tipo_juego;


 }

 public static function Recover_Juego(){
 $conection = new Conexion();
 $consult = $conection->prepare('SELECT  nombre_juego FROM ' . self::TABLA . '');
 $consult->execute();
 $values = $consult->fetchAll();
 return $values;
 }


 public static function Recover_Juego_id($nombre_juego){
 $conection = new Conexion();
 $consult = $conection->prepare('SELECT  nombre_juego FROM ' . self::TABLA . ' WHERE tipo_juego="'.$nombre_juego.'"');
 $consult->execute();
 $values = $consult->fetchAll();
 return $values;
}




}



 ?>

