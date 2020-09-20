<?php
    //condicones en php

    $num=27;
    //$user_input="hello world"; //los numeros son contados como mayores que los string si entra a numero
    $user_input=26;



    if(is_int($user_input)){//verificamos si es de tipo int
        if($num==$user_input){
            echo "$num es igual a $user_input";
        }else if($num <= $user_input){
            echo "$num es menor o igual a $user_input";
        }else if($num >= $user_input){
            echo "$num es mayor o igual a $user_input";
        }else{
            echo 'Son distintos';
        }
    }else {
        echo "Erroe en la informacion";
    }
    //caso de bug con un string
    if($num === $user_input){
        echo "son iguales";
    }else{
        echo "no son iguales";
    }

?>