<?php
    //String functiond
    $first=" First Text ";
    $second= " Second text";
    //concatenar a una variable
    $third=$first;
    $third.=$second;
    //Igual que $third = $third.$second;
    echo $third;

    //caambiar a miniscula
    echo strtolower($third);
    //cambiar a mayusculas
    echo strtoupper($third);
    //cambia la primera letra a mayuscula
    echo ucfirst($third);
    // cambia las primeras letras de cada palabra a mayuscula
    echo ucwords($third);

    //length
    echo strlen($third);
    //remplaza los espacios extras en un string
    echo trim($third);
    //encuentra una palabra y devuelve true o false
    echo strstr($third,"Second");
    //reempaza una frase o palabra por otra en el string
    echo str_replace("text","data", $third);

    //repite la misma palabra 
    echo str_repeat($third,2);

    //crea un substring desde la posicion 5 10 caracteres
   echo substr($third,5,10);
    //encuentra una posicion
    echo strpos($third,"text");
    //encuentra un caracter y lo muestra a partur de este
    echo strchr($third,"o");

?>