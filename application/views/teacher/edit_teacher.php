<div>
	<h1 style="margin-bottom: 10px ;text-align: center;border-bottom: 1px solid #ddd">Add New Teacher</h1>
	<div>
		<?php 
		echo $this->session->userdata('validation');
		?>
	</div>
	<?php 
$attribute=array(
	'method'=>'post',
	'enctype'=>'multipart/form-data',
	'class'=>'user_registratoin_form'

	);
echo form_open('teacher/create_teacher',$attribute);
?>
<div class="row">
	<div class="col-md-6 form-group">
		<?php 
		$attribute= array(
			'class'=>'form-control',
			'name'=>'teacher_name',
			'placeholder'=>'Enter Your Name!',
			'style'=>"margin-right:30px !important;margin-top:10px"

			);
		
		echo form_label('Name');
		echo form_input($attribute);
		?>
	</div>

	<div class="col-md-6 form-group">
		<?php 
		$attribute= array(
			'class'=>'form-control',
			'name'=>'teacher_fathername',
			'placeholder'=>'Enter Your Father Name! ',
			'style'=>"margin-right:30px !important;margin-top:10px"

			);
		
		echo form_label('Father Name');
		echo form_input($attribute);
		?>
	</div>

	<div class="col-md-6 form-group">
		<?php 
		$attribute= array(
			'class'=>'form-control',
			'name'=>'teacher_lastname',
			'placeholder'=>'Enter Your Last Name! ',
			'style'=>"margin-right:30px !important;margin-top:10px"

			);
		
		echo form_label('LastName');
		echo form_input($attribute);
		?>
	</div>

	<div class="form-group">
		<label>Gentder:</label>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   Male:<input type="radio"  class="radio-inline" name="teacher_gender" value="male" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   Female:<input type="radio" class="radio-inline" name="tacher_gender" value="female">
	</div>
	<div class="col-md-6">
	<label>Photo</label>
		<input type="file" name="teacher_photo" class="form-control" >
	</div>
	<div class="col-md-6">
	<label>Age</label>
		<input type="number" name="teacher_age" class="form-control" required >
	</div>
	<div class="col-md-6">
	<label>Phone</label>
		<input type="number" name="teacher_phone" class="form-control" required >
	</div>

	<div class="col-md-6 form-group">
		<?php 
		$attribute= array(
			'class'=>'form-control',
			'name'=>'education',
			'placeholder'=>'Enter Your Education degree!',
			'style'=>"margin-right:30px !important;margin-top:10px"

			);
		
		echo form_label('Education');
		echo form_input($attribute);
		?>
	</div>

	
	</div>
	<div class="col-md-12 form-group">
		<?php 
		$attribute= array(
			'class'=>'form-control btn btn-success',
			'value'=>'Submit',
			
			
		
			);
		
		
		echo form_submit($attribute);
		?>
	</div>


</div>
<?php
echo form_close();
?>
</div>