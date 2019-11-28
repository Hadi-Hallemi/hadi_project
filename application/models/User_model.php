<?php 
	class User_model extends CI_Model{

		public function get_users($limit ,$offset){
			//$this->db->where('id',1);
		return $this->db->get('user', $limit, $offset)->result();
		}

		public function save_user($data){
			return $this->db->insert('user',$data);
		}

		public function DeleteUser($id){
			$this->db->where('id',$id);
			return $this->db->delete('user');
		}
		public function getSingleUser($id){
			$this->db->where('id',$id);
			return $this->db->get('user')->row();

		}
		public function update_user($data, $id){
			$this->db->where('id',$id);
			$this->db->update('user', $data);
		}

		public function checkLogin($username , $password){
			$this->db->where(['user_name'=>$username ,'password'=>$password]);
			return $this->db->get('user')->row();
		}
		public function search($key){
			$this->db->like('title', $key);
			$query = $this->db->get('user');
			return $query->result();
		}
	}

?>