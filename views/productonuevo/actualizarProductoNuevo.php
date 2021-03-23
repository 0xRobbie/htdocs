<?php require_once './views/error.php'; comprobarAcceso(); ?>

<div class="container">
    <form action="?controller=productonuevo&&action=actualizar" method="POST">

        <input type="hidden" name="idProductoNuevo" id="idProductoNuevo" value="<?php echo $productonuevo->getidProductoNuevo() ?>" >

        <div class="form-group">
            <label for="text">idProductoNuevo:</label>
            <input type="text" name="idProductoNuevo" id="idProductoNuevo" class="form-control" value="<?php echo $productonuevo->getidProductoNuevo() ?>">
        </div>
        <div class="form-group">
            <label for="text"> producto:</label>
            <input type="text" name=" producto" id=" producto" class="form-control" value="<?php echo $productonuevo->getproducto() ?>">
        </div>
        <div class="form-group">
            <label for="text"> piezas:</label>
            <input type="text" name=" piezas" id=" piezas" class="form-control" value="<?php echo $productonuevo->getpiezas() ?>">
        </div>
        <div class="form-group">
            <label for="text"> uso:</label>
            <input type="text" name=" uso" id=" uso" class="form-control" value="<?php echo $productonuevo->getuso() ?>">
        </div>
        <div class="form-group">
            <label for="text"> idUsuarios:</label>
            <input type="text" name=" idUsuarios" id=" idUsuarios" class="form-control" value="<?php echo $productonuevo->getidUsuarios() ?>">
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Actualizar ProductoNuevo </button>
    </form>
</div>
