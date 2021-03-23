<?php require_once './views/error.php'; comprobarAcceso(); ?>

<div class="container">

    <div class="row">
        <div class="col-12">
            <h2>Cálculos Rápidos</h2>
            <br>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <h4>Descuentos</h4>
            
            <form action="">
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="text" class="form-control" id="precio" placeholder="Insertar precio">
                </div>

                <button type="button" onclick="calcular80()" class="btn btn-block btn-primary">Camisas y Pantalones 80</button>
                <button type="button" onclick="calcular66()" class="btn btn-block btn-primary">15% extra</button>
                <button type="button" onclick="calcular60()" class="btn btn-block btn-primary">60% descuento</button>
            </form>

            <p id="desc1"></p>
        </div>

        <div class="col-4">
            <h4>3 trajes x 4500</h4>

            <form action="">
                <div class="form-group">
                    <label for="precio1">Precio 1</label>
                    <input type="text" class="form-control" id="precio1" placeholder="Insertar precio">
                </div>
                <div class="form-group">
                    <label for="precio2">Precio 2</label>
                    <input type="text" class="form-control" id="precio2" placeholder="Insertar precio">
                </div>
                <div class="form-group">
                    <label for="precio3">Precio 3</label>
                    <input type="text" class="form-control" id="precio3" placeholder="Insertar precio">
                </div>

                <button type="button" onclick="tres4500()" class="btn btn-block btn-primary">3 * 4500</button>
                <button type="button" onclick="dos600()" class="btn btn-block btn-primary">2 * 600</button>
            </form>

            <p id="desc2"></p>
        </div>
    </div>
</div>


<script>

    function calcular80() {
        var precio = document.getElementById("precio").value;
        var res = r3precio(80, precio);
        document.getElementById("desc1").innerHTML = "80% = " + res;
    }

    function calcular66() {
        var precio = document.getElementById("precio").value;
        var res = r3precio(66, precio);
        document.getElementById("desc1").innerHTML = "66% = " + res;
    }

    function calcular60() {
        var precio = document.getElementById("precio").value;
        var res = r3precio(60, precio);
        document.getElementById("desc1").innerHTML = "60% = " + res;
    }

    function tres4500() {
        var p1 = document.getElementById("precio1").value;
        var p2 = document.getElementById("precio2").value;
        var p3 = document.getElementById("precio3").value;
        var valor = 4500 / 3;
        var v1 = r3porcentaje(p1, valor);
        var v2 = r3porcentaje(p2, valor);
        var v3 = r3porcentaje(p3, valor);
        var v4 = v1 + v2 + v3;
        document.getElementById("desc2").innerHTML = "%1 = " + v1 + "<br>" + "%2 = " + v2 + "<br>" + "%3 = " + v3 + "<br>" + "Sumatoria = " +  v4;
    }

    function dos600() {
        var p1 = document.getElementById("precio1").value;
        var p2 = document.getElementById("precio2").value;
        var valor = 600 / 2;
        var v1 = r3porcentaje(p1, valor);
        var v2 = r3porcentaje(p2, valor);
        var v4 = v1 + v2;
        document.getElementById("desc2").innerHTML = "%1 = " + v1 + "<br>" + "%2 = " + v2 + "<br>" + "Sumatoria = " +  v4;
    }

    function r3porcentaje(total, cantidad) {
        var res = total - (total * 100 / cantidad);
        return res;
    }

    function r3precio(porcentaje, cantidad) {
        var res = 100 - (porcentaje * cantidad / 100);
        return res;
    }


</script>