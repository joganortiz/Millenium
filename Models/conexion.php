<?php

class Conexion{

    static public function conectarDB(){
        
        $con = new PDO("mysql:host=localhost;dbname=millenium", 
			            "root", 
			            "");

		$con->exec("set names utf8");

        return $con;
    }
}