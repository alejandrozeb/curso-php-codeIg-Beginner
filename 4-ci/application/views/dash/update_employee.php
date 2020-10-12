<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(!$_SESSION['u_name']){
    redirect('home','refresh');
}
$id=$this->uri->segment(3);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Update Employe</title>

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
                <div class="col-lg-8 col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">Add Employee</div>
                        <div class="panel-body">
                        <?php
                                $employee_details=$this->db->get_where('employees',array('e_id'=>$id));

                                foreach ($employee_details->result() as $employee) {
                        ?>
                            <?php echo form_open('','class="form-horizontal"'); ?>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                    <input type="text" name="e_name" class="form-control input-sm" placeholder="Name" value="<?php echo $employee->e_name ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Email ID</label>
                                    <div class="col-sm-10">
                                    <input type="text" name="e_email" class="form-control input-sm" placeholder="Email" value="<?php echo $employee->e_email ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Phone</label>
                                    <div class="col-sm-10">
                                    <input type="text" name="e_phone" class="form-control input-sm" placeholder="Phone" value="<?php echo $employee->e_phone ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">select Job</label>
                                    <div class="col-sm-10">
                                        <select name="e_job" class="form-control input-sm">
                                                <option selected><?php echo $employee->e_job ?></option>
                                                <?php
                                                    $job_list = $this->db->get('jobs');
                                                    foreach ($job_list->result() as $job) {
                                                ?>
                                                <option value="<?php echo $job->j_name; ?>"><?php echo $job->j_name; ?></option>
                                                <?php
                                                    }
                                                ?>
                                        </select>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <input type="submit" name="update_employee" class="btn btn-sm btn-success" value="Add Employee">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
          </div>
    </div>

    <!-- dash data -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" ></script>
  </body>
</html>