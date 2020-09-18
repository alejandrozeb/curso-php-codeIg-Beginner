<?php
    /* los strings son un conjunto de caracteres se definen entre " " o ' ' pero no se anidan
    entre "" se puede incluir variable
    en '' no se puede incluir
    en "" se pueden diferenciar variables con {$data}
    */

    $text = "HEllo world";
    $outputData= "$text is a simple string";
    echo $outputData;

    $outputData2= "{$text} is a simple string";
    echo $outputData2;

    //si necesitamos comillas.
    $outputData2= "{$text} is a \"simple\" string";
    echo $outputData2;
?>