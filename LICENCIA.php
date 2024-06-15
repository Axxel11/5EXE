<?php
//edad 
$edad = intval(readline("Digite su edad"));
$respuesta2 = $edad;
$verificacion2 = ($respuesta2 >= 18)?
'puede conducir' : 'no puede conducir';
echo $verificacion2;
//licencia
$licencia = (readline("tiene licencia de conducir?"));
$Respuesta1 = $licencia;
$verificacion = ($Respuesta1 == "si") ?
'puede conducir' : 'no puede conducir';
echo $verificacion;
echo "\n";
?>
