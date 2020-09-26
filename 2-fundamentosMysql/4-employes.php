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
            <td> DETAILS </td>
            <td> UPDATE </td>
            <td> DELETE </td>
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
                <td><a href="5-details.php?e_id=<?php echo $employee['e_id'];?>">Details</a></td>
                <td><a href="6-update.php?e_id=<?php echo $employee['e_id'];?>">Update</a></td>
                <td><a href="7-delete.php?e_id=<?php echo $employee['e_id'];?>">DELETE</a></td>
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