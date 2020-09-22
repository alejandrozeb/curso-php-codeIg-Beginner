<?php

    //Funciones es un bloque de codigo que podemos reutilizar a los largo de nuesttros programas

    function helloworld(){
        echo 'hello World';
    }
    helloworld();   //forma de llamar a una funcion
    echo '<br>';
    //podemos enviar variables
    function add_me($x,$y){
        echo $x+$y;
    }
    add_me(5,6); 
    //otro es ejemplo es cuando no sabemos los limites de un loop
    echo "<br>";
    function count_me($x,$y){
        while ($x < $y) {
            echo "$x hello world <br>";
            $x++;
        }
    }
    count_me(5,10); 
?>