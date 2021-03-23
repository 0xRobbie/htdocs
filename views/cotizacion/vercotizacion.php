<?php require_once './views/error.php'; comprobarAcceso(); ?> 
 
<div class="table text-center"> 
     
    <table class="table table-striped table-light"> 
        <thead> 
            <tr> 
                <th>idCotizacion</th> 
                <th>idProveedores</th> 
                <th>idPapeleria</th> 
                <th>precio</th> 
                <th>entregaProgramada</th> 
            </tr> 
        </thead> 
 
        <tbody> 
            <?php foreach($cotizacion as $ver) { ?> 
                <tr> 
                    <td> <?php echo $ver['idCotizacion'] ?> </td> 
                    <td> <?php echo $ver['idProveedores'] ?> </td> 
                    <td> <?php echo $ver['idPapeleria'] ?> </td> 
                    <td> <?php echo $ver['precio'] ?> </td> 
                    <td> <?php echo $ver['entregaProgramada'] ?> </td> 
            <?php } ?> 
                </tr> 
        </tbody> 
    </table> 
</div> 
