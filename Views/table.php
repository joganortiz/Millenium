<div class="card cont2">
    <h2>Tabla Personas</h2>
    <div class="card-body">

        <table class="table table-hover">
            <thead>
                <tr >
                    <th class="title">Nombre</th>
                    <th class="title">Apellidos</th>
                    <th class="title">Fecha Nacimiento</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include "../Controllers/rute.php";
                ?>
                <?php  foreach($listar as $listar => $value): ?>
                    <tr>
                        <th scope="row"><?php echo $value["nombre"];?></th>
                        <th><?php echo $value["apellido"];?></th>
                        <th><?php echo date("d/m/Y",strtotime($value["nacimiento"]));?></th>
                    </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
</div>