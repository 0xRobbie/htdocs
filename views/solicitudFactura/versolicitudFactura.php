<?php require_once './views/error.php'; comprobarAcceso(); ?> 
 
<div class="table text-center"> 
     
    <table class="table table-striped table-light"> 
        <thead> 
            <tr> 
                <th>idSolicitudFactura</th> 
                <th>piezas</th> 
                <th>precioUnitario</th> 
                <th>idProductosFactura</th> 
                <th>idFactura</th> 
                <th>idProveedores</th> 
            </tr> 
        </thead> 
 
        <tbody> 
            <?php foreach($solicitudfactura as $ver) { ?> 
                <tr> 
                    <td> <?php echo $ver['idSolicitudFactura'] ?> </td> 
                    <td> <?php echo $ver['piezas'] ?> </td> 
                    <td> <?php echo $ver['precioUnitario'] ?> </td> 
                    <td> <?php echo $ver['idProductosFactura'] ?> </td> 
                    <td> <?php echo $ver['idFactura'] ?> </td> 
                    <td> <?php echo $ver['idProveedores'] ?> </td> 
            <?php } ?> 
                </tr> 
        </tbody> 
    </table> 
</div> 
