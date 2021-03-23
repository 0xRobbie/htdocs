<?php require_once './views/error.php'; comprobarAcceso(); ?>
<!-- 
<?php date_default_timezone_set("America/Mexico_City"); ?>
<?php echo "Today is " . date("Y/m/d h:i:s") . "<br>"; ?> 
-->

<div class="table">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2>Solicitudes</h2>
            </div>
            <div class="col-4">
                <a class="btn btn-primary btn-block" href="?controller=solicitudes&action=formularioSolicitudes">
                    <!-- <span class="material-icons">playlist_add</span> --> Nueva Solicitud
                </a>
            </div>
        </div>
        
        <br><br>

        <div class="row">
            <div class="col-12">
                <h6 class="font-weight-bold"> Instrucciones: </h6>
                <h6 class="font-weight-bold"> 1. Para ingresar una nueva solicitud da click en el botón azul</h6> 
                <h6 class="font-weight-bold"> 2. Para ingresar productos a la solicitud da click en el botón verde que aparecerá despues de generar tu solicitud</h6> 
                <h6 class="font-weight-bold"> 3. Una vez que la solicitud tenga productos aparecerá en la sección de seguimiento, dónde podras ir monitoreando su entrega</h6> 
                <h6 class="font-weight-bold"> 4. En la sección seguimiento podras ver lo que solicitaste, el número de folio asignado y las piezas enviadas</h6> 
                <h6 class="font-weight-bold"> No olvides cerrar sesión y no generar más de una solicitud del mismo tipo de productos</h6> 
            </div>
        </div>

    </div>

    <br><br>

    <h4 class="text-left">Solicitudes sin productos</h4>
    <table class="table table-striped table-light">
        <thead>
            <tr>
                <th>Folio</th>
                <th>Usuario</th>
                <th>Tipo de Productos</th>
                <th>Solicitar</th>
                <th>Cancelar</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <?php foreach($solicitudes as $solicitud) { ?>
                    <td> <?php echo $solicitud['idSolicitudes'] ?> </td>
                    <td> <?php echo $solicitud['usuarios'] ?> </td>
                    <td> <?php echo $solicitud['tipoPapeleria'] ?> </td>

                    <td> 
                        <a class="btn btn-success btn-block" href='?controller=solicitudes&action=solicitudPapeleria&idSolicitudes=<?php echo $solicitud['idSolicitudes'] ?>&idUsuario=<?php echo $_SESSION["user_id"]?>&tipoPapeleria=<?php echo $solicitud['idTipoPapeleria'] ?>'> 
                            Solicitar
                        </a> 
                    </td>
                    <td> 
                        <a class="btn btn-danger btn-block" onclick="return confirm('¿Seguro que quiere eliminar el registro?')" href='?controller=solicitudes&action=cancelarSolicitudes&idCancelar=<?php echo $solicitud['idSolicitudes'] ?>&idSolicitudes=<?php echo $_SESSION["user_id"]?>'> 
                            <span class="material-icons"> close </span>
                        </a> 
                    </td>
            </tr>
                <?php } ?>
        </tbody>
    </table>

    <br><br>
 
    <h4 class="text-left">Seguimiento</h4>
    <table class="table table-striped table-light">
        <thead>
            <tr>
                <th>Folio</th>
                <th>Usuario</th>
                <th>Tipo</th>
                <th>Rastreo</th>
                <th>F. Solicitud</th>
                <th>F. Envio</th>
                <th>F. Recibido</th>
                <th>Estado</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($seguimiento as $solicitud) { ?>
                <tr>
                    <td> <?php echo $solicitud->getIdSolicitudes() ?> </td>
                    <td> <?php echo $solicitud->getIdUsuarios() ?> </td>
                    <td> <?php echo $solicitud->getIdTipoPapeleria() ?> </td>
                    <td> <?php echo $solicitud->getIdRastreo() ?> </td>
                    <td> <?php echo $solicitud->getFechaSolicitud() ?> </td>
                    <td> <?php echo $solicitud->getFechaEnvio() ?> </td>
                    <td> <?php echo $solicitud->getFechaRecibido() ?> </td>

                    <td> 
                        <a class="btn btn-primary btn-block" href='?controller=solicitudes&action=verSolicitudProductos&idSolicitudes=<?php echo $solicitud->getIdSolicitudes() ?>&idUsuario=<?php echo $_SESSION["user_id"]?>&rastreo=<?php echo $solicitud->getIdRastreo() ?>'> 
                            Ver
                        </a> 
                    </td>
            <?php } ?>
                </tr>
        </tbody>
    </table>

    <br><br>

    <!-- <h4 class="text-left">Enviado</h4>
    <table class="table table-striped table-light">
        <thead>
            <tr>
                <th>Folio</th>
                <th>Usuario</th>
                <th>Último Movimiento</th>
                <th>Productos</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($Enviadas as $solicitud) { ?>
                <tr>
                    <td> <?php echo $solicitud->getIdSolicitudes() ?> </td>
                    <td> <?php echo $solicitud->getIdUsuarios() ?> </td>
                    <td> <?php echo $solicitud->getUltimoMovimiento() ?> </td>

                    <td> 
                        <a class="btn btn-primary btn-block" href='?controller=solicitudes&action=verSolicitudProductos&idSolicitudes=<?php echo $solicitud->getIdSolicitudes() ?>&idUsuario=<?php echo $_SESSION["user_id"]?>&rastreo=<?php echo $solicitud->getIdRastreo() ?>'> 
                            Ver
                        </a> 
                    </td>
            <?php } ?>
                </tr>
        </tbody>
    </table> -->

</div>