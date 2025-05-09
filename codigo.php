<?php

$ac = 0;
    
function hacerFact($a, $b, $c) {
    $de = $c * (10 / 100);
    $st = $c - $de;
    $iva = $st * 0.12;
    $t = $st + $iva;
    $ac = $t;
    
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

function consultarCliente($nombreCliente) {
    $host = "localhost";
    $usuario = "root";
    $contrasena = "1234"; 
    $baseDatos = "tienda";

    $conexion = new mysqli($host, $usuario, $contrasena, $baseDatos);

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Consulta segura con prepared statement
    $stmt = $conexion->prepare("SELECT * FROM clientes WHERE nombre = ?");
    $stmt->bind_param("s", $nombreCliente);
    $stmt->execute();
    $resultado = $stmt->get_result();

    
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
$nombre  = "Juan";
$productos  = ["Camisa", "Pantalón", "Zapatos"];
$subtotal  = 1000;

consultarCliente($z);

$fa = haceFact($z, $y, $x);

echo $fa;

?>
