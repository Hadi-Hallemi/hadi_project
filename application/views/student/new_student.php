  <h1 style="margin-bottom: 10px ;text-align: center;border-bottom: 1px solid #ddd">Add Students</h1>
<div>
  <h3> Student ID:<?php echo $student_id;?></h3>
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
echo form_open('student/create_student',$attribute);
?>
  <div class="form-group col-md-6">
    <label >Name:</label>
    <input type="text" class="form-control" name="student_name" >
    <input type="hidden" name="student_id" value="<?php echo $student_id;?>">
  </div>
  <div class="form-group col-md-6">
    <label>Father Name:</label>
    <input type="text" class="form-control" name="student_fathername" >
  </div>
  <div class="form-group col-md-6">
    <label >Last Name:</label>
    <input type="text" class="form-control"  name="student_lastname">
  </div>
  
 <div class="form-group">
<!--  <label class="checkbox-inline"><input type="checkbox" name="gender" value="male">Male</label>
<label class="checkbox-inline"><input type="checkbox"  name="gender" value="female">Female</label> -->
 <label>Gentder:</label>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   Male:<input type="radio"  class="radio-inline" name="gender" value="male" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   Female:<input type="radio" class="radio-inline" name="gender" value="female">
   </div>
  

  <div class="form-group col-md-6">
    <label >Age:</label>
    <input type="number" class="form-control"  name="student_age">
  </div>
<div class="form-group col-md-6">
    <label>Phone Number:</label>
    <input type="number" class="form-control" name="student_phone">
  </div> 
  <div class="form-group col-md-6">
    <label>Addres:</label>
    <input type="text" class="form-control" name="student_address">
  </div>
  <div class="form-group col-md-6">
    <label >Education:</label>
    <input type="text" class="form-control"  name="student_education">
  </div> 

  <div class="form-group col-md-6">
    <label for="student_photo" >Photo:</label>
    <input type="file" class="form-control" name="student_photo" id="student_photo">
  </div>
  <!-- <div class="form-group col-md-6">
    <label ">is now:</label>
    <input type="text" class="form-control" name="is_now">
  </div> -->
  
 <div class="col-md-12 form-group">
    <?php 
    $attribute= array(
      'class'=>'form-control btn btn-success',
      'value'=>'Save',
      );
    
    
    echo form_submit($attribute);
    ?>
  </div>
</form>

</div>