<?php
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
    
?>