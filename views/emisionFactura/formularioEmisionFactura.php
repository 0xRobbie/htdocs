<?php require_once './views/error.php'; comprobarAcceso(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-6">

            <h2> Ingresar nueva factura</h2>
            <br>

            <form action="?controller=emisionFactura&&action=crearEmisionFactura" method="POST">

                <!-- <div class="form-group row">
                    <label class="col-3 col-form-label" for="idFactura"> idFactura </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name="idFactura" id="idFactura" placeholder="idFactura" required>
                    </div>
                </div> -->

                <div class="form-group row">
                    <label class="col-3 col-form-label" for="folio"> Folio </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name="folio" id="folio" placeholder="folio" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label" for="fecha"> Fecha </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="date" name="fecha" id="fecha" placeholder="fecha" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block"> Ingresar datos </button>
                <br><br>

            </form>
        </div>
    </div>
</div>
