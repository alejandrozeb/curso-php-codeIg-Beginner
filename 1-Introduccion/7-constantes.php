<?php
    //la variabales puden ser ateradas en su tipo
    $dob = '1989';
    echo $dob;

    $dob= 'Hello Word';
    echo $dob;
    //para definir una constante
    //primero es el nombre la variable y el segundo el valor
    define("DOB",1989);
    echo DOB;

    //define("DOB",1988);//sale un error por que o se puede renombrar
    //echo DOB;


    define('USERNAME', 'fatahgabiel', true);
    echo USERNAME;
    //la definicion es case sensitive
    //echo username;      //salta un error por que no existe la variable, pero si agragamos el true si se puede usar de esta forma
?>