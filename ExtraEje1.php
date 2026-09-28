<?php

$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$cantidad = $_POST["cantidad"];
$socio = isset($_POST["socio"]);

if ($nombre == "" || $precio <= 0 || $cantidad <= 0) {
    $error = "Los datos no son válidos";
} else {
    $subtotal = $precio * $cantidad;
    $descuento = $socio ? $subtotal * 0.10 : 0;
    $total = ($subtotal - $descuento) * 1.21;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h2>Resultado</h2>

    <?php if (isset($error)): ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php else: ?>
        <p><strong>Producto:</strong> <?php echo $nombre; ?></p>
        <p><strong>Subtotal:</strong> €<?php echo number_format($subtotal, 2); ?></p>
        <p><strong>Descuento:</strong> €<?php echo number_format($descuento, 2); ?></p>
        <p><strong>Total con IVA:</strong> €<?php echo number_format($total, 2); ?></p>
    <?php endif; ?>

    <br>
    <a href="ExtraEje1.html">Volver</a>
</body>
</html>