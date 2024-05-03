<?php

function hacerFact($name, $products, $price) {
    $descuento = $price * (10 / 100);
    $valorNeto = $price - $descuento;
    $iva = $valorNeto * 0.12;
    $total = $valorNeto + $iva;
    
    $resultado = "FACTURA\n";
    $resultado .= "Nombre: $name\n";
    $resultado .= "Productos:\n";
    foreach ($products as $item) {
        $resultado .= "- $item\n";
    }
    $resultado .= "Total: \$total\n";

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
