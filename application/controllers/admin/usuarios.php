<?php

class Usuarios extends Ci_controller{
	public function __construct(){
		parent::__construct();
		//$this->load->model(array('admin/usuarios_model'));
	}

	public function index(){

	}

	public function login()
	{
		$this->load->view('admin/usuarios/index');
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