<?php
  if (!isset($_SESSION["user_lugar"])) {
    $_SESSION["user_lugar"] = '0';
  }
?>
  
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">

    <?php if ( isset($_SESSION["user_id"]) ) { ?>
      <a class="navbar-brand" href="?controller=accesos&action=menuSistemas"> Dashboard </a>
    <?php } else if ( isset($_SESSION["user_id"]) ) { ?>
      <a class="navbar-brand" href="?controller=accesos&action=menuSucursales"> Dashboard </a>
    <?php } ?>
    

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">



            <!-- MENU SUCURSALES Y DEPARTAMENTOS -->
            <?php if ( $_SESSION["user_lugar"] != '0' && $_SESSION["user_lugar"] != '58' && $_SESSION["user_lugar"] != '59' ) { ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Menú
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="?controller=solicitudes&action=verSolicitudes&idSolicitudes=<?php echo $_SESSION["user_id"] ?>">Solicitar papeleria</a>
            <!-- <?php if ( $_SESSION["user_lugar"] == 1) { ?>
                  <a class="dropdown-item" href="?controller=sucursales&action=verInventarioSistemas">Inventario papeleria</a>
            <?php } else { ?>
                  <a class="dropdown-item" href="?controller=sucursales&action=verInventarioSucursal&lugar=<?php echo $_SESSION["user_lugar"] ?>">Inventario papeleria</a>
            <?php } ?> -->
                  <!-- <a class="dropdown-item" href="?controller=movimientoConsumibles&action=materialOcupado&sucursal=<?php echo $_SESSION["user_lugar"] ?>">Actualizar Inventario</a> -->
                </div>
              </li>
            <?php } ?>
            


            <!-- MENU SISTEMAS -->
            <?php if ( isset($_SESSION["user_id"]) ) { ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Usuarios
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="?controller=usuarios&action=verUsuarios">Usuarios</a>
                  <a class="dropdown-item" href="?controller=sucursales&action=verSucursales">Sucursales</a>
                  <a class="dropdown-item" href="?controller=departamentos&action=verDepartamentos">Departamentos</a>
                  <a class="dropdown-item" href="?controller=lugartrabajo&action=verLugarTrabajo">Lugar de trabajo</a>
                </div>
              </li>

              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Papeleria
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="?controller=movimientoConsumibles&action=verTotalSolicitudes">Atender Solicitudes</a>
                  <a class="dropdown-item" href="?controller=sucursales&action=verInventarioSucursales">Inventario Sucursales</a>
                  <a class="dropdown-item" href="?controller=folios&action=verFolios">Ver Folios</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="?controller=movimientoConsumibles&action=verMovimientoConsumibles">Realizar Movimientos</a>
                  <a class="dropdown-item" href="?controller=papeleria&action=verPapeleria">Ver Productos</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Facturación
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="?controller=emisionFactura&action=verEmisionFactura">Facturas</a>
                  <a class="dropdown-item" href="?controller=proveedores&action=verProveedores">Proveedores</a>
                  <a class="dropdown-item" href="?controller=cotizaciones&action=verCotizaciones">Cotizaciones</a>
                </div>
              </li> -->

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Productos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="?controller=tipoProducto&action=verTipoProducto">Ver Productos</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Support Tools
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="?controller=soporte&action=calculosRapidos">Cálculos Rápidos</a>
                  <a class="dropdown-item" href="?controller=soporte&action=promociones">Promociones</a>
                  <a class="dropdown-item" href="?controller=soporte&action=hojasTecnicas">Hojas Técnicas</a>
                  <a class="dropdown-item" href="?controller=soporte&action=documentos">Documentos</a>
                  <!-- <a class="dropdown-item" href="?controller=soporte&action=verFolios">Ver Folios</a> -->
                </div>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Accesos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="?controller=accesos&action=verAccesosProscai">Proscai</a>
                  <a class="dropdown-item" href="?controller=accesos&action=verAccesosCorreo">Correo</a>
                  <a class="dropdown-item" href="?controller=accesos&action=verAccesosSkype">Skype</a>
                  <a class="dropdown-item" href="?controller=accesos&action=verAccesosServidorProscai">Servidor Proscai</a>
                  <a class="dropdown-item" href="?controller=accesos&action=verAccesosProscaiSeguridad">Seguridad Proscai</a>
                  <!-- <a class="dropdown-item" href="?controller=accesos&action=verAccesosEquipos">Equipos</a> -->
                  <!-- <a class="dropdown-item" href="?controller=servicio&action=verServicio">Admin servicios</a> -->
                </div>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle disabled" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dispositivos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="?controller=claves&action=verClaves">Dashboard equipos</a>
                  <a class="dropdown-item" href="?controller=servicio&action=verServicio">Inventario equipos</a>
                  <a class="dropdown-item" href="?controller=servicio&action=verServicio">Asignar equipos</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="?controller=servicio&action=verServicio">Impresoras</a>
                  <a class="dropdown-item" href="?controller=servicio&action=verServicio">Insumos</a>
                </div>
              </li> -->
            <?php } ?>
          </ul>
            

          <?php if ( isset($_SESSION["user_id"]) ) { ?>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="?controller=acceso&action=logout">cerrar sesion</a>
              </li>
            </ul>
        <?php } ?>

    </div>
  </nav>

  <br><br>
