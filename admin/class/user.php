<?php
 
require ('lib/conexion.php');

class User {
  private $id;
  private $matricula;
  private $apPaterno;
  private $apMaterno;
  private $nombre;
  private $licenciatura;

  const TABLA = 'alumnos';
  /*constructor de la clase user*/
  public function __construct($id,$matricula,$apPaterno,$apMaterno,$nombre,$licenciatura) {
     $this->id = $id;
     $this->matricula = $matricula;
     $this->apPaterno = $apPaterno;
     $this->apMaterno = $apMaterno;
     $this->nombre = $nombre;
     $this->licenciatura = $licenciatura;

   }

   public static function Recover_Matricula($matricula){
   $conection = new Conexion();
   $consult = $conection->prepare('SELECT matricula FROM ' . self::TABLA . ' WHERE matricula="'.$matricula.'"');
   $consult->execute();
   $values = $consult->fetchAll();
   return $values;
   }

    public static function Recover_All($matricula){
   $conection = new Conexion();
   $consult = $conection->prepare('SELECT * FROM ' . self::TABLA . ' WHERE matricula="'.$matricula.'"');
   $consult->execute();
   $values = $consult->fetchAll();
   return $values;
   }   

public static function Id($matricula){
   $conection = new Conexion();
   $consult = $conection->prepare('SELECT id FROM ' . self::TABLA . ' WHERE matricula="'.$matricula.'"');
   $consult->execute();
   $values = $consult->fetchAll();
   return $values;
   }   


  public static function Recover_Id($matricula){
   $conection = new Conexion();
   $consult = $conection->prepare('SELECT * FROM ' . self::TABLA . ' WHERE id="'.$matricula.'"');
   $consult->execute();
   $values = $consult->fetchAll();
   return $values;
   }


   public static function Recove_Prestamo($matricula){
   $conection = new Conexion();
   $consult = $conection->prepare('SELECT * FROM ' . self::TABLA . ' WHERE id="'.$matricula.'"');
   $consult->execute();
   $values = $consult->fetchAll();
   return $values;
   }



   public static function Elimina($id){
   $conection = new Conexion();
   $consult = $conection->prepare('DELETE FROM' . self::TABLA . ' WHERE id="'.$id.'"');
   $consult->bindParam(':id', $id);   
   $consult->execute();
   }

 public static function Recover_Users(){
   $conection = new Conexion();
   $consult = $conection->prepare('SELECT * FROM ' . self::TABLA . '');
   $consult->execute();
   $values = $consult->fetchAll();
   return $values;
   }




 public static function Taller(){
   $conection = new Conexion();
   $consult = $conection->prepare('SELECT DISTINCT taller FROM ' . self::TABLA . '');
   $consult->execute();
   $values = $consult->fetchAll();
   return $values;
   }

   public static function Insert($matricula,$apP,$apM,$nombre,$lic)
   {

    try{

      $conection=new Conexion();
      $conection-> exec("set names utf8");
      $query_insert ="INSERT INTO alumnos (matricula,apPaterno,apMaterno,nombre,licenciatura) VALUES (:matricula,:apPaterno,:apMaterno,:nombre,:licenciatura)";
      $preparedStatement = $conection->prepare($query_insert);    
      $preparedStatement->bindParam(':matricula',$matricula, PDO::PARAM_INT);
      $preparedStatement->bindParam(':apPaterno',$apP, PDO::PARAM_STR);
      $preparedStatement->bindParam(':apMaterno',$apM, PDO::PARAM_STR);
      $preparedStatement->bindParam(':nombre',$nombre, PDO::PARAM_STR);
      $preparedStatement->bindParam(':licenciatura',$lic, PDO::PARAM_STR);    
      $preparedStatement->execute();

    }catch(PDOException $e)
    {
    echo $e->getMessage();
    }

     
   } 

}



 ?>
