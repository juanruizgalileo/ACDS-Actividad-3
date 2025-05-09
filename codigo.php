<?php

$ac = 0;

function hacerFact($a, $b, $c) {
    $de = $c * (10 / 100);  // Descuento del 10%
    $st = $c - $de;         // Subtotal después del descuento
    $iva = $st * 0.12;      // IVA del 12%
    $t = $st + $iva;        // Total
    // global $ac; // Si quieres modificar la variable global
    // $ac = $t;

    $resultado = "FACTURA\n";
    $resultado .= "Nombre: $a\n";
    $resultado .= "Productos:\n";
    foreach ($b as $b1) {
        $resultado .= "- $b1\n";
    }
    $resultado .= "Total: $" . number_format($t, 2) . "\n";

    return $resultado;
}

// Datos del cliente y los productos comprados
$z = "Juan";
$y = ["Camisa", "Pantalón", "Zapatos"];
$x = 1000;

// Corregido el nombre de la función
$fa = hacerFact($z, $y, $x);

echo $fa;

?>
