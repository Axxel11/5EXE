<?php
$largo = intval(readline("INGRESA EL LARGO DEL TERRENO "));
$ancho = intval(readline("INGRESA EL ANCHO DEL TERRENO "));

$resultado = $largo * $ancho;
$Terreno= ($resultado >= 1000) ?
'Sirve para cultivo extensivo ' : 'sirve para jardin o huerto' ;

echo $Terreno;