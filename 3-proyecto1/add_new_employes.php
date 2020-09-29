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
                <div class="panel-heading">add Employe</div>
                <div class="panel-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control input-sm" name="e_name" placeholder="Employee name" require>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control input-sm" name="e_email" placeholder="Employee email" require>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control input-sm" name="e_phone" placeholder="Employee phone number" require>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-sm btn-success" value="Add_Employee" name='e_add'>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    <!-- main content -->
    <?php
        $sql="";

        if(isset($_POST['e_add'])){
        $e_name = $_POST['e_name'];
        $e_email = $_POST['e_email'];
        $e_phone = $_POST['e_phone'];
        //creando la consulta
        $sql = "INSERT INTO employes(e_name,e_email,e_phone) VALUES ('$e_name','$e_email','$e_phone')";

        //realizando la consulta
        if(mysqli_query($conn,$sql)){
            echo "<script>alert('Nuevo registro creado')</script>";
        }else{
            echo "error $sql <br>".mysqli_error($conn);
        }

        }
    ?>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>