<?php require_once './views/error.php'; comprobarAcceso(); ?>
    
<div class="container">
    <div class="row">

        <div class="col">
            <h3>Actualizar datos:</h3>
            <form action="?controller=usuarios&&action=actualizar" method="POST">
                <input type="hidden" name="idUsuarios" name="idUsuarios" value="<?php echo $usuario->getidUsuarios() ?>" >
                
                <div class="form-group">
                    <label for="text">Nombre de Usuario:</label>
                    <input type="text" name="usuario" id="usuario" class="form-control" value="<?php echo $usuario->getusuario() ?>">
                </div>
                
                <!-- <div class="form-group">
                    <label for="text">Password: </label>
                    <input type="text" name="password" id="password" class="form-control" value="<?php echo $usuario->getpassword(); ?>">
                </div> -->
                
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



        <div class="col">
            <h3>Actualizar accesos:</h3>
            <table class="table table-sm table-striped table-light">
                <thead>
                    <tr>
                        <th>Servicio</th>
                        <th>Usuario</th>
                        <th>Password</th>
                        <th>Editar</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($accesos as $acceso) { ?>
                        <tr>
                            <td> <?php echo $acceso['servicio'] ?> </td>
                            <td> <?php echo $acceso['usuario'] ?> </td>
                            <td> <?php echo $acceso['password'] ?> </td>
                            <td> <button class="btn btn-success"><?php echo $acceso['idUsuarios'] ?></button>  </td>

                    <?php } ?>
                        </tr>
                </tbody>
            </table>
            
            <br>

                <h3>Actualizar teléfono:</h3>
            <?php if ( is_string($telefonos) ) { ?>
                <p> <?php echo $telefonos ?> </p>
            <?php } else { ?>
                <table class="table table-sm table-striped table-light">
                    <thead>
                        <tr>
                            <th>Teléfono</th>
                            <th>Extension</th>
                            <th>Editar</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($telefonos as $telefono) { ?>
                            <tr>
                                <td> <?php echo $telefono['numero'] ?> </td>
                                <td> <?php echo $telefono['extension'] ?> </td>
                                <td> <button class="btn btn-warning"><?php echo $telefono['idTelefonia'] ?></button>  </td>
                        <?php } ?>
                            </tr>
                    </tbody>
                </table>

            <?php } ?>

        </div> 
    
    </div>
</div>
