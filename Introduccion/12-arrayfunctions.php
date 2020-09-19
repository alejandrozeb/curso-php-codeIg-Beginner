<?php
    $numbers=[1,2,3];

    array_push($numbers,4);//añade al final del array

    var_dump($numbers);

    array_pop($numbers);//elimina el ultimo valor
    var_dump($numbers);

    $numbers=[1,2,3];
    array_unshift($numbers,0); //añade 0 al inicio del arraay
    var_dump($numbers);

    $numbers=[0,1,2,3];
     array_shift($numbers);  //remueve el primer elemento del array
        var_dump($numbers);
    $odd_numbers = [1,3,5,7,9];
    $even_numbers = [2,4,6,8,10];
    $allnumbers= array_merge($odd_numbers,$even_numbers);   //funciona dos array
    var_dump($allnumbers);

    $numbers=[4,2,3,1,5];

    sort($numbers); //ordena el array de menor a mayor
    var_dump($numbers);
    rsort($numbers);    //ordena de manara inverssa de mayor a menor

    var_dump($numbers);
?>