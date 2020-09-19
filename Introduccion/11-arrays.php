<?php
    $odd_numbers = [1,2,3,5,7,9];

    $first_odd_number= $odd_numbers[0];
    $second_odd_number= $odd_numbers[1];

    echo "el primer numero del array odd es $first_odd_number <br>";
    echo "el segundo numero del array odd es $second_odd_number <br>";


    echo var_dump($odd_numbers);

    $odd_numbers[5]=11;     //cambia el valor de la posicion 5
    echo var_dump($odd_numbers);

    unset($odd_numbers[2]); //remueve el valor de la posicion 3
    echo var_dump($odd_numbers);

    echo count($odd_numbers);   //cuenta el numero ded items
    echo "<br>";
    $first_item= reset($odd_numbers);   //saca el primero
    echo $first_item;
    echo "<br>";                    //salto de linea
    $last_item = end($odd_numbers); //saca el ultimo
    echo $last_item;

    var_dump($odd_numbers);
?>