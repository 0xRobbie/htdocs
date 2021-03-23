<?php require_once './views/error.php'; comprobarAcceso(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-6">

            <h2> Ingresar cotizacion</h2>
            <br>

            <form action="?controller=cotizacion&&action=crearcotizacion" method="POST">

                <div class="form-group row">
                    <label class="col-3 col-form-label" for="idCotizacion"> idCotizacion </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name="idCotizacion" id="idCotizacion" placeholder="idCotizacion" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label" for="idProveedores"> idProveedores </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name="idProveedores" id="idProveedores" placeholder="idProveedores" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label" for="idPapeleria"> idPapeleria </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name="idPapeleria" id="idPapeleria" placeholder="idPapeleria" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label" for="precio"> precio </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name="precio" id="precio" placeholder="precio" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label" for="entregaProgramada"> entregaProgramada </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name="entregaProgramada" id="entregaProgramada" placeholder="entregaProgramada" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block"> Ingresar datos </button>
                <br><br>

            </form>
        </div>
    </div>
</div>
