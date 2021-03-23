<?php require_once './views/error.php'; comprobarAcceso(); ?>
<?php date_default_timezone_set("America/Mexico_City"); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-6">

            <h2> Tipo de solicitud</h2>
            <br>

            <form action="?controller=solicitudes&&action=crearSolicitudes&idSolicitudes=<?php echo $_SESSION["user_id"] ?>" method="POST">

                <input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $_SESSION["user_id"] ?>">
                
                <div class="form-group row">
                    <label class="col-3 col-form-label" for="idTipoPapeleria"> Tipo </label>
                    <div class="col-9">
                        <select class="form-control form-control-sm" name="idTipoPapeleria" id="idTipoPapeleria">
                            <option selected value="0"> - seleccionar - </option>
                            <?php foreach ($tipos as $tipo) { ?>
                                <option value="<?php echo $tipo[0] ?>"><?php echo $tipo[0].". ". $tipo[1] ?></option>
                                <?php } ?>
                        </select>
                    </div>
                </div>
                
                <input type="hidden" name="fechaSolicitud" id="fechaSolicitud" value="<?php echo date("Y/m/d h:i:s") ?>">
                <input type="hidden" name="idRastreo" id="idRastreo" value="<?php echo '1' ?>">

                <button type="submit" class="btn btn-primary btn-block"> Realizar movimiento </button>
                <br><br>

            </form>
        </div>

        <div class="col-6 text-justify">
            <h5 class="font-weight-bold">Instrucciones:</h5>
            <h6>
                Ingresa el tipo de solicitud que deseas generar <br><br>
                <span class="font-weight-bold">Papelería Oficina</span> para solicitar: plumas, grapas, cuadernos, folders, etc. <br><br>
                <span class="font-weight-bold">Papelería Impresa</span> para solicitar: cortes de caja, checlist de prendas, vales de sastrería, etc. <br><br>
        
            </h6>
        </div>

    </div>
</div>