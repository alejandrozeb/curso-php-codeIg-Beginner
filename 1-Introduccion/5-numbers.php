<?php
/* existen dos tipos de variables, las normales de tipo entero y las de tipo float  */

$num1 = 20;

echo var_dump(is_int($num1)); //verifica si es de tipo int

$num2 = 20.2;

echo var_dump(is_float($num2)); //verifica si es de tipo float

//verfica si es solo un numero

$num3=20;
//$num4=30;
//$num4="30";
//$num4='30';
$num4="30das";        //salta un error pero php siempre trat de buscar el numero en la cadena
$result= $num3 + $num4;

echo $result;

?>