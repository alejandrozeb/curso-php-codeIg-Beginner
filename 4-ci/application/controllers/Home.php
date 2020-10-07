<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('Users');

	} 

	public function index()
	{
		//cargamos el header
		$this->load->view('inc/header');//podemos navegar a uestro archivo	
        //vamos a crear la pagina por defecto de nuestro proyecto
		$this->load->view('home');
		//cargamos el footer
		$this->load->view('inc/footer');
	}
	public function register(){
		$this->load->view('inc/header');
		$this->load->view('register');
		$this->load->view('inc/footer');
	}

	public function login_process(){
		if($this->input->post('u_Login')){	//va el nombre del formulario
			$u_name=$this->input->post('u_name');
			$u_pass=md5($this->input->post('u_pass'));

			$user_data = array(
				'u_name' => $u_name,
				'u_pass' => $u_pass,
			);
			$users_list = $this->db->get_where('users', array('u_name' => $user_data['u_name']));
			foreach($users_list->result() as $user){
				if($user_data['u_name'] == $user->u_name && $user_data['u_pass'] == $user->u_pass){ 
					//echo "success";
					redirect('dash', 'refresh');
				}else{
					echo "<script>alert('Username or Password Incorrect')</script>";
					redirect('home','refresh');
				}
			}

		/* 	echo "<pre>";
			var_dump($user_data);
			echo "</pre>"; */
		}else{
			redirect('home','refresh');	//redireccionamos a home/index
		}		
	}

	public function register_process(){
		if($this->input->post('u_reg')){	//va el nombre del formulario
			echo "Success";
			$u_email=$this->input->post('u_email');
			$u_name=$this->input->post('u_name');
			$u_pass=md5($this->input->post('u_pass'));

			$user_data = array(
				'u_email' => $u_email,
				'u_name' => $u_name,
				'u_pass' => $u_pass,
			);
			$this->Users->insert_user($user_data);
			redirect('home','refresh');
			/* echo "<pre>";
			var_dump($user_data);
			echo "</pre>"; */
		}else{
			redirect('home/register','refresh');	
		}
	}

}
