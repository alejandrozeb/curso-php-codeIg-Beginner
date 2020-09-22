<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">    <!-- metodo de envio -->
    <table>
        <tr>
            <td> username </td>
            <td> <input type="text" name="u_name"></td>
        </tr>
        <tr>
            <td>password </td>
            <td> <input type="password" name="p_pass"> </td>
        </tr>
        <tr>
            <td></td>
            <td> <input type="submit" name="u_login"> </td>
        </tr>
    </table>
    </form>

    <?php
    //usamos isset si no se cambian los valores no pasara nada
    if(isset($_POST['u_login'])){
        
        $u_name = $_POST['u_name']; //recibimos el dato
        $u_pass = md5($_POST['p_pass']); //recibimos el dato y encriptamos
       
        echo $u_name.$u_pass;
    }
    //el post es el response de la pagina al pasar un evento, en este caso el set de los campos en el formulario entonces mediante post recibimos un arraykey llamado $_POST donde los key son el name del input y el value el valor

    ?>
</body>
</html>