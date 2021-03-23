<?php require_once './views/error.php'; comprobarAcceso(); ?>

<div class="container">
    <div class="row">
        <h1>Revisar pedido</h1>
    </div>

    <br><br>
    
    <div class="row">
        <div class="col-md-12 col-lg-6">
            <?php
                echo "<h4>Folio: $idSolicitud </h4>";
                echo "<br>";
            ?>

            <table class="table table-sm table-hover table-dark">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Piezas solicitadas</th>
                        <th>Inventario</th>
                        <th>Completo</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($solicitudes as $req) { ?>
                        <tr>
                            <td> <?php echo $req['producto'] ?> </td>
                            <td class="text-center"> <?php echo $req['piezasSolicitadas'] ?> </td>
                            <td class="text-center"> <?php echo $req['piezas'] ?> </td>
                            <td class="text-center">
                                <?php if ($req['piezas'] > $req['piezasSolicitadas']) { ?> 
                                    <span class="material-icons"> check </span> 
                                <?php  } else { ?> 
                                    <span class="material-icons"> close </span> 
                                <?php } ?>
                            </td>
                                <?php } ?>
                        </tr>
                </tbody>
            </table>
        </div>
        
        <br><br>

        <div class="col-md-12 col-lg-6">
            
            <div class="col-12 text-center">
                <h4>Confirmar pedido</h4>
                <br>
            </div>

            <form action="?controller=movimientoConsumibles&&action=actualizarSolicitudes" method="POST">

                <input type="hidden" name="idSolicitudes" id="idSolicitudes" value="<?php echo $idSolicitud ?>">
                <!-- <input type="hidden" name="idLugarTrabajo" id="idLugarTrabajo" value="<?php echo $idLugarTrabajo ?>"> -->
                
                <?php foreach ($solicitudes as $req) { ?>
                    <?php if ($req['piezas'] > $req['piezasSolicitadas'] ) {  ?>


                    <label for="producto">  <?php echo $req['producto'] . " (solicitado: " .  $req['piezasSolicitadas'] . ")" ?> </label>
                    <div class="row">
                        <div class="col">
                            <input  class="form-control form-control-sm" type="hidden" name="mov[<?php echo $req['idMovimientoConsumibles']?>][producto]" id="mov[<?php echo $req['idMovimientoConsumibles']?>][producto]" value="<?php echo $req['idPapeleria'] ?>">
                            <input  class="form-control form-control-sm" type="hidden" name="mov[<?php echo $req['idMovimientoConsumibles']?>][piezasSolicitadas]" id="mov[<?php echo $req['idMovimientoConsumibles']?>][producto]" value="<?php echo $req['piezasSolicitadas'] ?>">
                            <input  class="form-control form-control-sm" type="text" name="mov[<?php echo $req['idMovimientoConsumibles']?>][piezas]" id="mov[<?php echo $req['idMovimientoConsumibles']?>][piezas]" placeholder="ingresar piezas" required>
                        
                            <?php if ($req['folio'] == 1) {  ?>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <input  class="form-control form-control-sm" type="text" name="mov[<?php echo $req['idMovimientoConsumibles']?>][folioInicial]" id="mov[<?php echo $req['idMovimientoConsumibles']?>][folioInicial]" placeholder="ingresar folio inicial" required>
                                    </div>
                                    <div class="col">
                                        <input  class="form-control form-control-sm" type="text" name="mov[<?php echo $req['idMovimientoConsumibles']?>][folioFinal]" id="mov[<?php echo $req['idMovimientoConsumibles']?>][folioFinal]" placeholder="ingresar folio final " required>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                    <br>
                
                
                    <?php } ?>
                <?php } ?>

                <br>
                <button type="submit" class="btn btn-primary btn-block"> Enviar Papeleria </button>
                <br><br>
            </form>
        </div>
    </div>

</div>
