<?php 
include "../Models/person.Models.php";
class personController{

    static public function ingresarperson(){

        if(isset($_POST["nombre"])){

			$tabla = "person";

            $datos = array("nombre" => $_POST["nombre"],
                            "apellido" => $_POST["apellido"],
				            "nacimiento" => $_POST["nacimiento"]
                        );

			$resp = personModel::personingresar($tabla, $datos);

			return $resp;

		}
    }

    static public function personlistar(){
        $tabla = "person";

        $resp = personModel::listarperson($tabla);
        
        return $resp;
    }
}