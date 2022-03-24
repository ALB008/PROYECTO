<?php

    class homeModel extends Mysql{

        public function __construct(){
            parent::__construct();
        }

        public function setActividad(string $nombre, string $desc, string $ubi, string $dia, string $hora, int $limit, int $duarc){
            $query_insert = "call createActividad (?,?,?,?,?,?,?)";
            $arrData = array($nombre,$desc,$ubi,$dia,$dia,$hora,$limit,$duarc);
            $request_insert = $this->insert($query_insert,$arrData);
            return $request_insert;
        }
        

    }
    

?>