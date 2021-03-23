<?php require_once './views/error.php'; comprobarAcceso(); ?> 
 
<div class="table text-center"> 
    
    <div class="row">
        <div class="col-8">
            <h2 class="text-left"> Facturas </h2>
        </div>
        <div class="col-4">
            <a class="btn btn-primary btn-block" href='?controller=emisionFactura&action=formularioEmisionFactura'>
                Ingresar nueva factura
            </a> 
        </div>
    </div>

    <br>

    <table class="table table-sm table-hover table-dark"> 
        <thead> 
            <tr> 
                <th>Id Factura</th> 
                <th>Folio</th> 
                <th>Fecha</th> 
            </tr> 
        </thead> 
 
        <tbody> 
            <?php foreach($emisionfactura as $ver) { ?> 
                <tr> 
                    <td> <?php echo $ver->getidFactura() ?> </td> 
                    <td> <?php echo $ver->getfolio() ?> </td> 
                    <td> <?php echo $ver->getfecha() ?> </td> 
            <?php } ?> 
                </tr> 
        </tbody> 
    </table> 
</div> 
