<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs_modal extends CI_Model{
    public function add_job($job_data){    //recibimos la data
           $this->db->insert('jobs',$job_data);   
    }
}

?>