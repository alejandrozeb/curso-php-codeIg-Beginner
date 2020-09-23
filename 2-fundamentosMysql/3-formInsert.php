<?php require '3-gconexion.php' ?>
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
            <td>name </td>
            <td> <input type="text" name="e_name" require></td>
        </tr>
        <tr>
            <td>email </td>
            <td> <input type="email" name="e_email" require> </td>
        </tr>
        <tr>
            <td>Phone number </td>
            <td> <input type="tel" name="e_phone" require> </td>
        </tr>
        <tr>
            <td></td>
            <td> <input type="submit" name="e_add"> </td>
        </tr>
    </table>
    </form>
<?php
    if(isset($_POST['e_add'])){
        $e_name = $_POST['e_name'];
        $e_email = $_POST['e_email'];
        $e_phone = $_POST['e_phone'];
        //creando la consulta
    $sql = "INSERT INTO employes(e_name,e_email,e_phone) VALUES ('$e_name','$e_email','$e_phone')";

    //realizando la consulta
    if(mysqli_query($conn,$sql)){
        echo 'consulta correcta';
    }else{
        echo "error $sql <br>".mysqli_error($conn);
    }

    }
    

?>
 
</body>
</html>