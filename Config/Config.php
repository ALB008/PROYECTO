<?php

    //define("BASE_URL", "http://localhost/Pagina/");
    const BASE_URL = "http://localhost/Pagina";

    //Zona horaria
    date_default_timezone_set('America/Bogota');
    
    //Datos para la conexion a DB
    const DB_HOST = "localhost";
    const DB_NAME = "biblioteca";
    const DB_USER = "root";
    const DB_PASSWORD = "";
    const DB_CHARSET = "charset=utf8";

    //Deliminadores decimal y millar EJ. 24,1989.00
    const SPD = ".";
    const SPM = ",";

    //Simbolo de moneda
    const SMONEY = "$"

?>