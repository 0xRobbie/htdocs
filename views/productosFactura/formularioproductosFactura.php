<?php require_once './views/error.php'; comprobarAcceso(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-6">

            <h2> Ingresar productosFactura</h2>
            <br>

            <form action="?controller=productosfactura&&action=crearproductosFactura" method="POST">

                <div class="form-group row">
                    <label class="col-3 col-form-label" for="idProductosFactura"> idProductosFactura </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name="idProductosFactura" id="idProductosFactura" placeholder="idProductosFactura" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label" for="clave"> clave </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name="clave" id="clave" placeholder="clave" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label" for="descripcion"> descripcion </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name="descripcion" id="descripcion" placeholder="descripcion" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block"> Ingresar datos </button>
                <br><br>

            </form>
        </div>
    </div>
</div>
