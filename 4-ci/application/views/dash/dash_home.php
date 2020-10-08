<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(!$_SESSION['u_name']){
    redirect('home','refresh');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Proyecto PHP</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href= "<?php echo base_url();?>assets/css/bootstrap.min.css">
  </head>
  <body>
    <!-- dashnav -->
    <?php  $this->load->view('dash/inc/nav'); ?>
    <!-- dashnav -->
    <!-- dash data -->
        <div class="container">
          <div class="row">
              <div class="col-lg-3 col-md-3"></div>
                <div class="panel panel-default">
                  <div class="panel-heading">Employees Action</div>
                  <div class="list-group">
                    <a href="#" class="list-group-item">Add Employee</a>
                    <a href="#" class="list-group-item">Employees List</a>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">Jobs Action</div>
                  <div class="list-group">
                    <a href="#" class="list-group-item">Add Jobs</a>
                    <a href="#" class="list-group-item">Jobs List</a>
                  </div>
                </div>
              <div class="col-lg-9 col-md-9"></div>
          </div>
        </div>

    <!-- dash data -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" ></script>
  </body>
</html>