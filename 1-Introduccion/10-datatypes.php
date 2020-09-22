<?php
    //tipos de datos

    $string = 'Hello word';

    $number = 25;
    $float= 3.14;
    $boolean=true;
    $array= array('hello','world',25,3.14, $string); //contiene un conkinto de variables
    $new_array= [$string, $number, $array];//contiene diferente stiposde datos hasta array

    var_dump($number);
    var_dump($float);
    var_dump($boolean);
    var_dump($array);
    var_dump($new_array);


?>