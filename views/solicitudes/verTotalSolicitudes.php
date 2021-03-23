<?php require_once './views/error.php'; comprobarAcceso(); ?>

<div class="table text-center">

    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2>Total de solicitudes</h2>
            </div>
            <div class="col-2">
                <a class="btn btn-primary btn-block" href="?controller=solicitudes&action=resumenSolicitudes">
                    Por producto
                </a>
            </div>
            <div class="col-2">
                <a class="btn btn-primary btn-block" href="?controller=solicitudes&action=resumenRegiones">
                    Por región
                </a>
            </div>
        </div>
    </div>

    <br>
    
    <table class="table table-sm table-striped table-light">
        <thead>
            <tr>
                <th>Folio</th>
                <th>Usuario</th>
                <th>Tipo Papeleria</th>
                <th>Solicitud</th>
                <th>Envio</th>
                <th>Rastreo</th>
                <th>Acción</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($solicitudes as $solicitud) { ?>
                <tr>
                    <td> <?php echo $solicitud['idSolicitudes'] ?> </td>
                    <td> <?php echo $solicitud['usuarios'] ?> </td>
                    <td> <?php echo $solicitud['tipoPapeleria'] ?> </td>
                    <td> <?php echo $solicitud['fechaSolicitud'] ?> </td>
                    <td> <?php echo $solicitud['fechaEnvio'] ?> </td>
                    <td> <?php echo $solicitud['rastreo'] ?> </td>

                    
                    <?php if ($solicitud['rastreo'] == 'revisando') { ?>
                        <td> 
                            <a class="btn btn-success btn-block" href='?controller=movimientoConsumibles&action=atenderSolicitudes&idSolicitud=<?php echo $solicitud['idSolicitudes'] ?>'> 
                                Atender
                            </a> 
                        </td>
                    <?php } else if ($solicitud['rastreo'] == 'enviado' || $solicitud['rastreo'] == 'resuelto') { ?>
                            <td> 
                                <a class="btn btn-primary btn-block" href='?controller=solicitudes&action=verSolicitudProductos&idSolicitudes=<?php echo $solicitud['idSolicitudes'] ?>&idUsuario=<?php echo $solicitud["idLugarTrabajo"]?>&rastreo=<?php echo $solicitud['idRastreo'] ?>'> 
                                    Ver
                                </a> 
                            </td>
                    <?php } ?>
            <?php } ?>
                </tr>
        </tbody>
    </table>

</div>