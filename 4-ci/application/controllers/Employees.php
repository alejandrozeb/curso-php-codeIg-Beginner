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
    public function view_jobs(){
        $this->load->view('dash/jobs_list');
    } 

    public function update_job($j_id){
        $this->load->view('dash/update_job',$j_id);
    }

    public function update_process_job($j_id){
        if($this->input->post('update_job')){
            $j_name= $this->input->post('j_name');
            $job_details = array(
                'j_name' => $j_name
            );

            $this->db->where('j_id',$j_id);
            $this->db->update('jobs', $job_details);

            redirect('jobs/view_jobs', 'refresh');
        }
    }

    public function delete_job($j_id){
          $this->db->where('j_id',$j_id);
          $this->db->delete('jobs');
          redirect('jobs/view_jobs', 'refresh'); 
    }
}
