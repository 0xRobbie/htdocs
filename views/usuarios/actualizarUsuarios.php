<?php require_once './views/error.php'; comprobarAcceso(); ?>
    
<div class="container">
    <form action="?controller=usuarios&&action=actualizar" method="POST">
        
        <input type="hidden" name="idUsuarios" name="idUsuarios" value="<?php echo $usuario->getidUsuarios() ?>" >
        
        <div class="form-group">
            <label for="text">Nombre de Usuario:</label>
            <input type="text" name="usuario" id="usuario" class="form-control" value="<?php echo $usuario->getusuario() ?>">
        </div>
        
        <div class="form-group">
            <label for="text">Password: </label>
            <input type="text" name="password" id="password" class="form-control" value="<?php echo $usuario->getpassword(); ?>">
        </div>
        
        <div class="form-group">
            <label for="text">Lugar de Trabajo</label>
            <select class="form-control form-control-sm" name="idLugarTrabajo" id="idLugarTrabajo">
                <?php foreach ($lugaresTrabajo as $lugar) { ?>
                    <option value="<?php echo $lugar['idLugarTrabajo'] ?>"><?php echo $lugar['idLugarTrabajo'] . ". " . $lugar['departamento'] . $lugar['sucursal'] ?></option>
                <?php } ?>
            </select>
        </div>
        
        <br>

        <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
    </form>
</div>
