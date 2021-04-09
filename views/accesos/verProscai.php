<?php require_once './views/error.php'; comprobarAcceso(); ?> 


<div class="container">
    <div class="row">
        <h1> Buscar Usuarios </h1>

        <input type="text" id="myInput" onkeyup="accesos()" placeholder="Buscar...">

        <div class="table-responsive table-sm text-center"> 
                <table id="myTable" class="table table-bordered table-hover"> 
                    <thead> 
                        <tr> 
                            <th>id</th> 
                            <th>usuarios</th> 
                            <th>Servidor</th> 
                            <th>ServidorPass</th> 
                            <th>Proscai</th> 
                            <th>ProscaiPass</th> 
                            <th>Usuario Seg.</th> 
                            <th>Clave Seg.</th> 
                        </tr> 
                    </thead> 
                    
                    <tbody> 
                        <?php foreach($accesos as $ver) { ?> 
                            <tr> 
                                <td> <?php echo $ver['idAccesos'] ?> </td> 
                                <td> <?php echo $ver['usuario'] ?> </td> 
                                <td> <?php echo $ver['servProscai'] ?> </td> 
                                <td> <?php echo $ver['servProscaiPass'] ?> </td> 
                                <td> <?php echo $ver['proscai'] ?> </td> 
                                <td> <?php echo $ver['proscaiPass'] ?> </td> 
                                <td> <?php echo $ver['usuarioSeguridad'] ?> </td> 
                                <td> <?php echo $ver['usuarioSeguridadPass'] ?> </td> 
                        <?php } ?> 
                            </tr> 
                    </tbody> 
                </table> 
            </div> 

    </div>
</div>



