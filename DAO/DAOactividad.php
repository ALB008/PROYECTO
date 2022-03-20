<?php

include_once("../util/conexion.php");
    
    class DAOactividad extends conectar{
        public function createActividad(){
            $c= new conectar();
            $conexion=$c->conexion();
            $sql = "call createActividad('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]', '$datos[6]')";
            return $result=mysqli_query($conexion,$sql);
        }
    
        public function updateActividad(){
    
        }
    
        public function deleteActividad(){
            
        }
    }
    
    
    ?>