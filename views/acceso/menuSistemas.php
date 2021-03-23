<?php require_once './views/error.php'; comprobarAcceso(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h2>Dashboard Sistemas</h2>
            <br>
        </div>
        <div class="col-4">
            <p style="font-weight: bold"> <?php echo " Usuario: " . $usuario[0][0]; ?> </p>
            <p style="font-weight: bold"> <?php echo " Lugar de trabajo: " . $usuario[0][2] . $usuario[0][3]; ?> </p>
        </div>
    </div>
    
    <br>

    <!-- Accesos rápidos -->
    <div class="row">
        <div class="col-12">
            <h4>Accesos rápidos</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-2"> <a class="btn btn-primary btn-block" href="?controller=usuarios&action=verUsuarios"> Usuarios </a> </div>
        <div class="col-2"> <a class="btn btn-success btn-block" href="?controller=sucursales&action=verSucursales"> Sucursales </a> </div>
        <div class="col-2"> <a class="btn btn-danger btn-block" href="?controller=soporte&action=calculosRapidos"> Cálculos rápidos </a> </div>
        <div class="col-2"> <a class="btn btn-dark btn-block disabled" href="?controller=usuarios&action=verUsuarios"> no asignado </a> </div>
        <div class="col-2"> <a class="btn btn-dark btn-block disabled" href="?controller=sucursales&action=verSucursales"> no asignado </a> </div>
        <div class="col-2"> <a class="btn btn-dark btn-block disabled" href="?controller=soporte&action=calculosRapidos"> no asignado </a> </div>
    </div>
   
    <br><br>

    <div class="row">
        <div class="col-12">
            <h4>Stock minimo (inventario sistemas)</h4>
            <br>
            <?php
                if ($stock == '0') {
                    echo "<h6>no hay datos para mostrar</h6>";
                } else {
            ?>
            <table class="table table-hover table-sm table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th>Producto</th>
                        <th>Stock</th>
                        <th>Piezas</th>
                        <th>Lugar</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($stock as $mm) { ?>
                        <tr>
                            <td> <?php echo $mm['producto'] ?> </td>
                            <td> <?php echo $mm['stockMinimo'] ?> </td>
                            <td> <?php echo $mm['piezas'] ?> </td>
                            <td> <?php echo $mm['sucursal'] . $mm['departamento'] ?> </td>
                    <?php } ?>
                    </tr>
                </tbody>
            <?php } ?>
            </table>

            <br><br>
        </div>
    </div>

</div>