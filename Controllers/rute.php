<?php 
    include "../Controllers/person.Controllers.php";

    if ( isset($_POST['nombre'])){
        $create = personController::ingresarperson();
    }
    
    
    $listar = personController::personlistar();
   