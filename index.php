<?php 

require_once "Controllers/inicio.Controllers.php";

//require_once "Controllers/person.Controllers.php";
require_once "Models/conexion.php";

// $conexion = Conexion::conectarDB();
// echo '<pre>'; print_r($conexion); echo '</pre>';

$inicio = inicioController::traerinicio();
