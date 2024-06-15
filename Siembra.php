<?php
$meses= [
"enero" => " siembra directa",
"febrero" => " siembra directa",
"marzo" => " siembra directa",
"abril" => " siembra en almacigo",
"mayo" => " siembra en almacigo",
"junio" => " siembra en almacigo",
"julio" => " siembra en almacigo", 
"agosto" => " siembra en almacigo", 
"septiembre" => " siembra en almacigo",
"octubre" => " siembra en almacigo",
"noviembre" => " siembra en almacigo", 
"diciembre" => " siembra directa",
];

$n1_mes = (readline ("INGRESE EL NOMBRE DEL MES QUE DESEA CULTIVAR"));
if (array_key_exists($n1_mes,$meses)){
$U_mes = $meses [$n1_mes] ;
echo "El metodo recomendado para el mes de " . $n1_mes . " es: " . $U_mes ;
} 
else {
 echo "el nombre del mes ingresado es invalido. \n";
}
?>





