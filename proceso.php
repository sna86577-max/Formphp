<?php
$producto1 = $_POST['producto1'];
$precio1   = $_POST['precio1'];

$producto2 = $_POST['producto2'];
$precio2   = $_POST['precio2'];

$producto3 = $_POST['producto3'];
$precio3   = $_POST['precio3'];

$total = $precio1 + $precio2 + $precio3;

$descuento = $total * 0.16;
$totalPagar = $total - $descuento;

echo "<h2>Resultado</h2>";
echo "Producto 1: $producto1 - Precio: $precio1 <br>";
echo "Producto 2: $producto2 - Precio: $precio2 <br>";
echo "Producto 3: $producto3 - Precio: $precio3 <br><br>";

echo "Suma de los precios: $total <br>";
echo "Descuento (16%): $descuento <br>";
echo "<b>Total a pagar: $totalPagar</b>";
?>

