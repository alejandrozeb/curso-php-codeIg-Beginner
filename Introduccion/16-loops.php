<?php
    //Ciclos en php

    //while loop primero se verifica una condificion y luego se ejecuta el codigo

    $x=0;

   /*  while($x<=10){      //sale cuando llegue a 11, si llega solo al 10 <
        echo "$x hola desde un while loop <br>";
        //$x=$x+1;
        $x++;
        //para salir del loop cuando queramos
        if($x == 5){
         //break;
         //o podemos continuar
         echo 'aaa <br>';
         continue;
        }
    } */

    //do while loop

    /* do {
        echo "$x hola desde un while loop <br>";
        //$x=$x+1;
        $x++;
        //para salir del loop cuando queramos
        if($x == 5){
         //break;
         //o podemos continuar
         echo 'aaa <br>';
         continue;
        }
    } while ($x <= 10); */ //la diferencia es que primero se ejecuta el codigo y luego se verifica la condicion


    //for loop
    /* for ($x =0; $x<10;$x++){    //tenemos lo necesario para comenxar el loop a diferenia del loop donde la variable de control se instancia afuera del mismo

        echo "$x hola desde un for <br>";
    } */

    //foreach   tiene todas las propiedades de un for pero es mas corto y rebaja el tamaño del codigo normalmente se usan para recorrer arrays, ademas te da la ventaja de sacar el valor del array en una variable
    $count = [0,1,5,6,8,9];
    
    foreach ($count as $data) {
        echo "este es un elemento de count $data <br>";
    }
    //con array values
    $student=["name"=>"jhon","email"=>"adasd@gmail.com", "phone"=>"4654654"];
    //var_dump($student);
    foreach($student as $key => $value) {
        echo "$key  $value <br>";
    }
?>