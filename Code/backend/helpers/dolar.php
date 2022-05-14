<?php 
function dolarBlue($compraVenta) {
    $data = json_decode(file_get_contents("https://api-dolar-argentina.herokuapp.com/api/dolarblue", true));

    if($compraVenta == "compra") {
        return $data->compra;
    } elseif($compraVenta == "venta") {
        return $data->venta;
    }
}