<?php require_once './views/error.php'; comprobarAcceso(); ?> 
 
<div class="table text-center"> 
     
    <table class="table table-striped table-light"> 
        <thead> 
            <tr> 
                <th>idHomologarProductos</th> 
                <th>idPapeleria</th> 
                <th>idProductosFactura</th> 
            </tr> 
        </thead> 
 
        <tbody> 
            <?php foreach($homologarproductos as $ver) { ?> 
                <tr> 
                    <td> <?php echo $ver['idHomologarProductos'] ?> </td> 
                    <td> <?php echo $ver['idPapeleria'] ?> </td> 
                    <td> <?php echo $ver['idProductosFactura'] ?> </td> 
            <?php } ?> 
                </tr> 
        </tbody> 
    </table> 
</div> 
