<?php 
include "conexion.php";

class personModel{

    static public function personingresar($tabla, $datos){
        $stmt = Conexion::conectarDB()->prepare("INSERT INTO $tabla (nombre, apellido, nacimiento) VALUES (:nombre, :apellido, :nacimiento	)");

        $stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt -> bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
        $stmt -> bindParam(":nacimiento", $datos["nacimiento"], PDO::PARAM_STMT);

        if ($stmt->execute()){
           echo "registrado";
        }else{
            echo "Hay un error en el sistema";
        }
    }

    static public function listarperson($tabla){
        $stmt = Conexion::conectarDB()->prepare("SELECT * FROM $tabla ORDER BY id DESC");

		$stmt->execute();
		return $stmt -> fetchAll();
    }
}