<?php require_once './views/error.php'; comprobarAcceso(); ?> 
 
<div class="table text-center"> 

    <div class="row">
        <div class="col-8">
            <h2 class="text-left"> Proveedores </h2>
        </div>
        <div class="col-4">
            <a class="btn btn-primary btn-block" href='?controller=proveedores&action=formularioProveedores'>
                Ingresar nuevo proveedor
            </a> 
        </div>
    </div>

    <br>
     
    <table class="table table-sm table-hover table-dark"> 
        <thead> 
            <tr> 
                <th>Id Proveedores</th> 
                <th>Razón Social</th> 
                <th>RFC</th> 
                <th>Dirección</th> 
            </tr> 
        </thead> 
 
        <tbody> 
            <?php foreach($proveedores as $ver) { ?> 
                <tr> 
                    <td> <?php echo $ver->getidProveedores() ?> </td> 
                    <td> <?php echo $ver->getrazonSocial() ?> </td> 
                    <td> <?php echo $ver->getrfc() ?> </td> 
                    <td> <?php echo $ver->getdireccion() ?> </td> 
            <?php } ?> 
                </tr> 
        </tbody> 
    </table> 
</div> 
