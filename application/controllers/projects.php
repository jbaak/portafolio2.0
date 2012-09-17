<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projects extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Projects_Model');
		$data['projects'] = $this->Projects_Model->get_projects();
		$data['title'] = 'Mi Trabajos';
		$data['main_content'] = 'projects';
		$this->load->view('includes/template',$data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */