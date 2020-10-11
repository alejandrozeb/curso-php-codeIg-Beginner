<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Controller {
	

	public function index()
	{
		echo "amda";	
    }
    public function add_employees(){
        $this->load->view('dash/add_employe');
        /* if($this->input->post('add_job')){  
            $j_name=$this->input->post('j_name');
            $jobs_data = array(
                'j_name' => $j_name
            );

            $this->Jobs_modal->add_job($jobs_data);
            //echo "success";
            redirect('jobs/view_jobs','refresh');
        } */
    }
    public function add_employee_process(){
        if($this->input->post('add_employee')){
            $e_name = $this->input->post('e_name');
            $e_email = $this->input->post('e_email');
            $e_phone = $this->input->post('e_phone');
            $e_job = $this->input->post('e_job');
        }
        $employee_details = array(
            '$e_name' => $e_name,
            '$e_email' => $e_email,
            '$e_phone' => $e_phone,
            '$e_job' => $e_job,
        );
        echo '<br>';
        echo print_r($employee_details);
        echo '<br>';
    }
}
