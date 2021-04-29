<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="Icon" href="../img/Icono.png" >
    <link rel="stylesheet" href="../css/style.css">
    <title>Millenium</title>
</head>

<body>
    <div class="container-fluid mt-5">
        
        <div class="d-flex">
        
            <div class="col-sm-5">
                <div class="card ">
                    <h2>Ingresar Personas</h2>
                    <form method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nombre: </label>
                            </div>
                            <div class="form-group d-flex">
                                <div class="col-sm-12 d-flex">
                                    <input type="text" name="" id="nombre" class="form-control" placeholder="Ingresar su Nombre" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Apellidos: </label>
                            </div>
                            <div class="form-group d-flex">
                                <div class="col-sm-12 d-flex">
                                    <input type="text" name="" id="apellido" class="form-control" placeholder="Ingresar sus Apellidos" > 
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Fecha Nacimiento:</label>
                            </div>
                            <div class="form-group d-flex">
                                <div class="col-sm-12 d-flex">
                                    <input type="date" name="" id="nacimiento" class="form-control" >
                                </div>
                            </div>
                            
                            <center class="mt-3">
                                <div>
                                    <span id="respuesta"></span>
                                    <button type="button" class="btn btn-success" id="btnagregar">Agregar</button>

                                </div>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-5 caja2" id="tabla">
                <?php
                    include "../Views/table.php"; 
                ?>
                
            </div>
        </div> 
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#btnagregar").click(function(){
            
            var nombre = $("#nombre").val();
            var apellido = $("#apellido").val();
            var nacimiento = $("#nacimiento").val();

            if(nombre !== ""){
               if (apellido !== ""){
                   if(nacimiento !== ""){
                        $.post("../Controllers/rute.php",{
                        nombre:nombre,
                        apellido:apellido,
                        nacimiento:nacimiento,
                        },
                            function(data, status){
                            if(data == "registrado"){
                                $("#respuesta").html("<div class='alert alert-info'>" + data + "</div>");
                                $("#tabla").load("../Views/table.php");
                                $("#nombre").val('');
                                $("#apellido").val('');
                                $("#nacimiento").val('');
                            }else{
                                $("#respuesta").html("<div class='alert alert-warning'>" + data + "</div>");
                            }
                        });

                   }else{
                        $("#respuesta").html("<div class='alert alert-warning'>" + "Ingrese su Necha de Nacimiento" + "</div>");
                    }
               }else{
                    $("#respuesta").html("<div class='alert alert-warning'>" + "Ingrese sus Apellidos" + "</div>");
                }
            }else{
                $("#respuesta").html("<div class='alert alert-warning'>" + "Ingrese su Nombre" + "</div>");
            }
        });
    });

</script>
</body>
</html>