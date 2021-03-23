<?php require_once './views/error.php'; comprobarAcceso(); ?> 
 
<div class="table text-center"> 
     
    <table class="table table-striped table-light"> 
        <thead> 
            <tr> 
                <th>idProductosFactura</th> 
                <th>clave</th> 
                <th>descripcion</th> 
            </tr> 
        </thead> 
 
        <tbody> 
            <?php foreach($productosfactura as $ver) { ?> 
                <tr> 
                    <td> <?php echo $ver['idProductosFactura'] ?> </td> 
                    <td> <?php echo $ver['clave'] ?> </td> 
                    <td> <?php echo $ver['descripcion'] ?> </td> 
            <?php } ?> 
                </tr> 
        </tbody> 
    </table> 
</div> 
