<?php
	class Student_model extends CI_Model{

		public function get_students($limit,$offset){
			$this->db->select('*')->from('students')->limit($limit,$offset);

			return $this->db->get()->result();
		}

		public function save_student($data){
			return $this->db->insert('students',$data);
		}
		public function DeleteStudent($id){
			$this->db->where('student_id',$id);
			return $this->db->delete('students');
		}
		public function getSingleStudent($id){ 
			$this->db->where('student_id',$id);
			return $this->db->get('students')->row();

		}
		public function update_student($data,$id){
			$this->db->where('student_id',$id);
			$this->db->update('students', $data);
		}
	}








 ?>