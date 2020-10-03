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
    estructura de un proyecto en codeigniter:
    los archivos externos no son necesarios para nuestra aplicacion excepto el index.php
    apliaccion folder es el principal donde tenemos configuracion de cache, de bd, controladores, vistas(MVC), modelos librerias, hooks.
    en third party podemos almacenar una herramienta extra que usemos.
    nuestro proyecto se crea enteramente en la carpeta aplicacion.

    system folder.
    La mejor recomendacion para el uso es no tocarlo, almacena el funcionamiento de codeigniter.

    USERGUIDE
    es la guia completa para usar paso a paso la documentacion que nos proporciona codeigniter.  
    
    Configuracion Inicial.
    en aplication-> autoload

    Podemos cargar que helpers, modelos,librerias se cargaran.
    el librerias podemos usar email, session,database.

    si queremos usar url o file en nuestro proyecto tambien los podemos cargar.

    CONFIG

    baseurl-> puedo cambiar donde sera mi home en mi proyecto este es por defecto
    http://localhost/curso-php/4-ci/

    otras formas de escribir

    http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
     http://localhost/curso-php/4-ci/index.php/welcome/bye_world 
     


    al final se sobreentiende que apunta a un index.php
    trabaja de la siguiente forma
    localhost es nuestro server local
    curso-phph es una carpeta creadada para almacemar el curso
    4-ci carpeta creada para almacenar nuestro proyecto.
    index.php es el archivo que esta afuera de nustras carpetas tiene configuracion para trabajar con los compenentes de codeigniter.
    welcome es nuestro controlador
    index es la funcion que almacena nuestra vista

    !!!!!!!!!!!!!!!!!!!!!!!!!!!!
    welcome no sle al en la url del localhost por que esta coonfigurada como por dfecto en rutas.

    index tambien esta configurada comonuestra vista por defecto por lo tanto tampoco es visible.
    !!!!!!!!!!!!!!!!!!


    index_page define cual sera nuestro index en el proyecto.
     
    DATABASE:
    TENEMOS HOST y otras variables propias de una database,
    podemos aumentar la variable del port 
    para darle una.

    ROUTES
    configuramos el controlador y funcion que se mostrara por defecto.

    CONTROLADORES Y VISTAS
    MVC
    Modelo 
    Vista 
    Controlador


    en caso que no exista un controldor funcion o vista podemos dar por defecto el error 404 que codeigniter usa por defecto.
    
*/
?>