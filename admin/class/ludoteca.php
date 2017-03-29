<?php
 require ('lib/conexion.php');
class Ludoteca {
  private $id;
  private $nombre;
  private $cantidad;
  private $disponible;
  private $tipo_juego;
  

  const TABLA = 'Ludoteca';
  /*constructor de la clase user*/
  public function __construct($id,$nombre,$cantidad,$disponible,$tipo_juego) {
     $this->id = $id;
     $this->nombre = $nombre;
     $this->cantidad = $cantidad;
     $this->disponible = $disponible;
     $this->tipo_juego = $tipo_juego;
     

   }


   public static function Recover_Juego(){
   $conection = new Conexion();
   $consult = $conection->prepare('SELECT DISTINCT tipo_juego FROM ' . self::TABLA . ' WHERE disponible=1  ORDER BY tipo_juego ASC ');
   $consult->execute();
   $values = $consult->fetchAll();
   return $values;
   }


   public static function Total(){
   $conection = new Conexion();
   $consult = $conection->prepare('SELECT total,cantidad,control FROM ' . self::TABLA . ' WHERE disponible=1 ');
   $consult->execute();
   $values = $consult->fetchAll();
   return $values;
   }


   public static function Recover_Name(){
   $conection = new Conexion();
   $consult = $conection->prepare('SELECT DISTINCT nombre FROM ' . self::TABLA . ' WHERE disponible=1  ORDER BY tipo_juego ASC ');
   $consult->execute();
   $values = $consult->fetchAll();
   return $values;
   }


   public static function Recover_NameTaller(){
   $conection = new Conexion();
   $consult = $conection->prepare('SELECT DISTINCT nombreTaller FROM Taller');
   $consult->execute();
   $values = $consult->fetchAll();
   return $values;
   }

  public static function Recover_NumTaller(){
   $conection = new Conexion();
   $consult = $conection->prepare('SELECT alumnos FROM Taller');
   $consult->execute();
   $values = $consult->fetchAll();
   return $values;
   }   

   public static function Recover_Tipo($juego){
   $conection = new Conexion();
   $consult = $conection->prepare('SELECT nombre,total FROM ' . self::TABLA . ' WHERE nombre="'.$juego.'" AND disponible=1 ');
   $consult->execute();
   $values = $consult->fetchAll();
   return $values;
   }

    public static function Recover_Tipo2($juego){
   $conection = new Conexion();
   $consult = $conection->prepare('SELECT DISTINCT nombre,total FROM ' . self::TABLA . ' WHERE tipo_juego="'.$juego.'" AND disponible=1 ');
   $consult->execute();
   $values = $consult->fetchAll();
   return $values;
   }

   public static function Recover_Game(){
   $conection = new Conexion();
   $consult = $conection->prepare('SELECT DISTINCT nombre,total FROM ' . self::TABLA . ' WHERE disponible=1  ORDER BY tipo_juego ASC ');
   $consult->execute();
   $values = $consult->fetchAll();
   return $values;
   }

   public static function Recover_JuegoID($id){
   $conection = new Conexion();
   $consult = $conection->prepare('SELECT nombre,tipo_juego,id_alumno FROM ' . self::TABLA . ' WHERE id_alumno="'.$id.'" AND disponible=1 ');
   $consult->execute();
   $values = $consult->fetchAll();
   return $values;
   }


  


   
    

}



 ?>
