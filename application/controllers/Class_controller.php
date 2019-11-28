<?php 
class Class_controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
	$this->load->model('Class_model');
	}
	public function class_list(){
		// $this->load->model('Class_model');
		//$this->load->model('Teacher_model');
		//$data['students']=$this->Student_model->get_students();
		echo "TEst";
		$data['class']=$this->Class_model->get_class();
		$data['main_content']='class/class_list_view';
		return $this->load->view('layout/main',$data);
	}	
	public function add_class(){
		$data['main_content']='class/new_class';
			$this->load->view('layout/main',$data);
	}	
	public function class_delete($id){
		$this->load->model('Class_model');
		$this->Class_model->DeleteTeacher($id);
		redirect('class/class_list');
	}
}

?>