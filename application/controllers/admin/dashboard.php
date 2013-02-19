<?php

class Dashboard extends Ci_controller{
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data= array(
			'content'=>'usuarios/index_view',
			'titulo'=>'Administrador | CMS Codeigniter',
			'metadescription'=>'Administrador del sistema CMS con  Codeigniter'
			'keywords'=>'Codeigniter, español, CMS Codeigniter'
			);
		$this->load->view('themes/admin/template',$data);
	}
}