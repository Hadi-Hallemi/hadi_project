<?php 
	class Teacher_model extends CI_Model{

		public function get_teachers(){
			return $this->db->get('teachers')->result();
		}
		public function save_teacher($data){
			return $this->db->insert('teachers',$data);
		}
		public function DeleteTeacher($id){
			$this->db->where('teacher_id',$id);
			return $this->db->delete('teachers');
		}
		public function getSingleTeacher($id){
			$this->db->where('teacher_id',$id);
			return $this->db->get('teachers')->row();

		}
		public function updateTeacher($data,$id){
			$this->db->where('teacher_id',$id);
			$this->db->update('teachers', $data);
		}
	}



?>