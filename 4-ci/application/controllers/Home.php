<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		//cargamos el header
		$this->load->view('inc/header');//podemos navegar a uestro archivo	
        //vamos a crear la pagina por defecto de nuestro proyecto
		$this->load->view('home');
		//cargamos el footer
		$this->load->view('inc/footer');
	}
	public function login_process(){
		if($this->input->post('u_Login')){	//va el nombre del formulario
			echo "Success";
			$u_name=$this->input->post('u_name');
			$u_pass=md5($this->input->post('u_pass'));

			$user_data = array(
				'u_name' => $u_name,
				'u_pass' => $u_pass,
			);

			echo "<pre>";
			var_dump($user_data);
			echo "</pre>";
		}else{
			redirect('home','refresh');	//redireccionamos a home/index
		}		
	}

}
