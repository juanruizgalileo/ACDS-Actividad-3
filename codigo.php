<?php

// Variable global para almacenar el total de la factura
$ac = 0;

/**
 * Genera una factura a partir del nombre del cliente, los productos y el total de la compra.
 *
 * Nombre del cliente
 * Lista de productos comprados
 * Precio total sin descuentos
 * Cadena con el contenido de la factura
 */

function hacerFact($a, $b, $c) {
    // Calcular el 10% de descuento
    $de = $c * (10 / 100);

    
    $st = $c - $de;

  
    $iva = $st * 0.12;

    //Calcular el total final (subtotal + IVA)
    $t = $st + $iva;
    $ac = $t;

    
    $resultado = "FACTURA\n";
    $resultado .= "Nombre: $a\n";
    $resultado .= "Productos:\n";

    // Agregar cada producto a la factura
    foreach ($b as $b1) {
        $resultado .= "- $b1\n";
    }
    // Agregar el total a la factura
    $resultado .= "Total: \$$t\n";

    // Devuelve la factura
    return $resultado;
}


function consultarCliente($nombreCliente) {
    
    $host = "localhost";
    $usuario = "root";
    $contrasena = "1234"; 
    $baseDatos = "tienda";

    
    $conexion = new mysqli($host, $usuario, $contrasena, $baseDatos);

    
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    
    $sql = "SELECT * FROM clientes WHERE nombre = '$nombreCliente'";
    $resultado = $conexion->query($sql);

    
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            echo "Cliente encontrado: " . $fila["nombre"] . " - Email: " . $fila["email"] . "\n";
        }
    } else {
        echo "Cliente no encontrado.\n";
    }

    $conexion->close();
}


// Datos del cliente y los productos comprados
$z = "Juan";
$y = ["Camisa", "Pantalón", "Zapatos"];
$x = 1000;

consultarCliente($z);

// Generar la factura usando los datos anteriores
$fa = haceFact($z, $y, $x);

// Mostrar la factura generada
echo $fa;

?>
