<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Projects_Model extends CI_Model{

	function __construct(){
			parent::__construct();
	}

	public function get_projects($desde = null){
		if(isset($desde)){
			$desd= $desde;
		}else{
			$desd= 0;
		}
		
		return  $this->db->query("select * from projects limit $desd, 6");
	}

	public function total(){
		$query = $this->db->query("select * from projects");
		return $query->num_rows();
	}
}

