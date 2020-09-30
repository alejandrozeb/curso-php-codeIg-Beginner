<?php  
  require 'conn.php';
  session_start();
  if(!$_SESSION['u_name']){ //si la session termina cargamos de nuevo el login, por defecto dura 1440 seg que son 24 minutos.
    header('Location: index.php');
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- nav  -->
    <?php require 'nav.php'; ?> <!-- llamamos a nav -->
    <!-- nav -->
    
    <h1>Welcome <?php echo $_SESSION['u_name'] ?></h1>
    
    <!-- main content -->
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3">
            <div class="panel panel-default">
              <div class="panel-heading">Employees</div>
                <ul class="list-group">
                  <li class="list-group-item">
                      <a href="add_new_employes.php">add New Employee</a>
                  </li>
                  <li class="list-group-item">
                      <a href="dash.php">View all Employees</a>
                  </li>
                </ul>
            </div>
          </div>
          <div class="col-lg-9 col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Employess List</div>
                <table class="table table-bordered">
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Details</td>
                        <td>Edit</td>
                        <td>Deleted</td>
                    </tr>
                    <?php
                     $sql="SELECT * FROM employes";
                     $result= mysqli_query($conn,$sql);
         
                     if(mysqli_num_rows($result)>0){
                         while ($employe = mysqli_fetch_assoc($result)) //de result saca un row a user
                         {  ?>

                          <tr>
                            <td><?php echo $employe['e_id'];?></td>
                            <td><?php echo $employe['e_name'];?></td>
                            <td><a href="single_employee.php" class="btn btn-xs btn-info btn-block">Details</a></td>
                            <td><a href="#" class="btn btn-xs btn-warning btn-block">Edit</a></td>
                            <td><a href="#" class="btn btn-xs btn-Danger btn-block">Deleted</a></td>
                          </tr>

                        <?php }
                     }else{
                       echo '0 results';
                     }
                    ?>
                </table>  
            </div>
          </div>
        </div>
      </div>
    <!-- main content -->

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>