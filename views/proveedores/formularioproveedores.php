<?php require_once './views/error.php'; comprobarAcceso(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-6">

            <h2> Ingresar proveedores</h2>
            <br>

            <form action="?controller=proveedores&&action=crearProveedores" method="POST">

                <!-- <div class="form-group row">
                    <label class="col-3 col-form-label" for="idProveedores"> Id Proveedores </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name="idProveedores" id="idProveedores" placeholder="idProveedores" required>
                    </div>
                </div> -->

                <div class="form-group row">
                    <label class="col-3 col-form-label" for="razonSocial"> Razón Social </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name="razonSocial" id="razonSocial" placeholder="razonSocial" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label" for="rfc"> RFC </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name="rfc" id="rfc" placeholder="rfc" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label" for="direccion"> Dirección </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name="direccion" id="direccion" placeholder="direccion" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block"> Ingresar datos </button>
                <br><br>

            </form>
        </div>
    </div>
</div>
