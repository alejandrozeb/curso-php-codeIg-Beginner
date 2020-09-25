<?php require '3-gconexion.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<?php 
        $id= $_GET['e_id'];     //sacameos el id del URL
        echo $id;
        $sql= "SELECT * FROM employes WHERE e_id=$id ";
        $result= mysqli_query($conn,$sql);
    ?>
    <!-- mostrando datos desde la BD -->
    <p><a href="4-employes.php">Back to employes</a></p>

   <form method="POST">
    
        <?php
            if(mysqli_num_rows($result)>0){
                while($employee = mysqli_fetch_assoc($result)){
            //       echo $employee['e_id'];
        ?>     
            <li><strong>Name:</strong><?php echo $employee['e_name']?></li>      
            <li><strong>Mail:</strong><?php echo $employee['e_email']?></li>      
            <li><strong>Phone No:</strong><?php echo $employee['e_phone']?></li>      

            <table>
                <tr>
                    <td>name </td>
                    <td> <input type="text" name="e_name" require value="<?php echo $employee['e_name']?>"></td>
                </tr>
                <tr>
                    <td>email </td>
                    <td> <input type="email" name="e_email" require value="<?php echo $employee['e_email']?>"> </td>
                </tr>
                <tr>
                    <td>Phone number </td>
                    <td> <input type="tel" name="e_phone" require value="<?php echo $employee['e_phone']?>"> </td>
                </tr>
                <tr>
                    <td></td>
                    <td> <input type="submit" name="e_update"> </td>
                </tr>
            </table>
                
        <?php
                }

            }else{
                echo "0 results";
            }
        ?>
   </form>

   <!-- updates to database -->
            <?php
                if(isset($_POST['e_update'])){
                    $e_name = $_POST['e_name'];
                    $e_email = $_POST['e_email'];
                    $e_phone = $_POST['e_phone'];
                //creando la consulta
                $sql = "UPDATE employes SET e_name= '$e_name', e_email='$e_email', e_phone='$e_phone' WHERE e_id=$id"; 
                
                if(mysqli_query($conn,$sql)){
                    /*                     echo "<script>alert('Data update successfully');</script>"; */
                                        header('Location: 4-employes.php');
                                    }else{
                                        echo "Error updating record:". mysqli_error($conn);
                                    }
                }

                
            ?>
        
</body>
</html>