<?php require_once './views/error.php'; comprobarAcceso(); ?>

<div class="container">
    <form action="?controller=movimientosinventario&&action=actualizar" method="POST">

        <input type="hidden" name="idInventario" id="idInventario" value="<?php echo $movimientosinventario->getidInventario() ?>" >

        <div class="form-group">
            <label for="text">idInventario:</label>
            <input type="text" name="idInventario" id="idInventario" class="form-control" value="<?php echo $movimientosinventario->getidInventario() ?>">
        </div>
        <div class="form-group">
            <label for="text"> piezas:</label>
            <input type="text" name=" piezas" id=" piezas" class="form-control" value="<?php echo $movimientosinventario->getpiezas() ?>">
        </div>
        <div class="form-group">
            <label for="text"> idLugarTrabajo:</label>
            <input type="text" name=" idLugarTrabajo" id=" idLugarTrabajo" class="form-control" value="<?php echo $movimientosinventario->getidLugarTrabajo() ?>">
        </div>
        <div class="form-group">
            <label for="text"> idPapeleria:</label>
            <input type="text" name=" idPapeleria" id=" idPapeleria" class="form-control" value="<?php echo $movimientosinventario->getidPapeleria() ?>">
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Actualizar MovimientosInventario </button>
    </form>
</div>
