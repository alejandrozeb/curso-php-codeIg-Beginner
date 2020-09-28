<?php 
    session_start();    //damos las variables de la session
    session_unset();    //limpia las variables 
    session_destroy();  //destruye la variable

    header("Location: index.php");  //cambiamos la pantalla
?>