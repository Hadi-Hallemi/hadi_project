<?php 
class Student extends CI_Controller{
function __consrtuct(){
			parent::__consrtuct();
			$this->load->model('Student_model');
			$this->lang->load('label', $this->session->userdata['language']);
		}
public function student_list($start=0) {
			$this->load->model('Student_model');
			$offset=$this->uri->segment(3);

			if(!$this->session->userdata('language')){
					$this->lang->load('label','english');
				}
				else{
				$this->lang->load('label',$this->session->userdata['language']);
				}
				
			 $config['total_rows']=$this->db->count_all('students');
			 $config['full_tag_open'] = '<ul class="pagination">';
			$config['full_tag_close'] = '</ul>';
			$config['first_link'] = false;    
			$config['last_link'] = false;
			$config['first_tag_open'] = '<li class="page-item">';
			$config['first_tag_close'] = '</li>';
			$config['prev_link'] = '&laquo';
			$config['prev_tag_open'] = '<li class="page-item prev">';
			$config['prev_tag_close'] = '</li>';
			$config['next_link'] = '&raquo';
			$config['next_tag_open'] = '<li class="page-item">';
			$config['next_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li class="page-item">';
			$config['last_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="page-item active"><a href="page-link">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li class="page-item">';
			$config['num_tag_close'] = '</li>';
				$config['per_page']=6;
				
				$config['base_url']=base_url().'index.php/student/student_list';
					$this->pagination->initialize($config);	
	$data['main_content']='student/student_list_view';
	$data['students']=$this->Student_model->get_students($config['per_page'],$offset);
		return $this->load->view('layout/main',$data);  

	
	}

	function enroll() {
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			//save
			$data = [
				'student_id'=> $this->input->post('s_id'),
				'class_id'	=> $this->input->post('class'),
				'started_date'	=> $this->input->post('date')
			];
			$this->db->insert('enrollment',$data);
			redirect('student/list_enroll');
		}else {
			$data['classes'] = $this->db->get('class')->result_array();
			$data['main_content']='student/enroll';
		return $this->load->view('layout/main',$data);  
		}
	}
	function list_enroll(){
		$q = $this->db->query("SELECT * from enrollment as e,class as c, students as s where e.student_id=s.student_id and e.class_id=c.class_id");
		$data['enrollment']=$q->result();
		$data['main_content']='student/list_enrollement';
		$this->load->view('layout/main',$data);
	}
	public function add_student(){
		$studentCount= $this->db->count_all('students'); 
		if($studentCount>0){
          $this->db->order_by('student_id','DESC');
         $id= $this->db->get('students')->row()->student_id;
         $data['student_id']=$id+1;
		}
		else{
			$data['student_id']=1001;
		}
		$data['main_content']='student/new_student';
		$this->load->view('layout/main',$data);
	}
	public function student_delete($id){
		$this->load->model('Student_model');
		$this->Student_model->DeleteStudent($id);
		redirect('student/student_list');
	}
	public function edit_student($id){
		$this->load->model('Student_model');
		$data['single_student']=$this->Student_model->getSingleStudent($id);
		$data['main_content']='student/edit_student';
		$this->load->view('layout/main', $data);
		//print_r($data['single_user']);
	}
	public function create_student(){
				$this->load->model('Student_model');
			$name = $this->input->post('student_name');
			$fname = $this->input->post('student_fathername');
			$lastname = $this->input->post('student_lastname');
			$gender = $this->input->post('gender');
			$age = $this->input->post('student_age');
			$phone = $this->input->post('student_phone');
			$address = $this->input->post('student_address');
			$photo = $this->input->post('photo');
			$edu = $this->input->post('student_education');
			$is_now = $this->input->post('is_now');
			$studentId = $this->input->post('student_id');
			$validate = array(
				array(
					'field'=>'student_name',
					'label'=>'First Name',
					'rules'=>'required'
					),
				array(
					'field'=>'student_fathername',
					'label'=>'Father Name',
					'rules'=>'required'
					),
				array(
					'field'=>'student_lastname',
					'label'=>'Last Name',
					'rules'=>'required'
					),
				array(
					'field'=>'gender',
					'label'=>'Gender',
					'rules'=>'required'
					),
				array(
					'field'=>'student_age',
					'label'=>'Age',
					'rules'=>'required'
					),
				array(
					'field'=>'student_phone',
					'label'=>'Phone',
					'rules'=>'required|min_length[10]'
					),
				array(
					'field'=>'student_address',
					'label'=>'Address',
					'rules'=>'required'
					),
				array(
					'field'=>'student_education',
					'label'=>'Education',
					'rules'=>'required'
					),
				 array(
					'field'=>'photo',
					'label'=>'Photo',
					//'rules'=>'required'
					),

				);

			$this->load->library('form_validation');
			$this->form_validation->set_rules($validate);

			if($this->form_validation->run()==false){
				//echo validation_errors();
				$this->session->set_flashdata('validation',validation_errors());
				redirect('student/add_student');
			}

				if($_FILES['student_photo']['name']){
					$config['file_name']=time();
					$config['allowed_types']='jpg|png|jpeg|gif';
					$config['upload_path']='upload_image/student_image';
					$config['max_size']=3000;

					$this->load->library('upload');
					$this->upload->initialize($config);

					if($this->upload->do_upload('student_photo')){
						$uploadData=$this->upload->data();
						$photo_name= $uploadData['file_name'];
					}
					else{
						echo "Something is wrong";
					}
				}else{
			$photo_name="default.jpg";
				}

			$data = array(
				'student_id'=>$studentId,
				'student_name'=>$name,
				'student_fathername'=>$fname,
				'student_lastname'=>$lastname,
				'gender'=>$gender,
				'student_age'=>$age,
				'student_phone'=>$phone,
				'student_phone'=>$phone,
				'student_address'=>$address,
				'student_education'=>$edu,
				'is_now'=>$is_now,
				'photo'=>$photo_name,
				);
			 $this->Student_model->save_student($data);
			 redirect('student/student_list');
		}
}


?>