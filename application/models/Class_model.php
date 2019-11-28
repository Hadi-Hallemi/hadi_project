<?php 
class Class_model extends CI_Model{

	public function get_class(){
			return $this->db->get('class')->result();
		}
	public function save_class($data){
			return $this->db->insert('class',$data);
		}
}


?>