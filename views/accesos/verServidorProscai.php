<?php require_once './views/error.php'; comprobarAcceso(); ?> 


<div class="container">
    <div class="row">
        <h1> Buscar Usuarios </h1>

        <input type="text" id="myInput" onkeyup="accesos()" placeholder="Buscar...">

        <div class="table-responsive table-sm text-center"> 
                <table id="myTable" class="table table-bordered table-hover"> 
                    <thead> 
                        <tr> 
                            <th>usuarios</th> 
                            <th>Servidor</th> 
                            <th>password</th> 
                        </tr> 
                    </thead> 
                    
                    <tbody> 
                        <?php foreach($accesos as $ver) { ?> 
                            <tr> 
                                <td> <?php echo $ver['usuarios'] ?> </td> 
                                <td> <?php echo $ver['usuario'] ?> </td> 
                                <td> <?php echo $ver['password'] ?> </td> 
                        <?php } ?> 
                            </tr> 
                    </tbody> 
                </table> 
            </div> 

    </div>
</div>



