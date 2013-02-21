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
		$data['estilo'] = 'position: relative;top:400px;';
		$this->load->view('includes/template',$data);
		
		
	}

	public function design(){
		$data['title'] = 'Diseño de tarjetas';
		$data['main_content'] = 'design';
		$this->load->view('includes/template',$data);
	}


	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */