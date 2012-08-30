<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Mi Portafolio';
		$data['main_content'] = 'home';
		$this->load->view('includes/template',$data);
	}

	public function trabajos(){
		$data['title'] = 'Trabajos';
		$data['main_content']= 'trabajos';
		$this->load->view('includes/template',$data);
	}

	public function contacto(){
		$this->load->helper('form');
		$data['title'] = 'Contacto';
		$data['main_content']= 'contacto';
		$this->load->view('includes/template',$data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */