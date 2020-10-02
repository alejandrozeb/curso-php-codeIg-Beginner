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

    //encriptando una pagina con sessions
    cuando realizamos la session en login, el dash ya no es accecible a menos que inicies una session con tu usuario y contraseña.

    Despues de que tenemos la session podemos usar la sessino en otras paginas referenciadas.
    hosting
    www.000webhost.com
    para paginas de php mysql
    alejandrophp
    @qZ^!Ac!M3JL4LGFcN55  

    db name demo        id15018372_demo
    datauser alejandro  id15018372_alejandro 
    pass: 0ldR{4WZ<u3[oK$!
    bhost: localhost

    //exportamos la bd de nuestro proyecto
    https://alejandrophp.000webhostapp.com/Proyecto/index.php

    realize cambios en los header
    echo "<script> window.location.href='https://alejandrophp.000webhostapp.com/Proyecto/dash.php';</script>";
    se usa js para realizar la el location

    CODEIGNITER es un framework de php
    open source
    rapid development web framework
    dynamic web sites with PHP
    developed by: British Columbia <Ins
    Initial realease: 2006, febrero 28
    stable realese: 4.00/2020-02-24
    requirements
    html
    php&mysql
    POO
    Bootstrap
    Code editor

    Usaremos Codeigniter 3
    descargamos de su pagina el realese estable 
    https://codeigniter.com/download
    y en la carpeta ci copiamos los archivo sin la necesidad de instalar algo y accedemosd esde el localHost
    http://localhost/curso-php/4-ci/
    en mi caso

    Codeigniter usa MVC explicacion en curso de js seccion de patrones de diseño.

    
*/
?>