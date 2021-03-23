<?php require_once './views/error.php'; comprobarAcceso(); ?>
    
<div class="table text-center">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Resumen solicitudes</h2>
            </div>
        </div>
    </div>

    <br>

    <?php 
        if ($solicitudes == '0') {
            echo '<br><br><br>';
            echo '<h3>no hay datos para mostrar</h3>';
        }  else {
    ?>
        
            <table class="table table-sm table-striped table-light">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Piezas Solicitadas</th>
                        <th>Inventario</th>
                        <th>Diferencia (inventario - solicitado)</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($solicitudes as $solicitud) { ?>
                            <tr>
                                <td> <?php echo $solicitud['producto'] ?> </td>
                                <td> <?php echo $solicitud['piezasSolicitadas'] ?> </td>
                                <td> <?php echo $solicitud['piezas'] ?> </td>
                                <td> <?php echo $solicitud['piezas'] - $solicitud['piezasSolicitadas'] ?> </td>
                    <?php } ?>
                            </tr>
                </tbody>
            </table>

    <?php } ?>

</div>