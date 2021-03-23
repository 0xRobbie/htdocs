<?php require_once './views/error.php'; comprobarAcceso(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-6">

            <h2> Ingresar MovimientosInventario</h2>
            <br>

            <form action="?controller=movimientosinventario&&action=crearMovimientosInventario" method="POST">

                <div class="form-group row">
                    <label class="col-3 col-form-label" for="idInventario"> idInventario </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name="idInventario" id="idInventario" placeholder="idInventario" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label" for=" piezas">  piezas </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name=" piezas" id=" piezas" placeholder=" piezas" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label" for=" idLugarTrabajo">  idLugarTrabajo </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name=" idLugarTrabajo" id=" idLugarTrabajo" placeholder=" idLugarTrabajo" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label" for=" idPapeleria">  idPapeleria </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name=" idPapeleria" id=" idPapeleria" placeholder=" idPapeleria" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block"> Ingresar datos </button>
                <br><br>

            </form>
        </div>
    </div>
</div>
