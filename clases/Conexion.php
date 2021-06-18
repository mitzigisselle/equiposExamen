<?php 
    class Conexion{
      public function conectar(){
                      $server="localhost";
                      $usuario="id17011036_mitzi";
                      $password="PrograWeb_2021";
                      $bd="id17011036_unidad4";
        $conexion=mysqli_connect($server, $usuario, $password, $bd);
        return $conexion;
      }
    }
?>