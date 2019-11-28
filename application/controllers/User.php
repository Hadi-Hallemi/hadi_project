<?php 
	class User extends CI_Controller{ 

		function __consrtuct(){
			parent::__consrtuct();
			$this->load->model('User_model');
				$this->lang->load('label',$this->session->userdata['language']);
			
		}
		public function user_list(){
			$offset=$this->uri->segment(3);

			if(!$this->session->userdata('language')){
					$this->lang->load('label','english');
				}
				else{
				$this->lang->load('label',$this->session->userdata['language']);
				}
				
			 $config['total_rows']=$this->db->count_all('user');
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
				$config['per_page']=3;
				$config['base_url']=base_url().'index.php/user/user_list';
					$this->pagination->initialize($config);

				
				$data['main_content']='user/user_list_view';
			$this->load->model('User_model');
		$data['users']=$this->User_model->get_users($config['per_page'],$offset);

			

			$this->load->view('layout/main', $data);
		}

		public function add_user(){
			$data['main_content']='user/new_user';
			$this->load->view('layout/main',$data);
		}
		public function create_user(){
				$this->load->model('User_model');
			$name = $this->input->post('name');
			$lastname = $this->input->post('lastname');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$username = $this->input->post('user_name');
			$password = $this->input->post('password');

			$validate = array(
				array(
					'field'=>'name',
					'label'=>'First Name',
					'rules'=>'required'
					),
				array(
					'field'=>'lastname',
					'label'=>'Last Name',
					'rules'=>'required'
					),
				array(
					'field'=>'email',
					'label'=>'Email',
					'rules'=>'required'
					),
				// array(
				// 	'field'=>'phone',
				// 	'label'=>'Phone',
				// 	'rules'=>'required|number|min_length[10]'
				// 	),
				array(
					'field'=>'user_name',
					'label'=>'User Name',
					'rules'=>'required|min_length[5]|is_unique[user.user_name]'
					),
				array(
					'field'=>'password',
					'label'=>'Password',
					'rules'=>'required|min_length[6]'
					),

				);

			$this->load->library('form_validation');
			$this->form_validation->set_rules($validate);

			if($this->form_validation->run()==false){
				echo validation_errors();
				$this->session->set_flashdata('validation',validation_errors());
				redirect('user/add_user');
				// return false;
				
			}

				if($_FILES['user_photo']['name']){
					$config['file_name']=time();
					$config['allowed_types']='jpg|png|jpeg';
					$config['upload_path']='upload_image/user_image';
					$config['max_size']=3000;

					$this->load->library('upload');
					$this->upload->initialize($config);

					if($this->upload->do_upload('user_photo')){
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
				'name'=>$name,
				'lastname'=>$lastname,
				'email'=>$email,
				'phone'=>$phone,
				'user_name'=>$username,
				'password'=>$password,
				'photo'=>$photo_name,
				'created_by'=>$this->session->userdata['user_id']
				);
			 $this->User_model->save_user($data);
			 redirect('user/user_list');
		}
		
		function user_delete($id){
		$this->load->model('User_model');
		$this->User_model->DeleteUser($id);
			
		redirect('user/user_list');
		}
		public function edit_user($id){
			$this->load->model('User_model');
		$data['single_user']=$this->User_model->getSingleUser($id);
		$data['main_content']='user/edit_user';
	//print_r($data['single_user']);
		$this->load->view('layout/main',$data );
		}

		public function update_user(){

			$this->load->model('User_model');
			$name = $this->input->post('name');
			$lastname = $this->input->post('lastname');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$username = $this->input->post('user_name');
			$password = $this->input->post('password');
			$id=$this->input->post('user_id');

			$data=array(
				'name'=>$name,
				'lastname'=>$lastname,
				'email'=>$email,
				'phone'=>$phone,
				'user_name'=>$username,
				
				);
			if($password !=""){
				$data['password']=$password;
			}else{
				
			}  
			$this->User_model->update_user($data,$id);
			redirect('user/user_list'); 
		}
		function change_language($lan){
			$this->session->set_userdata('language', $lan);
			//echo $this->session->userdata['language'];
			redirect($_SERVER['HTTP_REFERER']);
		}
		public function skeyword(){
		$key =$this->input->post('title');
		$data['users']=$this-> User_model->search($key);
		$this->load->view('skeyview' ,$data);
		}
	

}
?>  