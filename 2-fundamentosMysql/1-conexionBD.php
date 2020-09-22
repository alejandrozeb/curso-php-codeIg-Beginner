<?php
    //conectar a una BD
    //gracias wamp o cuelquier servidor apache podemos ingresar a phpmyadmin seleccionamos mysql en caso que pida credenciales tenmos las siguientes por defecto user: root, password:      en blanco.

    $server_name='localhost';
    $user_name='root';
    $pass_word = '';
    $db='demo';
    $port=3308; //puerto mysql

    //para conectar a una bd 
    $conn = mysqli_connect($server_name,$user_name,$pass_word,$db,$port);

    if(!$conn){
        die('no se puede conectar');
    }{
        echo "conexion exitosa";
    }
    //se conecto directamente al puerto de maria db




?>