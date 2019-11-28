
<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
</head>

<body >


<h1 style="margin-bottom: 10px ;text-align: center;border-bottom: 1px solid #ddd">Login page</h1>

  <div class="container">
  <?php 
  
  $attribute = array(
      'method'=>'post',
      'enctype'=>'multipart/form-data',
      'class'=>'user_registration_form'

    );
 echo form_open('welcome/check_login', $attribute);
?>
<div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>
<div class="container">

  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
   
       <p>UserName:<input type="text"  class="form-control" name="username"  placeholder="Enter Your Username Or Password" required></p>
        <p>Password:<input type="password" class="form-control " name="password" placeholder="**********"  required></p>
     
        <p class="submit  "><input type="submit"  class="form-control btn btn-primary"name="commit" value="Login"></p>
   </div>
    <div class="col-md-2">
      
    </div>
  </div>

</div>
  <?php 
  echo form_close();
  ?>
  <h3>
    <?php 
      echo $this->session->flashdata('msg');
    ?>
  </h3>
  </div>
  </body>
</html>