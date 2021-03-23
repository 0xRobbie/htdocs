<?php require_once './views/error.php'; comprobarAcceso(); ?> 
    

    <div class="container">
        <div class="row">
            <h1> Promociones </h1>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar codigo...">
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <h3>CAMISAS 80%</h3>
            <div class="table-responsive text-center"> 
                <table id="myTable1" class="table tinyFont table-striped table-light"> 
                    <thead> 
                        <tr> 
                            <th>codigo</th> 
                            <th>$</th> 
                            <th>TIPO</th> 
                            <th>TEMP</th> 
                        </tr> 
                    </thead> 
                    
                    <tbody> 
                        <?php foreach($camisas80 as $ver) { ?> 
                            <tr> 
                                <td> <?php echo $ver['codigo'] ?> </td> 
                                <td> <?php echo $ver['precio'] ?> </td> 
                                <td> <?php echo $ver['linea'] ?> </td> 
                                <td> <?php echo $ver['temporada'] ?> </td> 
                        <?php } ?> 
                            </tr> 
                    </tbody> 
                </table> 
            </div> 
        </div>

        <div class="col-3">
            <h3>PANTALONES 80%</h3>
            <div class="table-responsive text-center"> 
                <table id="myTable2" class="table tinyFont table-striped table-light"> 
                    <thead> 
                        <tr> 
                            <th>codigo</th> 
                            <th>$</th> 
                            <th>TIPO</th> 
                            <th>TEMP</th> 
                        </tr> 
                    </thead> 
                    
                    <tbody> 
                        <?php foreach($pantalones80 as $ver) { ?> 
                            <tr> 
                                <td> <?php echo $ver['codigo'] ?> </td> 
                                <td> <?php echo $ver['precio'] ?> </td> 
                                <td> <?php echo $ver['linea'] ?> </td> 
                                <td> <?php echo $ver['temporada'] ?> </td> 
                        <?php } ?> 
                            </tr> 
                    </tbody> 
                </table> 
            </div> 
        </div>

        <div class="col-3">
            <h3>Trajes 3x4500</h3>
            <div class="table-responsive text-center"> 
                <table id="myTable3" class="table tinyFont table-striped table-light"> 
                    <thead> 
                        <tr> 
                            <th>codigo</th> 
                            <th>$</th> 
                            <th>TIPO</th> 
                            <th>TEMP</th> 
                        </tr> 
                    </thead> 
                    
                    <tbody> 
                        <?php foreach($trajes3x4500 as $ver) { ?> 
                            <tr> 
                                <td> <?php echo $ver['codigo'] ?> </td> 
                                <td> <?php echo $ver['precio'] ?> </td> 
                                <td> <?php echo $ver['linea'] ?> </td> 
                                <td> <?php echo $ver['temporada'] ?> </td> 
                        <?php } ?> 
                            </tr> 
                    </tbody> 
                </table> 
            </div> 
        </div>

        <div class="col-3">
            <h3>CAMISAS 2x600</h3>
            <div class="table-responsive text-center"> 
                <table id="myTable4" class="table tinyFont table-striped table-light"> 
                    <thead> 
                        <tr> 
                            <th>codigo</th> 
                            <th>$</th> 
                            <th>TIPO</th> 
                            <th>TEMP</th> 
                        </tr> 
                    </thead> 
                    
                    <tbody> 
                        <?php foreach($camisas2x600 as $ver) { ?> 
                            <tr> 
                                <td> <?php echo $ver['codigo'] ?> </td> 
                                <td> <?php echo $ver['precio'] ?> </td> 
                                <td> <?php echo $ver['linea'] ?> </td> 
                                <td> <?php echo $ver['temporada'] ?> </td> 
                        <?php } ?> 
                            </tr> 
                    </tbody> 
                </table> 
            </div> 
        </div>



    
    
    </div>



