<?php require_once './views/error.php'; comprobarAcceso(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-6">

            <h2> Ingresar homologarProductos</h2>
            <br>

            <form action="?controller=homologarproductos&&action=crearhomologarProductos" method="POST">

                <div class="form-group row">
                    <label class="col-3 col-form-label" for="idHomologarProductos"> idHomologarProductos </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name="idHomologarProductos" id="idHomologarProductos" placeholder="idHomologarProductos" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label" for="idPapeleria"> idPapeleria </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name="idPapeleria" id="idPapeleria" placeholder="idPapeleria" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label" for="idProductosFactura"> idProductosFactura </label>
                    <div class="col-9">
                        <input class="form-control form-control-sm" type="text" name="idProductosFactura" id="idProductosFactura" placeholder="idProductosFactura" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block"> Ingresar datos </button>
                <br><br>

            </form>
        </div>
    </div>
</div>
