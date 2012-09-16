<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->helper('form');
	}

	public function index()
	{
		
		
		$data['title'] = 'Contacto';
		$data['main_content']= 'contact';
		$this->load->view('includes/template',$data);
	}

	public function envio(){
		$this->load->model('Contact_Model');
		$this->form_validation->set_rules('name', 'Nombre','trim|required');
		$this->form_validation->set_rules('email', 'Email','trim|required|valid_email');
		$this->form_validation->set_rules('asunto', 'Asunto','trim|required');
		$this->form_validation->set_rules('mensaje', 'Mensaje','trim|required');

		$this->form_validation->set_message('required', 'el campo %s es Requerido' );
		$this->form_validation->set_message('valid_email', 'el campo %s no es valido' );

		if ($this->form_validation->run() == FALSE)
		{
		$this->index();
		}
		else
		{

		//var_dump($_POST);
		$name= $this->input->post('name');
		$email= $this->input->post('email');
		$asunto= $this->input->post('asunto');
		$mensaje= $this->input->post('mensaje');

		$insert = $this->Contact_Model->insert_message($name,$email,$asunto,$mensaje);

		//email confirmation
		/*$config['mailtype']= 'html';

		$this->email->initialize($config);

		$this->email->from($email, $name);
		$this->email->to('jesusbaak@hotmail.com');
		$this->email->subject($asunto);
		$this->email->message($mensaje);
		$this->email->send();*/

		$data['title'] = 'Contacto';
		$data['main_content']= 'contact';
		$data['mensaje'] = "Correo enviado correctamente, en breve nos pondremos en contacto con usted.";
		$this->load->view('includes/template',$data);


		}

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */