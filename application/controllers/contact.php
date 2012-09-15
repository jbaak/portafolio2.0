<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->helper('form');
		$data['title'] = 'Contacto';
		$data['main_content']= 'contact';
		$this->load->view('includes/template',$data);
	}

	public function envio(){
		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */