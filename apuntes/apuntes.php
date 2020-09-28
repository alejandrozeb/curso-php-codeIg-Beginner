<?
/* apuntes curso */

/* 
   php
    php: hypertext pre_processor
    php es un lenguaje descriptivo no un programing languaje
    la diferenecia es que esperan acciones, por ejemplo una pagina web espera a la accion del boton.
    puedes extender la funcionalidad de tus paginas web.
    ventajas
    open source
    cross platform
    powerful, robust and scalable 
    si tienes bastante trafico php es lo que buscas

    progrmas
    web server - wamp for windows
    php 7
    database
    text editor 
    web browser

    lamp - linux
    mamp-  mac
*/

/* 
    <?php //yor code ?> podemos escribir nuestro codigo entre estas etiquetas
    <?php        
        //your code
    ?>
    tambien podemos hacerlo de esta forma


    al crear los files no se pueden usar espacios y la terminacion siempre sera .php

    impresion
    <?php echo 'hello world'; ?>        //con simple o dos comillas
    concatenacion
    <?php echo "hello"."world";?>       // con el punto
    calcular
    <?php echo 25+75; ?>

    request_ Response Cycle
    php trabaja en request y respuesta en el buscador,
     el navegador toma el request y lo encia al server 
     en el server esta instalado apache, busca el archivo, encuentra el hello.php, pasa a un proceso en php verifica si necesita interaccion con una bd y devuelve el html al navegador donde se puede visualizar un resultado.
     data types:
     String, Integer, float, boolean, Array, Object, NUll, Resource.
     Variables
     es la representacion de un valor
    las variables comienzan por $ seguidas por una letra o un underscore barra baja _
    puede contener letras numeros or dashes /
    se restringuen los espacios
    es case-sensitive con esto quiero decir que reconoce entre mayusculas y minusculas.
    casoa a prestar atencion
    $this-variable      no es recomendable
    $_book el underscore al inicio de la variable cumple otra funccion en php
    $__book de la misma forma el lenguaje puede interpretarlo de difrente manera.

    String

    Al realizar el register podemos encriptar con md5() y debemos gaudarla de esa forma al realizar el login de igual manera encriptamos la contraseña y comparamos las contraseñas encriptadas.


*/
?>