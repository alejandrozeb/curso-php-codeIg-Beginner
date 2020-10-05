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

}
