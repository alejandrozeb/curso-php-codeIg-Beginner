<?php require '3-gconexion.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employees</title>
</head>
<body>
    <!-- mostrando datos desde la BD -->
    <table border=1>
        <tr>
            <td>ID</td>
            <td> NAME </td>
            <td> EMAIL </td>
            <td> PHONE </td>
        </tr>
    
    <?php
        $sql = "SELECT * FROM employes";

        $result= mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)>0){
            while($employee = mysqli_fetch_assoc($result)){
         //       echo $employee['e_id'];
    ?>            
            <tr>
                <td><?php echo $employee['e_id']?></td>
                <td><?php echo $employee['e_name']?></td>
                <td><?php echo $employee['e_email']?></td>
                <td><?php echo $employee['e_phone']?></td>
            </tr>
    <?php
            }

        }else{
            echo "0 results";
        }
    ?>
    </table>
</body>
</html>