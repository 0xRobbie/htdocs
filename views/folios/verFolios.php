<?php require_once './views/error.php'; comprobarAcceso(); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Folios enviados</h2>
        </div>
    </div>
    <br>

    <div class="row">

        <?php  
            $productoAnterior = '';
            foreach($folios as $ver) { 
                if ( $productoAnterior != $ver['producto'] ) {
                    $productoAnterior = $ver['producto'];
        ?>

                <div class="col">
                    <div class="table text-center">
                        <h6 class="text-left"><?php echo $ver['producto'] ?></h6>
                        <table class="table table-striped table-light"> 
                            <thead> 
                                <tr> 
                                    <th>Folio Inicio</th> 
                                    <th>Folio Final</th> 
                                    <th>Sucursal</th> 
                                </tr> 
                            </thead> 
                    
                            <tbody> 
                                <?php foreach($folios as $ver) { ?> 
                                    <?php if ($productoAnterior == $ver['producto']) { ?> 
                                    <tr> 
                                        <td> <?php echo $ver['folioInicial'] ?> </td> 
                                        <td> <?php echo $ver['folioFinal'] ?> </td> 
                                        <td> <?php echo $ver['sucursal'] ?> </td> 
                                    <?php } ?> 
                                <?php } ?> 
                                    </tr> 
                            </tbody> 
                        </table> 
                    </div>
                </div>

        <?php  
                }
            }
        ?>




    </div>
</div>
 
