<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_Model extends CI_Model{

	public function insert_message($name,$email,$asunto,$mensaje){
		$data= array(
				'nombre' =>$name,
				'email'=>$email,
				'asunto'=>$asunto,
				'mensaje'=>$mensaje,
				'fecha'=>'now()'
			);

			return $this->db->insert('contact',$data);

	}
		
	

}
 ?>