<div>
	<h1 style="margin-bottom: 10px ;text-align: center;border-bottom: 1px solid #ddd">اضافه کردن کاربرجدید</h1>
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
echo form_open('user/create_user',$attribute);
?>
<div class="row">
	<div class="col-md-6 form-group">
		<?php 
		$attribute= array(
			'class'=>'form-control',
			'name'=>'name',
			'placeholder'=>'نام خود را وارد کنید',
			'style'=>"margin-right:30px !important;margin-top:10px"

			);
		
		echo form_label('نام کاربر');
		echo form_input($attribute);
		?>
	</div>

	<div class="col-md-6 form-group">
		<?php 
		$attribute= array(
			'class'=>'form-control',
			'name'=>'lastname',
			'placeholder'=>'فامیلی تان را وارد کنید ',
			'style'=>"margin-right:30px !important;margin-top:10px"

			);
		
		echo form_label('تخلص');
		echo form_input($attribute);
		?>
	</div>
	<div class="col-md-6">
	<label>Photo</label>
		<input type="file" name="user_photo" class="form-control" >
	</div>
	<div class="col-md-6 form-group">
		<?php 
		$attribute= array(
			'class'=>'form-control',
			'name'=>'email',
			'placeholder'=>'ایمیل تان را وارد کنید',
			'style'=>"margin-right:30px !important;margin-top:10px"

			);
		
		echo form_label('ایمیل');
		echo form_input($attribute);
		?>
	</div>

	<div class="col-md-6 form-group">
		<?php 
		$attribute= array(
			'class'=>'form-control',
			'name'=>'phone',
			'placeholder'=>'شماره تماس تان را وارد کنید',
			'style'=>"margin-right:30px !important;margin-top:10px"

			);
		
		echo form_label('شماره تماس');
		echo form_input($attribute);
		?>
	</div>

	<div class="col-md-6 form-group">
		<?php 
		$attribute= array(
			'class'=>'form-control',
			'name'=>'user_name',
			'placeholder'=>'نام کاربری تان را وارد کنید',
			'style'=>"margin-right:30px !important;margin-top:10px"

			);
		
		echo form_label('نام کاربری');
		echo form_input($attribute);
		?>
	</div>
	<div class="col-md-6 form-group">
		<?php 
		$attribute= array(
			'class'=>'form-control',
			'name'=>'password',
			'placeholder'=>'پسورد تان را وارد کنید',
			'style'=>"margin-right:30px !important;margin-top:10px"

			);
		
		echo form_label('پسورد');
		echo form_input($attribute);
		?>
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