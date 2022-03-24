<?php

    class Mactividad extends Conexion{

        public function get_actividad(){
            $conect=parent::conect();
            $sql="SELECT * FROM actividad WHERE cod_activ=1;";
            $sql=$conect->prepare($sql);
            $sql=execute();
            return $resultado=$sql->$fetchAll();
        }

        public function insert_actividad($nombre,$desc,$ubi,$dia,$hora,$limit,$duarc){
            $conect=parent::conect();
            $sql="call createActividad(?,?,?,?,?,?,?)";
            $sql=$conect->prepare($sql);
            $sql->bindValue(1, $nombre);
            $sql->bindValue(2, $desc);
            $sql->bindValue(3, $ubi);
            $sql->bindValue(4, $dia);
            $sql->bindValue(5, $hora);
            $sql->bindValue(6, $limit);
            $sql->bindValue(7, $duarc);
            $sql=execute();
        }

        public function update_actividad($cod){
            $conect=parent::conect();
            $sql="call updateActividad($cod,?,?,?,?,?,?,?)";
            $sql=$conect->prepare($sql);
            $sql->bindValue($cod);
            $sql=execute();
        }

        public function delete_actividad($cod){
            $conect=parent::conect();
            $sql="call deleteActividad($cod)";
            $sql=$conect->prepare($sql);
            $sql->bindValue($cod);
            $sql=execute();
            return $resultado=$sql->$fetchAll();
        }

        public function getCod_actividad_($cod){
            $conect=parent::conect();
            $sql="SELECT * FROM actividad WHERE cod_activ=?;";
            $sql=$conect->prepare($sql);
            $sql->bindValue($cod);
            $sql=execute();
            return $resultado=$sql->$fetchAll();
        }






    }

?>