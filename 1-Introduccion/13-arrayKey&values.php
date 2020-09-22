<?php
    $phone_numbers=[
        "Alex" => "+911234567890",
        "Jessica" => "+9112345656"
    ];
    //los array key son indexados de manera diderente yya no por numeros si no por keys alex seria el key del valor del numero

    var_dump($phone_numbers);

    echo "numero alex {$phone_numbers["Alex"]}";
    //añadir otro numero

    $phone_numbers["michael"]="+9777451325";
    var_dump($phone_numbers);

    //mostrando keys y values

    var_dump(array_keys($phone_numbers));
    var_dump(array_values($phone_numbers));
?>