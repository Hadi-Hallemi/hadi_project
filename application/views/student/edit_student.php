  <h1 style="margin-bottom: 10px ;text-align: center;border-bottom: 1px solid #ddd">Edit Students</h1>
  <?php 
$attribute=array(
  'method'=>'post',
  'enctype'=>'multipart/form-data',
  'class'=>'user_registratoin_form'

  );
echo form_open('student/update_student',$attribute);
?>  <div class="form-group col-md-6">
    <label for="student_name">Name:</label>
    <input type="text" class="form-control" name="student_name" id="student_name" value="<?php echo $single_student->student_name;?>">
  </div>
  <div class="form-group col-md-6">
    <label for="student_fathername">Father Name:</label>
    <input type="text" class="form-control" name="student_fathername" id="student_fathername">
  </div>
  <div class="form-group col-md-6">
    <label for="student_lastname">Last Name:</label>
    <input type="text" class="form-control" id="student_lastname" name="student_lastname">
  </div>
  <br>
  <div class="form-group">
   <label>Gentder:</label>
   Male:<input type="radio" name="gender" value="male">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   Female:<input type="radio" name="gender" value="female">
   </div>
  
  <div class="form-group col-md-6">
    <label for="student_age">Age:</label>
    <input type="number" class="form-control" id="student_age" name="student_age">
  </div>
<div class="form-group col-md-6">
    <label for="student_phone">Phone Number:</label>
    <input type="number" class="form-control" id="student_phone" name="student_phone">
  </div> 
  <div class="form-group col-md-6">
    <label for="student_address">Addres:</label>
    <input type="text" class="form-control" id="student_address" name="student_address">
  </div>
  <div class="form-group col-md-6">
    <label for="student_education">Education:</label>
    <input type="text" class="form-control" id="student_education" name="student_education">
  </div> 

  <div class="form-group col-md-6">
    <label for="photo">Photo:</label>
    <input type="file" class="form-control" id="photo" name="photo">
  </div>
  <div class="form-group col-md-6">
    <label for="is_now">is now:</label>
    <input type="text" class="form-control" id="is_now" name="is_now">
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
</form>