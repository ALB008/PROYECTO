<?php

    class Actividades extends Controllers{
        public function __construct(){
            parent::__construct();
        }

        public function actividades(){
            $data['page_tag'] = "Actividades";
            $data['page_title'] = " Actividades Registradas <small>  Open Book</small>";
            $data['page_name'] = "actividades";
            $this->views->getView($this,"actividades",$data);
        }

        
    
    }
?>