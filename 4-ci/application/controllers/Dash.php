<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dash extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('Users');

	} 

	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('dash/dash_home');
		$this->load->view('inc/footer');
	}
}
