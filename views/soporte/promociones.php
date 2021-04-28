<?php require_once './views/error.php'; comprobarAcceso(); ?> 
    

    <div class="container">
        <div class="row">
            <h1> Promociones </h1>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar codigo...">
        </div>
    </div>

    <div class="row">

        <div class="col-4">
                            
            <h6 class="font-weight-bold">Temporadas</h6>
            <div class="row">
                <div class="col-4">
                    <p><span class="font-weight-bold">7J: </span>18</p>
                    <p><span class="font-weight-bold">7L: </span>19</p>
                </div>
                <div class="col-4">
                    <p><span class="font-weight-bold">7N: </span>20</p>
                    <p><span class="font-weight-bold">7O: </span>21</p>
                </div>
                <div class="col-4">
                    <p><span class="font-weight-bold">7K: </span>BA</p>
                </div>
            </div>
            <br>

            <h6 class="font-weight-bold">Trajes 3 X $ 4,500</h6>
            <p> Aplica en trajes con precio normal de etiqueta de $ 4,500. </p>
            <p> Aplica en trajes de temporada 18 y 19. </p>
            <p> Aplica en trajes de temporada 20, excepto los trajes de precio normal de etiqueta de $ 6,250 $ 6,500 y $ 7,500. </p>
            <p> Aplica en trajes con precio de etiqueta amarilla de $ 1,500.</p>
            
            <h6 class="font-weight-bold">CAMISAS 2 X 600</h6>
            <p> Aplica en camisas temporada básica con precio normal de etiqueta  $850, $975, $1000. </p>
            <p> Aplica en camisas temporada 19, 20 y 21 con precio normal de etiqueta de $1000.</p>

        </div>

        <div class="col-4">

            <h3>Trajes 3x4500</h3>
            <!-- 
            Restricción: 
            Aplica en trajes con precio normal de etiqueta de $ 4,500. 
            Aplica en trajes de temporada 18 y 19. 
            Aplica en trajes de temporada 20, excepto los trajes de precio normal de etiqueta de $ 6,250 $ 6,500 y $ 7,500. 
            Aplica en trajes con precio de etiqueta amarilla de $ 1,500. -->
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
                            <?php if ( $ver['precio'] == 999 ) { ?>
                            <?php } else { ?>
                            <tr> 
                                <td> <?php echo $ver['codigo'] ?> </td> 
                                <td> <?php echo $ver['precio'] ?> </td> 
                                <td> <?php echo $ver['linea'] ?> </td> 
                                <td> <?php echo $ver['temporada'] ?> </td> 
                            <?php } ?>
                        <?php } ?> 
                            </tr> 
                    </tbody> 
                </table> 
            </div> 
        </div>


        <div class="col-4">
            <h3>CAMISAS 2x600</h3>
            <!-- Restricción: 
            Aplica en camisas temporada básica con precio normal de etiqueta $850, $975, $1000. 
            Aplica en camisas temporada 19, 20 y 21 con precio normal de etiqueta de $1000. -->
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
