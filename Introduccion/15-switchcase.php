<?php
//el case evalua y busca el caso correcto caso contrario se va por default e imprime un mensaje predeterminado
    $favcolor = "blue";

    switch($favcolor){
        case "red":
            echo "Red";
        break;
        case "blue":
            echo "blue";
        break;
        case "red":
            echo "green";
        break;
        default:
            echo " no tienes color favori";
    }
?>