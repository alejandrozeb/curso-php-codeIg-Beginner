<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Controller {
	
    public function __construct(){
        parent::__construct();
        $this->load->model('Employee_modal');
    }

	public function index()
	{
	
    }
    public function add_employees(){
        $this->load->view('dash/add_employe');
    }
    public function add_employee_process(){
        if($this->input->post('add_employee')){
            $e_name = $this->input->post('e_name');
            $e_email = $this->input->post('e_email');
            $e_phone = $this->input->post('e_phone');
            $e_job = $this->input->post('e_job');
        }
        $employee_details = array(
            'e_name' => $e_name,
            'e_email' => $e_email,
            'e_phone' => $e_phone,
            'e_job' => $e_job
        );

        $this->Employee_modal->insert_employee($employee_details);
        echo 'Success';
    }
}
