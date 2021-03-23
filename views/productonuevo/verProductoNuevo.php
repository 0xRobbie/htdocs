<?php require_once './views/error.php'; comprobarAcceso(); ?> 
 
<div class="table text-center"> 
     
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="text-left"> ProductoNuevo </h2>
        </div>
        <div class="col-4">
            <a class="btn btn-primary btn-block" href='?controller=productonuevo&action=formularioProductoNuevo'>
                Crear productonuevo
            </a> 
        </div>
    </div>
    <br>
</div>
    <table class="table table-sm table-hover table-light"> 
        <thead class="thead-dark"> 
            <tr> 
                <th>idProductoNuevo</th> 
                <th>producto</th> 
                <th>piezas</th> 
                <th>uso</th> 
                <th>idUsuarios</th> 
                <th>Actualizar</th>
                <th>Borrar</th>
            </tr> 
        </thead> 
 
        <tbody> 
            <?php foreach($productonuevo as $ver) { ?> 
                <tr> 
                    <td> <?php echo $ver->getidProductoNuevo() ?> </td> 
                    <td> <?php echo $ver->getproducto() ?> </td> 
                    <td> <?php echo $ver->getpiezas() ?> </td> 
                    <td> <?php echo $ver->getuso() ?> </td> 
                    <td> <?php echo $ver->getidUsuarios() ?> </td> 
                    <td> 
                         <a class="btn btn-primary btn-block" href='?controller=productonuevo&action=actualizarProductoNuevo&idProductoNuevo=<?php echo $ver->getidProductoNuevo() ?>'> 
                             <span class="material-icons"> create </span>
                         </a> 
                    </td>
                    <td> 
                         <a class="btn btn-danger btn-block" onclick="return confirm('¿Seguro que quiere eliminar el registro?')" href='?controller=productonuevo&action=borrarProductoNuevo&idProductoNuevo=<?php echo $ver->getidProductoNuevo() ?>'> 
                             <span class="material-icons"> close </span>
                         </a> 
                    </td>
            <?php } ?> 
                </tr> 
        </tbody> 
    </table> 
</div> 
