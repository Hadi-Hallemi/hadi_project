<?php 
	class Teacher extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Teacher_model');
		}
	public function teacher_list(){
		//$this->load->model('Teacher_model');
		//$data['students']=$this->Student_model->get_students();
		$data['teachers']=$this->Teacher_model->get_teachers();
		$data['main_content']='teacher/teacher_list_view';
		return $this->load->view('layout/main',$data);
	}
	public function add_teacher(){
		$data['main_content']='teacher/new_teacher';
			$this->load->view('layout/main',$data);
	}
	public function teacher_delete($id){
		$this->load->model('Teacher_model');
		$this->Teacher_model->DeleteTeacher($id);
		redirect('teacher/teacher_list');
	}
	public function edit_teacher($id){
		$this->load->model('Teacher_model');
		$data['single_teacher']=$this->Teacher_model->getSingleTeacher($id);
		$data['main_content']='teacher/edit_teacher';
		$this->load->view('layout/main', $data);
		//print_r($data['single_user']);
	}
	public function create_teacher(){
		$this->load->model('Teacher_model');
		$tname=$this->input->post('teacher_name');
		$tfname=$this->input->post('teacher_fathername');
		$tlname=$this->input->post('teacher_lastname');
		$tgender=$this->input->post('teacher_gender');
		$tphone=$this->input->post('teacher_phone');
		$tphoto=$this->input->post('teacher_photo');
		$tedu=$this->input->post('education');
		$tsalary=$this->input->post('teacher_salary');
		

		$data = array(
			'teacher_name'=>$tname,
			'teacher_fathername'=>$tfname,
			'teacher_lastname'=>$tlname,
			'teacher_gender'=>$tgender,
			'teacher_photo'=>$tphoto,
			'teacher_phone'=>$tphone,
			'education'=>$tedu,
			'teacher_salary'=>$tsalary

			);
		$this->Teacher_model->save_teacher($data);
		redirect('teacher/teacher_list');
	}
	}


?>