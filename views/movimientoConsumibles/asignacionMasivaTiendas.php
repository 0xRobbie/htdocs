<?php require_once './views/error.php'; comprobarAcceso(); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h4> Asignación Producto a Sucursales </h4>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="?controller=movimientoConsumibles&&action=asignacionMasivaT" method="POST">
                
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="elemento"> Producto </label>
                            <select class="form-control" name="idProductos" id="idProductos">
                                <?php foreach ($productos as $producto) { ?>
                                    <option value="<?php echo $producto[0] ?>"><?php echo $producto[0].". ". $producto[1] ?></option>
                                    <?php } ?>
                            </select>
                        </div>
                    </div>
    
                </div>
                
                <br><br>

                <label for="elemento"> Lugar de trabajo </label>
                <br>
                <?php $contador = 1; ?>
                <?php foreach($lugaresTrabajo as $lugar) { ?>
                    <?php if ($contador == 1) { echo "<div class=\"row\">"; } ?>
                        <div class="col-3">
                            <input type="checkbox" name="mov[<?php echo $lugar['idLugarTrabajo'] ?>][lugarTrabajo]" id="<?php echo $lugar['idLugarTrabajo'] ?>" value="<?php echo $lugar['idLugarTrabajo'] ?>">
                            <label style="font-size:small" for="<?php echo $lugar['idLugarTrabajo'] ?>"><?php echo $lugar['departamento'] . $lugar['sucursal'] ?></label>
                            <input class="form-control form-control-sm" type="text" name="mov[<?php echo $lugar['idLugarTrabajo'] ?>][piezas]" id="mov[<?php echo $lugar['idLugarTrabajo'] ?>][piezas]" placeholder="piezas">
                            <br>
                        </div>
                    <?php if ($contador == 4) { echo "</div>";  $contador = 0; } ?>
                    <?php $contador++; ?>
                <?php } ?>
                <?php if (count($lugaresTrabajo) % 4 > 0) { echo "</div>"; } ?>
                
                <br>
                <button type="submit" class="btn btn-primary btn-block"> Realizar movimiento </button>
                <br><br>
                
            </form>
        </div>
    </div>
</div>