<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Projects_Model extends CI_Model{

	function __construct(){
			parent::__construct();
	}

	public function get_projects(){
		
		return  $this->db->query("select * from projects");
	}
}

