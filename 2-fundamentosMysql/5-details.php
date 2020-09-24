<?php require '3-gconexion.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employees</title>
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
   <ul>
    
        <?php
            if(mysqli_num_rows($result)>0){
                while($employee = mysqli_fetch_assoc($result)){
            //       echo $employee['e_id'];
        ?>     
            <li><strong>Name:</strong><?php echo $employee['e_name']?></li>      
            <li><strong>Mail:</strong><?php echo $employee['e_email']?></li>      
            <li><strong>Phone No:</strong><?php echo $employee['e_phone']?></li>      
                
        <?php
                }

            }else{
                echo "0 results";
            }
        ?>
    </ul>
</body>
</html>