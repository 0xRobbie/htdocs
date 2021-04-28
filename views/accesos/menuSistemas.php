<?php require_once './views/error.php'; comprobarAcceso(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h2>Dashboard Sistemas</h2>
            <br>
        </div>
        <div class="col-2">
            <p style="font-weight: bold"> <?php echo " Usuario: " . $usuario[0][0]; ?> </p>
            <p style="font-weight: bold"> <?php echo " Lugar de trabajo: " . $usuario[0][2] . $usuario[0][3]; ?> </p>
        </div>
    </div>
    
    <br>

    <!-- Accesos rápidos -->
    <div class="row my-2">
        <div class="col-12">
            <h4>Accesos rápidos</h4>
        </div>
    </div>

    <div class="row my-2">
        <div class="col-2"> 
            <a class="btn btn-primary btn-block" href="?controller=usuarios&action=verUsuarios"> 
            <span class="material-icons md-48">face</span> <br>
                Usuarios
            </a> 
        </div>
        <div class="col-2"> 
            <a class="btn btn-secondary btn-block" href="?controller=sucursales&action=verSucursales"> 
                <span class="material-icons md-48">store_mall_directory</span> <br>
                Sucursales 
            </a> 
        </div>
        <div class="col-2"> 
            <a class="btn btn-success btn-block" href="?controller=accesos&action=verAccesosProscai"> 
                <span class="material-icons md-48">point_of_sale</span> <br>
                Proscai 
            </a> 
        </div>
    </div>

    
    <div class="row my-2">
        <div class="col-2"> 
            <a class="btn btn-warning btn-block" href="?controller=soporte&action=calculosRapidos"> 
            <span class="material-icons md-48">fact_check</span> <br>
                Cálculos rápidos 
            </a> 
        </div>
        <div class="col-2"> 
            <a class="btn btn-danger btn-block" href="?controller=soporte&action=promociones"> 
                <span class="material-icons md-48">shopping_bag</span> <br>
                Promociones 
            </a> 
        </div>
        <div class="col-2"> 
            <a class="btn btn-primary btn-block" href="?controller=soporte&action=documentos"> 
                <span class="material-icons md-48">article</span> <br>
                Documentos 
            </a> 
        </div>
    </div>
   
    <br><br>

</div>