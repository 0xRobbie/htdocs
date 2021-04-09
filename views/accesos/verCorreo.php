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
                        <th>correo</th> 
                        <th>correoPass</th> 
                    </tr> 
                </thead> 
                
                <tbody> 
                    <?php foreach($accesos as $ver) { ?> 
                        <tr> 
                            <td> <?php echo $ver['idAccesos'] ?> </td> 
                            <td> <?php echo $ver['usuario'] ?> </td> 
                            <td> <?php echo $correo = $ver['idDominio'] == 1 ? $ver['correo'] . '@operadoradetrajes.com' : $ver['correo'] . '@vittorioforti.com.mx' ?> </td>
                            <td> <?php echo $ver['correoPass'] ?> </td> 
                    <?php } ?> 
                        </tr> 
                </tbody> 
            </table> 
        </div> 

    </div>
</div>



