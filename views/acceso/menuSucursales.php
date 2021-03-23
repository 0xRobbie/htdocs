<?php require_once './views/error.php'; comprobarAcceso(); ?>


<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Dashboard</h2>
            <br>
        </div>
        <div class="col-4">
            <p style="font-weight: bold"> <?php echo " Usuario: " . $usuario[0][0]; ?> </p>
            <p style="font-weight: bold"> <?php echo " Lugar de trabajo: " . $usuario[0][2] . $usuario[0][3]; ?> </p>
        </div>
    </div>

    <br><br>

    <div class="row">
        <div class="col-12 text-justify">
            <h3>Comprueba que los datos de tu sucursal coincidan con los plasmados en la esquina superior derecha de esta pantalla antes de generar cualquier solicitud.</h3>
            <br>
            <h3>Despues de ello da click en la opción <span class="font-weight-bold">Menú -> Solicitar Papelería</span> ubicado en la barra de navegación y genera tu solicitud como la última vez.</h3> 
            <br>
            <h3>En caso de cualquier duda o que necesites un producto no listado, reportarlo por alguno de los siguientes medios:</h3> 
            <br><br>
            <h4> <span class="font-weight-bold">Email:</span> rchagal@operadoradetrajes.com </h4> 
            <h4> <span class="font-weight-bold">Skype:</span> Roberto Chagal (Sistemas) </h4> 
            <h4> <span class="font-weight-bold">Teléfono:</span> 5526261608 Ext. 9757 </h4> 
        </div>
    </div>












    <!-- <div class="row">
        <div class="col-6">
            <h4>Inventario de la Sucursal</h4>
            <br>
            <?php
                if ($inventario == '0') {
                    echo "<h6>no hay datos para mostrar</h6>";
                } else {
            ?>
            <table class="table table-bordered table-sm text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>Producto</th>
                        <th>Piezas</th>
                        <th>Formato</th>
                    </tr>
                </thead>

    
                <tbody>
                    <?php foreach($inventario as $mm) { ?>
                        <tr>
                            <td> <?php echo $mm['producto'] ?> </td>
                            <td> <?php echo $mm['piezas'] ?> </td>
                            <td> <?php echo $mm['formato'] ?> </td>
                    <?php } ?>
                    </tr>
                </tbody>
            <?php } ?>
            </table>
        </div>

        <div class="col-6">
            <h4>Alertas</h4>
            <br>
            <?php
                if ($minimos == '0') {
                    echo "<h6>no hay datos para mostrar</h6>";
                } else {
            ?>
            <table class="table table-bordered table-sm text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>Producto</th>
                        <th>Piezas</th>
                        <th>MinimoSucursal</th>
                    </tr>
                </thead>

    
                <tbody>
                    <?php foreach($minimos as $mm) { ?>
                        <tr>
                            <td> <?php echo $mm['producto'] ?> </td>
                            <td> <?php echo $mm['piezas'] ?> </td>
                            <td> <?php echo $mm['minimoSucursal'] ?> </td>
                    <?php } ?>
                    </tr>
                </tbody>
            <?php } ?>
            </table>
        </div>
    </div> -->

</div>