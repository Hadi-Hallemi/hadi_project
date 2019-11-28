<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Jamatul Quran Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url(); ?>assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" />
    <?php if($this->session->userdata('language') and $this->session->userdata('language')!='english' ){ ?>
    <link href="<?php echo base_url(); ?>assets/css/rtl.css" rel="stylesheet" />
    <?php }?>
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Jamatul Quran </a> 
            </div>
           <?php 
           if($this->session->userdata['is_logedin']!=true){
            redirect('/');
           }

           ?>

  <div  class="language-bar" style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px; "> Management System of Jamatul Quran  &nbsp;
<?php
  $attr=array(
  'class'=>"btn btn-danger square-btn-adjust",
  'style'=>"float: right ; margin-right:5px"
  );
 echo anchor('welcome/logout' ,'Logout', $attr);
  ?>
 
  <ul style="float:right; list-style-type: none">
    <li style="float: right;margin-right: 10px"><?php echo anchor('user/change_language/english','English') ?></li>
    <li style="float: right;margin-right: 10px"><?php echo anchor('user/change_language/persian','Persian') ?></li>
    <li style="float: right;margin-right: 10px"><?php echo anchor('user/change_language/arabic','Arabic') ?></li>

  </ul>


</div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">

                <?php 
              
                if( $this->session->userdata('photo')=='' or $this->session->userdata('photo')==null or $this->session->userdata('photo')=='default.jpg'){?>
                    <img  style="width:120px;margin-bottom: 5px" src="<?php echo base_url(); ?>/upload_image/default.jpg" class="user-image img-responsive"/>
                    <?php
                     }
                     else{
                     ?>
                     <img  style="width:120px;margin-bottom: 15px" src="<?php  echo base_url();?>/upload_image/user_image/<?php echo $this->session->userdata('photo'); ?>"
                     
                     <?php 
                     }
                     ?>
                     <p style="margin-top: 0px;color: #fff">
                         <?php echo $this->session->userdata('user_name'); ?>
                     </p>
                    </li>
                    <li>
                    <?php echo anchor('/', '<i class="fa fa-dashboard fa-3x"> </i>Dashboard'); ?>
                        <!-- <a class="active-menu"  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a> -->

                    </li>
                     <li>
                     
                         <a   href="chart.html"><i class="fa fa-user fa-3x"></i>USERS</a>
                        <!-- <a  href="ui.html"><i class="fa fa-desktop fa-3x"></i> UI Elements</a> -->
                        <ul class="nav nav-second-level">
                            <li>
                                <?php echo anchor('user/user_list','<i class="fa fa-desktop fa-3x"></i> User List');?>
                            </li>
                            <li>
                                 <?php echo anchor('user/add_user','<i class="fa fa-user fa-3x"></i>New User' ); ?>
                            </li>
                          </ul> 
                    </li>
                    <li>
                      <?php echo anchor('role/view_roles','<i class="fa fa-desktop fa-3x"></i> View Roles');?>
                    </li>
                    
                    
                    <li >
                       <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Enroll</a>
                        <ul class="nav nav-second-level">
                            <li>
                            <?php echo anchor('student/enroll', '<i class="glyphicon glyphicon-registration-mark glyphicon-3x">
                         </i>Enroll'); ?>
                            </li>
                            <li>
                            <?php echo anchor('student/list_enroll', '<i class="glyphicon glyphicon-list">
                        </i>Enroll List') ?>
                            </li>
                          </ul> 
                    </li> 
                       
                    </li> 
                    <li >
                       <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Students </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <?php echo anchor('student/student_list','<i class="fa fa-desktop fa-3x"></i>Student List');?>
                            </li>
                            <li>
                                 <?php echo anchor('student/add_student','<i class="fa fa-user fa-3x"></i>New Student' ); ?>
                            </li>
                          </ul> 
                    </li> 
                   
                                       
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i>Teachers<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <?php echo anchor('teacher/teacher_list','<i class="fa fa-desktop fa-3x"></i> Teacher List');?>
                            </li>
                            <li>
                                 <?php echo anchor('teacher/add_teacher','<i class="fa fa-user fa-3x"></i>New Teacher' ); ?>
                            </li>
                          </ul> 
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  <li  >
                        <a  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>   
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">

                 <?php $this->load->view($main_content); ?>
                 
            </div>          
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="<?php echo base_url(); ?>assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
    
   
</body>
</html>
