<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('Jobs_modal');

	} 

	public function index()
	{
		
		$this->load->view('dash/add_job');
		
    }
    public function add_job(){
        if($this->input->post('add_job')){  
            $j_name=$this->input->post('j_name');
            $jobs_data = array(
                'j_name' => $j_name
            );

            $this->Jobs_modal->add_job($jobs_data);
            //echo "success";
            redirect('jobs/view_jobs','refresh');
        }
    }
    public function view_jobs(){
        $this->load->view('dash/jobs_list');
    } 
}
