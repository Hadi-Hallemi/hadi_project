<div>
	<h1 style="margin-bottom: 10px ;text-align: center;border-bottom: 1px solid #ddd">Edit User</h1>
	<?php 
$attribute=array(
	'method'=>'post',
	'enctype'=>'multipart/form-data',
	'class'=>'user_registratoin_form'

	);
echo form_open('user/update_user',$attribute);
?>
<input type="hidden" name="user_id" value="<?php echo $single_user->id ;?>">
<div class="row">
	<div class="col-md-6 form-group">
		<?php 
		$attribute= array(
			'class'=>'form-control',
			'name'=>'name',
			'placeholder'=>'نام خود را وارد کنید',
			'value'=>$single_user->name,

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
			'value'=>$single_user->lastname

			);
		
		echo form_label('تخلص');
		echo form_input($attribute);
		?>
	</div>
	<div class="col-md-6 form-group">
	<label>Photo</label>
		<input type="file" name="user_photo" class="form-control" value="$single_user->email" >

	</div>
	<div class="col-md-6 form-group">
		<?php 
		$attribute= array(
			'class'=>'form-control',
			'name'=>'email',
			'placeholder'=>'ایمیل تان را وارد کنید',
			'value'=>$single_user->email

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
			'value'=>$single_user->email

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
			'value'=>$single_user->user_name

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
			'value'=>$single_user->password

			);
		
		echo form_label('پسورد');
		echo form_input($attribute);
		?>
	</div>
	</div>
		<?php 
			echo form_submit(['class'=>'btn btn-success','value'=>'Submit']);
		?>


<?php
echo form_close();
?>
</div>