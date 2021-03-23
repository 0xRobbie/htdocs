<?php require_once './views/error.php'; comprobarAcceso(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-6">

            <h2> Ingresar ProductoNuevo</h2>
            <br>

            <form action="?controller=productonuevo&&action=crearProductoNuevo" method="POST">

                <div class="form-group row">
                    <label class="col-3 col-form-label" for="idProductoNuevo"> idProductoNuevo </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name="idProductoNuevo" id="idProductoNuevo" placeholder="idProductoNuevo" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label" for=" producto">  producto </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name=" producto" id=" producto" placeholder=" producto" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label" for=" piezas">  piezas </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name=" piezas" id=" piezas" placeholder=" piezas" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label" for=" uso">  uso </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name=" uso" id=" uso" placeholder=" uso" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label" for=" idUsuarios">  idUsuarios </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name=" idUsuarios" id=" idUsuarios" placeholder=" idUsuarios" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block"> Ingresar datos </button>
                <br><br>

            </form>
        </div>
    </div>
</div>
