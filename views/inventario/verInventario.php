<?php require_once './views/error.php'; comprobarAcceso(); ?> 
 
<div class="table text-center"> 
     
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="text-left"> Inventario </h2>
        </div>
        <div class="col-4">
            <a class="btn btn-primary btn-block" href='?controller=inventario&action=formularioInventario'>
                Crear inventario
            </a> 
        </div>
    </div>
    <br>
</div>

    <table class="table table-sm table-hover table-light"> 
        <thead class="thead-dark"> 
            <tr> 
                <th>idInventario</th> 
                <th>piezas</th> 
                <th>idLugarTrabajo</th> 
                <th>idPapeleria</th> 
                <th>Actualizar</th>
                <th>Borrar</th>
            </tr> 
        </thead> 
 
        <tbody> 
            <?php foreach($inventario as $ver) { ?> 
                <tr> 
                    <td> <?php echo $ver->getidInventario() ?> </td> 
                    <td> <?php echo $ver->getpiezas() ?> </td> 
                    <td> <?php echo $ver->getidLugarTrabajo() ?> </td> 
                    <td> <?php echo $ver->getidPapeleria() ?> </td> 
                    <td> 
                         <a class="btn btn-primary btn-block" href='?controller=inventario&action=actualizarInventario&idInventario=<?php echo $ver->getidInventario() ?>'> 
                             <span class="material-icons"> create </span>
                         </a> 
                    </td>
                    <td> 
                         <a class="btn btn-danger btn-block" onclick="return confirm('¿Seguro que quiere eliminar el registro?')" href='?controller=inventario&action=borrarInventario&idInventario=<?php echo $ver->getidInventario() ?>'> 
                             <span class="material-icons"> close </span>
                         </a> 
                    </td>
            <?php } ?> 
                </tr> 
        </tbody> 
    </table> 
</div> 
