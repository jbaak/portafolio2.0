<?php

class Usuarios extends Ci_controller{
	public function __construct(){
		parent::__construct();
		$this->load->library(array('session','form_validation'));
		//$this->load->model(array('admin/usuarios_model'));
	}

	public function index(){

		if($this->session->userdata('is_logued_in'))
		{

		}else{
			
			redirect(base_url().'admin/usuarios/login');
		}

	}

	public function login()
	{
		if($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token'))
        {
        	echo "hizo post";exit;
            $this->form_validation->set_rules('username', 'nombre de usuario', 'required|trim|min_length[2]|max_length[150]|xss_clean');
            $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[5]|max_length[150]|xss_clean');
 
            //lanzamos mensajes de error si es que los hay
            $this->form_validation->set_message('required', 'El %s es requerido');
            $this->form_validation->set_message('min_length', 'El %s debe tener al menos %s carácteres');
            $this->form_validation->set_message('max_length', 'El %s debe tener al menos %s carácteres');
            if($this->form_validation->run() == FALSE)
            {
                $this->index();
            }else{
                $username = $this->input->post('username');
                $password = sha1($this->input->post('password'));
                $check_user = $this->login_model->login_user($username,$password);
                if($check_user == TRUE)
                {
                    $data = array(
                    'is_logued_in'  =>       TRUE,
                    'id_usuario'    =>       $check_user->id,
                    'perfil'        =>       $check_user->perfil,
                    'username'      =>       $check_user->username
                    );
                    $this->session->set_userdata($data);
                    $this->index();
                }
            }
        }else{
            $data['title'] = 'dashboard';
             $data['token'] = $this->token();
			$data['main_content'] = 'admin/usuarios/login';
			$this->load->view('admin/includes/template',$data);

        }
		
		
	}

	public function token()
    {
        $token = md5(uniqid(rand(),true));
        $this->session->set_userdata('token',$token);
        return $token;
    }

     public function logout_ci()
    {
        $this->session->sess_destroy();
        $this->index();
    }

	/*public function crear()
	{
		if($this->form_validation->run('usuarios_crear')){

		}else{
			$data= array(
			'content'=>'admin/usuarios/crear_view',
			'titulo'=>'Crear usuarios | CMS Codeigniter',
			'metadescription'=>'',
			'keywords'=>'Codeigniter, español, CMS Codeigniter'
			);
			$this->load->view('themes/admin/template',$data);
		}
		
	}*/

	public function editar($id_usuario)
	{
		
	}

	public function desactivar($id_usuario)
	{
		
	}

	public function activar($id_usuario)
	{
		
	}

	public function logout()
	{
		
	}
}