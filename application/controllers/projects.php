<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projects extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index($desde= null)
	{
		$this->load->model('Projects_Model');
		$this->load->library('pagination');

		$projects =$this->Projects_Model->get_projects($desde=null);
		$total = $this->Projects_Model-> total();

		$config['base_url'] = base_url()."projects/paginacion";
		$config['total_rows'] = $total;
		$config['per_page']= '4';
		$this->pagination->initialize($config);

		$paginacion = $this->pagination->create_links();

		$data['paginacion'] = $paginacion;
		$data['projects'] = $projects;
		$data['title'] = 'Mi Trabajos';
		$data['main_content'] = 'projects';
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