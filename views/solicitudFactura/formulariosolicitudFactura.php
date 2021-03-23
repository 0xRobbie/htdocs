<?php require_once './views/error.php'; comprobarAcceso(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-6">

            <h2> Ingresar solicitudFactura</h2>
            <br>

            <form action="?controller=solicitudfactura&&action=crearsolicitudFactura" method="POST">

                <div class="form-group row">
                    <label class="col-3 col-form-label" for="idSolicitudFactura"> idSolicitudFactura </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name="idSolicitudFactura" id="idSolicitudFactura" placeholder="idSolicitudFactura" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label" for="piezas"> piezas </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name="piezas" id="piezas" placeholder="piezas" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label" for="precioUnitario"> precioUnitario </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name="precioUnitario" id="precioUnitario" placeholder="precioUnitario" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label" for="idProductosFactura"> idProductosFactura </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name="idProductosFactura" id="idProductosFactura" placeholder="idProductosFactura" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label" for="idFactura"> idFactura </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name="idFactura" id="idFactura" placeholder="idFactura" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label" for="idProveedores"> idProveedores </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name="idProveedores" id="idProveedores" placeholder="idProveedores" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block"> Ingresar datos </button>
                <br><br>

            </form>
        </div>
    </div>
</div>
