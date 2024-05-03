<?php
function hacerFactura($nombreCliente, $productos, $montoTotal) { //
    $descuento = $montoTotal * 0.10;  // 10% de descuento
    $subtotal = $montoTotal - $descuento;
    $iva = $subtotal * 0.12;  // 12% de IVA
    $total = $subtotal + $iva;

    
function hacerFact($a, $b, $c) {
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

// Datos del cliente y los productos comprados
$z = "Juan";
$y = ["Camisa", "Pantalón", "Zapatos"];
$x = 1000;

$fa = haceFact($z, $y, $x);

echo $fa;

?>
