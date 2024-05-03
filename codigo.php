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
$nombre_cliente = "Juan";
$productos_comprados = ["Camisa", "Pantalón", "Zapatos"];
$precio_total_sin_impuestos = 1000;

$fa = haceFact($nombre_cliente, $productos_comprados, $precio_total_sin_impuestos);

echo $fa;

?>
