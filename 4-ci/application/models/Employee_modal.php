<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_modal extends CI_Model{
    public function insert_employee($employee_details){    
        $this->db->insert("employees",$employee_details);
    }
    
}

?>