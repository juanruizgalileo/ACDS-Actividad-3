<?php

function crearFactura($nombreCliente, $productos, $montoTotal) {
    $descuento = $montoTotal * 0.10;
    $subtotal = $montoTotal - $descuento;
    $iva = $subtotal * 0.12;
    $total = $subtotal + $iva;
    
    $resultado = "FACTURA\n";
    $resultado .= "Nombre: " . htmlspecialchars($nombreCliente) . "\n";
    $resultado .= "Productos:\n";
    foreach ($productos as $producto) {
        $resultado .= "- " . htmlspecialchars($producto) . "\n";
    }
    $resultado .= "Total: $" . number_format($total, 2) . "\n";

    return $resultado;
}

// Datos del cliente y los productos comprados
$nombreCliente = "Juan";
$productos = ["Camisa", "Pantalón", "Zapatos"];
$montoTotal = 1000;

$factura = crearFactura($nombreCliente, $productos, $montoTotal);

echo $factura;

?>


