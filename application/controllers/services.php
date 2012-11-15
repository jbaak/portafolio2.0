<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index($desde= null)
	{
		$data['title'] = 'Servicios';
		$data['main_content'] = 'services';
		$this->load->view('includes/template',$data);
	}

	public function paginacion($desde= null){
		if(isset($desde)){
			$this->index($desde);
		}	
		else{
			$this->index();
		}	
		
		
		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */