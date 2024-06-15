<?php
$Unidad_articulos = intval(readline("Ingrese la cantidad de articulos que desea comprar"));
$Precio_articulos = 10000;

$Multiplicación = $Unidad_articulos * $Precio_articulos;
$Descuento = $Multiplicación * 0.1;
$Compra_Descuento = $Multiplicación - $Descuento;
$Validación = ($Unidad_articulos >= 10) ?
$Compra_Descuento : $Multiplicación;

echo $Validación;
?>



