<?php require_once './views/error.php'; comprobarAcceso(); ?>
    
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Resumen por Regiones</h2>
            <br><br>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">

        <!-- SECCIÓN SUCURSALES -->
        <div class="col-2">
            <div class="row">
                <div class="col-12">
                    <h5>Sucursales</h5>
                </div>
            </div>

            <div class="font-sm2">
                <div class="table">
                    <table class="table table-sm table-striped table-bordered table-dark">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Sucursal</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php $control = 10; ?>
                            
                            <?php foreach($sucursales as $sucursal) { ?>
                                <tr>
                                    <td> <?php echo $sucursal['identificador'] ?> </td>
                                    <td> <?php echo $sucursal['sucursal'] ?> </td>
                            <?php } ?>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <!-- SECCIÓN DE REGIONES -->
        <div class="col-6">
            <div class="row">
                <div class="col-12">
                    <h5>Región 1 & 2</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="font-sm1">
                        <div class="table-responsive">
                            <table class="table table-sm table-hover table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th> Producto </th>
                                        <th class="rotated-text" scope="col"><div><span> 12 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 28 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 61 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 63 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 66 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 76 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 57 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 58 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 59 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 60 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 65 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 72 </span></div></th>
                                        <th> Total </th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php foreach($region12 as $region) { ?>
                                        <tr>
                                            <td> <?php echo $region['producto'] ?> </td>
                                            <td> <?php echo $region['Irapuato'] ?> </td>
                                            <td> <?php echo $region['Queretaro'] ?> </td>
                                            <td> <?php echo $region['Parque Celaya'] ?> </td>
                                            <td> <?php echo $region['Morelia'] ?> </td>
                                            <td> <?php echo $region['Queretaro Centro'] ?> </td>
                                            <td> <?php echo $region['Outlet Queretaro'] ?> </td>
                                            <td> <?php echo $region['Aguascalientes'] ?> </td>
                                            <td> <?php echo $region['Villasunción'] ?> </td>
                                            <td> <?php echo $region['San Luis Sendero'] ?> </td>
                                            <td> <?php echo $region['San Luis Centro'] ?> </td>
                                            <td> <?php echo $region['Centro Max León'] ?> </td>
                                            <td> <?php echo $region['León Centro'] ?> </td>
                                            <td> <?php echo $region['Irapuato'] +
                                                            $region['Queretaro']  +
                                                            $region['Parque Celaya']  +
                                                            $region['Morelia']  +
                                                            $region['Queretaro Centro']  +
                                                            $region['Outlet Queretaro']  +
                                                            $region['Aguascalientes']  +
                                                            $region['Villasunción']  +
                                                            $region['San Luis Sendero']  +
                                                            $region['San Luis Centro']  +
                                                            $region['Centro Max León']  +
                                                            $region['León Centro'] ?> </td>
                                    <?php } ?>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-12">
                    <h5>Región 3 & 4</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="font-sm1">
                        <div class="table-responsive">
                            <table class="table table-sm table-hover table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th> Producto </th>
                                        <th class="rotated-text" scope="col"><div><span> 01 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 02 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 26 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 32 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 38 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 39 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 40 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 70 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 20 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 25 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 34 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 36 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 37 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 55 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 77 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 88 </span></div></th>
                                        <th> Total </th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php foreach($region34 as $region) { ?>
                                        <tr>
                                        <td> <?php echo $region['producto'] ?> </td>
                                        <td> <?php echo $region['Bolivar'] ?> </td>
                                        <td> <?php echo $region['1 de mayo'] ?> </td>
                                        <td> <?php echo $region['Vallejo'] ?> </td>
                                        <td> <?php echo $region['Plaza Satélite'] ?> </td>
                                        <td> <?php echo $region['Galerias Atizapan'] ?> </td>
                                        <td> <?php echo $region['Punta norte'] ?> </td>
                                        <td> <?php echo $region['Polanco'] ?> </td>
                                        <td> <?php echo $region['Plaza Tlalne'] ?> </td>
                                        <td> <?php echo $region['Cuernavaca'] ?> </td>
                                        <td> <?php echo $region['Tezontle'] ?> </td>
                                        <td> <?php echo $region['Estrellas'] ?> </td>
                                        <td> <?php echo $region['Toluca Centro'] ?> </td>
                                        <td> <?php echo $region['Acoxpa'] ?> </td>
                                        <td> <?php echo $region['La rosa'] ?> </td>
                                        <td> <?php echo $region['Cuicuilco'] ?> </td>
                                        <td> <?php echo $region['Antenas'] ?> </td>
                                        <td> <?php echo $region['Bolivar'] +
                                                        $region['1 de mayo'] +
                                                        $region['Vallejo'] +
                                                        $region['Plaza Satélite'] +
                                                        $region['Galerias Atizapan'] +
                                                        $region['Punta norte'] +
                                                        $region['Polanco'] +
                                                        $region['Plaza Tlalne'] +
                                                        $region['Cuernavaca'] +
                                                        $region['Tezontle'] +
                                                        $region['Estrellas'] +
                                                        $region['Toluca Centro'] +
                                                        $region['Acoxpa'] +
                                                        $region['La rosa'] +
                                                        $region['Cuicuilco'] +
                                                        $region['Antenas'] ?> </td>
                                        <?php } ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-12">
                    <h5>Región 5 & 7</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="font-sm1">
                        <div class="table-responsive">
                            <table class="table table-sm table-hover table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th> Producto </th>
                                        <th class="rotated-text" scope="col"><div><span> 15 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 03 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 06 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 09 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 13 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 17 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 24 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 30 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 71 </span></div></th>
                                        <th> Total </th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php foreach($region57 as $region) { ?>
                                        <tr>
                                        <td> <?php echo $region['producto'] ?> </td>
                                        <td> <?php echo $region['Lerma'] ?> </td>
                                        <td> <?php echo $region['Plaza del sol'] ?> </td>
                                        <td> <?php echo $region['Plaza rio'] ?> </td>
                                        <td> <?php echo $region['Niños heroes'] ?> </td>
                                        <td> <?php echo $region['Galerias Guadalajara'] ?> </td>
                                        <td> <?php echo $region['Outlet Guadalajara'] ?> </td>
                                        <td> <?php echo $region['Guadalajara Centro'] ?> </td>
                                        <td> <?php echo $region['Tlaquepaque'] ?> </td>
                                        <td> <?php echo $region['Plaza patria'] ?> </td>
                                        <td> <?php echo $region['Lerma'] +
                                                        $region['Plaza del sol'] +
                                                        $region['Plaza rio'] +
                                                        $region['Niños heroes'] +
                                                        $region['Galerias Guadalajara'] +
                                                        $region['Outlet Guadalajara'] +
                                                        $region['Guadalajara Centro'] +
                                                        $region['Tlaquepaque'] +
                                                        $region['Plaza patria'] ?> </td>
                                        <?php } ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-12">
                    <h5>Región 6</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="font-sm1">
                        <div class="table-responsive">
                            <table class="table table-sm table-hover table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th> Producto </th>
                                        <th class="rotated-text" scope="col"><div><span> 19 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 52 </span></div></th>
                                        <th> Total </th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php foreach($region6 as $region) { ?>
                                        <tr>
                                        <td> <?php echo $region['producto'] ?> </td>
                                        <td> <?php echo $region['Gran Sur'] ?> </td>
                                        <td> <?php echo $region['Luna Parc'] ?> </td>
                                        <td> <?php echo $region['Gran Sur'] +
                                                        $region['Luna Parc'] ?> </td>
                                        <?php } ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-12">
                    <h5>Región 8 & 9</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="font-sm1">
                        <div class="table-responsive">
                            <table class="table table-sm table-hover table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th> Producto </th>
                                        <th class="rotated-text" scope="col"><div><span> 05 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 07 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 08 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 64 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 04 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 10 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 14 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 18 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 21 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 23 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 33 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 35 </span></div></th>
                                        <th class="rotated-text" scope="col"><div><span> 75 </span></div></th>
                                        <th> Total </th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php foreach($region89 as $region) { ?>
                                        <tr>
                                        <td> <?php echo $region['producto'] ?> </td>
                                        <td> <?php echo $region['San Agustín'] ?> </td>
                                        <td> <?php echo $region['Morelos 1'] ?> </td>
                                        <td> <?php echo $region['Morelos 3'] ?> </td>
                                        <td> <?php echo $region['Anahuac'] ?> </td>
                                        <td> <?php echo $region['Aragon'] ?> </td>
                                        <td> <?php echo $region['Puebla centro'] ?> </td>
                                        <td> <?php echo $region['Pachuca'] ?> </td>
                                        <td> <?php echo $region['Ixtapaluca'] ?> </td>
                                        <td> <?php echo $region['Plaza dorada'] ?> </td>
                                        <td> <?php echo $region['Neza 1'] ?> </td>
                                        <td> <?php echo $region['Outlet Puebla'] ?> </td>
                                        <td> <?php echo $region['Neza Chedraui'] ?> </td>
                                        <td> <?php echo $region['Explanada Puebla'] ?> </td>
                                        <td> <?php echo $region['San Agustín'] +
                                                        $region['Morelos 1'] +
                                                        $region['Morelos 3'] +
                                                        $region['Anahuac'] +
                                                        $region['Aragon'] +
                                                        $region['Puebla centro'] +
                                                        $region['Pachuca'] +
                                                        $region['Ixtapaluca'] +
                                                        $region['Plaza dorada'] +
                                                        $region['Neza 1'] +
                                                        $region['Outlet Puebla'] +
                                                        $region['Neza Chedraui'] +
                                                        $region['Explanada Puebla'] ?> </td>
                                        <?php } ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        
        <!-- SECCIÓN DE SOLICITUDES -->
        <div class="col-4">
            <div class="row">
                <div class="col-12">
                    <h5>Solicitudes</h5>
                </div>
            </div>

            <div class="font-sm2">
                <div class="table">
                    <table class="table table-sm table-striped table-bordered table-dark">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Sol</th>
                                <th>Inv</th>
                                <th>DIF</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php $control = 10; ?>
                            
                            <?php foreach($solicitudes as $solicitud) { ?>
                                <tr>
                                    <td> <?php echo $solicitud['producto'] ?> </td>
                                    <td> <?php echo $solicitud['piezasSolicitadas'] ?> </td>
                                    <td> <?php echo $solicitud['piezas'] ?> </td>
                                    <td> <?php echo $solicitud['piezas'] - $solicitud['piezasSolicitadas'] ?> </td>
                            <?php } ?>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div>
