<?php

function generarFactura($a, $b, $c) {
    $de = $c * (10 / 100);
    $st = $c - $de;
    $iva = $st * 0.12;
    $t = $st + $iva;
    
    $resultado = "FACTURA\n";
    $resultado .= "Nombre: $a\n";
    $resultado .= "Productos:\n";
    foreach ($b as $b1) {
        $resultado .= "- $b1\n";
    }
    $resultado .= "Total: \$$t\n";

    // Devuelve la factura
    return $resultado;
}

// Parametros
$cliente = "Juan";
$productos = ["Camisa", "Pantalón", "Zapatos"];
$costo = 1000;

// Generar factura
$factura = generarFactura($cliente, $productos, $costo);

echo $factura;

?>
