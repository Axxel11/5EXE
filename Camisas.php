<?php
$Camisas = intval (readline("¿Que cantidad de camisas va a comprar?"));
$Precio = 20000;
$mostrardescuento = 20 ;
$sindescuento = $Camisas * $Precio ; 
$v10 = $sindescuento * 0.1;
$v77= $sindescuento - $v10;
$V20 = $sindescuento * 0.2;
$V66 = $sindescuento - $V20;
if ($Camisas >= 3) {
   echo "Usted compro ". $Camisas . " camisas, con un descuento de " . $mostrardescuento . "% ,para un total de " . $V66 . " pesos";
}
elseif ($Camisas < 3) {
    echo " Usted compro " . $Camisas . " camisas, con un descuento de 10%, para un total de " . $v77 . " pesos ";
}
?>