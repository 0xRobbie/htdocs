<?php require_once './views/error.php'; comprobarAcceso(); ?> 
 
<div class="table text-center"> 
     
    <table class="table table-sm table-striped table-light"> 
        <thead> 
            <tr> 
                <th>idLugarTrabajo</th> 
                <th>idDepartamentos</th> 
                <th>idSucursales</th> 
            </tr> 
        </thead> 
 
        <tbody> 
            <?php foreach($lugartrabajo as $ver) { ?> 
                <tr> 
                    <td> <?php echo $ver['idLugarTrabajo'] ?> </td> 
                    <td> <?php echo $ver['idDepartamentos'] . " " . $ver['departamento'] ?> </td> 
                    <td> <?php echo $ver['idSucursales'] . " " . $ver['sucursal'] ?> </td> 
            <?php } ?> 
                </tr> 
        </tbody> 
    </table> 
</div> 
