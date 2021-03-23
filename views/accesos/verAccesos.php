<?php require_once './views/error.php'; comprobarAcceso(); ?> 


<div class="container">
    <div class="row">
        <h1> Buscar Usuarios </h1>

        <input type="text" id="myInput" onkeyup="accesos()" placeholder="Buscar...">

        <div class="table-responsive text-center"> 
                <table id="myTable" class="table tinyFont table-striped table-light"> 
                    <thead> 
                        <tr> 
                            <th>id</th> 
                            <th>usuarios</th> 
                            <th>correo</th> 
                            <th>idDominio</th> 
                            <th>correoPass</th> 
                            <th>equipo</th> 
                            <th>skype</th> 
                            <th>skypePass</th> 
                            <th>servProscai</th> 
                            <th>servProscaiPass</th> 
                            <th>proscai</th> 
                            <th>proscaiPass</th> 
                            <th>usuarioSeguridad</th> 
                            <th>usuarioSeguridadPass</th> 
                        </tr> 
                    </thead> 
                    
                    <tbody> 
                        <?php foreach($accesos as $ver) { ?> 
                            <tr> 
                                <td> <?php echo $ver['idAccesos'] ?> </td> 
                                <td> <?php echo $ver['usuario'] ?> </td> 
                                <td> <?php echo $ver['correo'] ?> </td> 
                                <td> <?php echo $ver['idDominio'] ?> </td> 
                                <td> <?php echo $ver['correoPass'] ?> </td> 
                                <td> <?php echo $ver['equipo'] ?> </td> 
                                <td> <?php echo $ver['skype'] ?> </td> 
                                <td> <?php echo $ver['skypePass'] ?> </td> 
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



