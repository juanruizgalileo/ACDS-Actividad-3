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

    // Subtotal después de aplicar el descuento
    $st = $c - $de;

    // Calcular Iva(12% total)
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
    // Datos de conexión a la base de datos
    $host = "localhost";
    $usuario = "root";
    $contrasena = "1234"; 
    $baseDatos = "tienda";

    // Crear la conexión
    $conexion = new mysqli($host, $usuario, $contrasena, $baseDatos);

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Realizar la consulta
    $sql = "SELECT * FROM clientes WHERE nombre = '$nombreCliente'";
    $resultado = $conexion->query($sql);

     // Mostrar resultados si se encontró el cliente
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            echo "Cliente encontrado: " . $fila["nombre"] . " - Email: " . $fila["email"] . "\n";
        }
    } else {
        echo "Cliente no encontrado.\n";
    }

    // Cerrar la conexión
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
