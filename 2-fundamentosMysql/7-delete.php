<?php 

require '3-gconexion.php'; 
    $id = $_GET['e_id'];
    $sql="DELETE FROM employes WHERE e_id='$id'";

    if(mysqli_query($conn,$sql)){                            
        //echo "Record deleted successfully";
        header('Location: 4-employes.php');
    }else{
        echo "Error updating record:". mysqli_error($conn);
                        }
?>