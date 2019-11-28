<?php 
	class role_model extends CI_Model{

		public function get_roles(){
		return $this->db->get('roles')->result();

		}
		public function createRole($data){
		return $this->db->insert('roles',$data);
		}
		public function get_last_role_id(){
				$this->db->order_by('id' ,'DESC');
		return $this->db->get('roles')->row()->id();	
		}

		public function insertPermission($data){
			return $this->db->inser('role_has_permission',$data);

		}
		public function delete_role($id){
			$this->db->where('id',$id);
			$this->db->delete('roles');

			$this->db->where('role_id', $id);
			return $this->db->delete('role_has_permission');
		}
		public function singleRole($id){
			$this->db->where('id',$id);
			return $this->db->get('roles')->row();

		}
		public function roleHasPermission($role_id, $per_id){
			$this->db->where('role_id', $role_id);
			$this->db->where('permission_id', $per_id);
			return count($this->db->get('role_has_permission')->result());
		}
		public function updateRole($data ,$id){
			$this->db->where('id', $id );
			return $this->db->update('roles',$data);
		}
		public function deleteOldPermission($id){
			$this->db->where('role_id',$id);
			$this->db->delete('role_has_permission');
		}
	}


?>