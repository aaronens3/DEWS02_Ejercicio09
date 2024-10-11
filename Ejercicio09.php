<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Factura</title>
</head>
<body>
    <?php
    // Definir el precio del producto y las unidades adquiridas
    $precioProducto = 50;  // Puedes cambiar este valor
    $unidades = 3;         // Puedes cambiar este valor

    // Definir la constante IVA del 21%
    define('IVA', 0.21);

    // Calcular el importe base (precio del producto * unidades)
    $importeBase = $precioProducto * $unidades;

    // Calcular el importe del IVA
    $importeIVA = $importeBase * IVA;

    // Calcular el importe final (importe base + IVA)
    $importeFinal = $importeBase + $importeIVA;

    // Mostrar los resultados
    echo "<h2>Detalles de la factura</h2>";
    echo "<p>Precio del producto: €" . number_format($precioProducto, 2) . "</p>";
    echo "<p>Unidades adquiridas: $unidades</p>";
    echo "<p>Importe base: €" . number_format($importeBase, 2) . "</p>";
    echo "<p>Importe del IVA (21%): €" . number_format($importeIVA, 2) . "</p>";
    echo "<p><strong>Importe final de la factura: €" . number_format($importeFinal, 2) . "</strong></p>";
    ?>
</body>
</html>