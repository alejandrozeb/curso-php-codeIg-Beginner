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
    <title>Jobs List</title>

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
              <div class="col-lg-3 col-md-3">
                <!-- sidebar -->
                <?php $this->load->view('dash/inc/sidebar'); ?>
                <!-- sidebar -->
                </div>
              <div class="col-lg-9 col-md-9">
                  <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Details</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                            $employees_list= $this->db->get('employees');
                            foreach ($employees_list->result() as $employee) {
                        ?>
                            <tr>
                            <td> <?php  echo $employee->e_id?></td>
                            <td> <?php  echo $employee->e_name?></td>
                            <td><a href="" class="btn btn-info btn-xs btn-block">Details</a></td>    
                            <td><a href="" class="btn btn-warning btn-xs btn-block">Edit</a></td>    
                            <td><a href="" class="btn btn-danger btn-xs btn-block">Delete</a></td>    
                            </tr>
                        <?php
                            }
                        ?>
                  </table>
              </div>
          </div>
        </div>

    <!-- dash data -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" ></script>
  </body>
</html>