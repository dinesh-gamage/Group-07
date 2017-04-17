<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo base_url()."Index1"?>">Home</a></li>
						<li><i class="icon_documents_alt"></i>Pages</li>
						<li><i class="fa fa-user-md"></i>Profile</li>
					</ol>
				</div>
			</div>
          <!-- page start-->
          <div class="row">
             <div class="col-lg-12">
                <section class="panel">
                      <header class="panel-heading tab-bg-info">
                          <ul class="nav nav-tabs">
                              <li class="active">
                                  <a data-toggle="tab" href="#profile">
                                      <i class="icon-user"></i>
                                      Profile
                                  </a>
                              </li>
                              <li class="">
                                  <a data-toggle="tab" href="#edit-profile">
                                      <i class="icon-envelope"></i>
                                      Edit Profile
                                  </a>
                              </li>
                          </ul>
                      </header>
                      <div class="panel-body">
                          <div class="tab-content">
                              <!-- profile -->
                              <div id="profile" class="tab-pane active">
                                <section class="panel">
                                  <!--div class="bio-graph-heading">
                                            Hello I’m Jenifer Smith, a leading expert in interactive and creative design specializing in the mobile medium. My graduation from Massey University with a Bachelor of Design majoring in visual communication.
                                  </div-->
                                  <div class="panel-body bio-graph-info">
                                      <!--h1>Bio Graph</h1-->
                                      <?php foreach ($records as $row):?>
                                      <div class="row">
                                          <div class="bio-row">
                                              <p><span>Name </span>: <?=$row->doc_name?> </p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>Email</span>: <?=$row->email?></p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>Specialist For </span>: <?=$row->speciality?></p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>Mobile </span>:<?= $row->telephone ?></p>
                                          </div>
                                      </div>
                                      <?php endforeach;?>
                                  </div>
                                </section>
                                  <section>
                                      <div class="row">
                                      </div>
                                  </section>
                              </div>
                              <!-- edit-profile -->
                              <div id="edit-profile" class="tab-pane">
                                <section class="panel">
                                      <div class="panel-body bio-graph-info">
                                          <h1> Profile Info</h1>

                                          <?php foreach ($records as $row):?>

                                          <?php
                                              $lable= array(
                                                  'class'=>'col-lg-2 control-label'
                                              );
                                              $name = array(
                                                  'id'=>'name',
                                                  'class'=>'form-control',
                                                  'name'=>'doc_name',
                                                  'value'=>$row->doc_name,
                                                  'required'=>'required'
                                              );
                                              $cpass = array(
                                                  'id'=>'cpass',
                                                  'class'=>'form-control',
                                                  'name'=>'cpass',
                                              );
                                              $pass = array(
                                                  'id'=>'pass',
                                                  'class'=>'form-control',
                                                  'name'=>'doc_pass',

                                              );
                                              $currpass = array(
                                                  'id'=>'curpass',
                                                  'class'=>'form-control',
                                                  'name'=>'curpass',
                                              );
                                              $contact = array(
                                                  'id'=>'contact',
                                                  'class'=>'form-control',
                                                  'name'=>'contact',
                                                  'value'=>$row->telephone,
                                                  'required'=>'required'
                                              );
                                              $sprcial = array(
                                                  'id'=>'special',
                                                  'class'=>'form-control',
                                                  'name'=>'special',
                                                  'value'=>$row->speciality,
                                                  'required'=>'required'
                                              );
                                              $email = array(
                                                  'id'=>'email',
                                                  'class'=>'form-control',
                                                  'name'=>'email',
                                                  'value'=>$row->email,
                                                  'required'=>'required'
                                              );
                                              $submit = array(
                                                  'id'=>'submitbtn',
                                                  'class'=>'form-control',
                                                  'name'=>'update',
                                                  'value'=>'Save',
                                                  'class'=>'btn btn-primary'
                                              );
                                              $imageprop = array(
                                                  'id'=>'browse',
                                                  'name'=>'userfile'
                                              );
                                              $imag_function = 'onChange="previewFile()"';

                                              $formopendoc = array(
                                                  'class'=> 'form-horizontal'
                                              );
                                          ?>
                                              <?php echo form_open_multipart('Profile',$formopendoc)?>
                                              <div class="">
                                                  <div class="form-group">
                                                      <?php echo form_label('First Name','',$lable)?>
                                                      <div class="col-lg-6">
                                                          <?php echo  form_input($name);?>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <?php echo form_label('Current Password','',$lable)?>
                                                      <div class="col-lg-6">
                                                          <?php echo form_password($currpass)?>
                                                          <div id="messagecurr"></div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <?php echo form_label('Password','',$lable)?>
                                                      <div class="col-lg-6">
                                                          <?php echo  form_input($pass);?>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <?php echo form_label('Confirm Password','',$lable)?>
                                                      <div class="col-lg-6">
                                                          <?php echo  form_input($cpass);?>
                                                          <div id="message"></div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <?php echo form_label('Contact','',$lable)?>
                                                      <div class="col-lg-6">
                                                          <?php echo  form_input($contact);?>
                                                          <div id="checktel"></div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <?php echo form_label('Special For','',$lable)?>
                                                      <div class="col-lg-6">
                                                          <?php echo  form_input($sprcial);?>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <?php echo form_label('Email','',$lable)?>
                                                      <div class="col-lg-6">
                                                          <?php echo  form_input($email);?>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <?php echo form_label('Profile Image','',$lable)?>
                                                      <div class="col-lg-6">

                                                          <img src="<?php echo $row->doc_img ?>" id="bro_img" class="img-responsive" style="height:100px;width:150px;border: 1px solid gray" />
                                                          <br/>
                                                          <?php echo  form_upload($imageprop,'',$imag_function);?>
                                                      </div>
                                                  </div>

                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10" style="float: right;">
                                                          <?php echo form_submit($submit);?>
                                                      </div>
                                                  </div>
                                                  <?php endforeach;?>
                                             </div>
                                          <?php echo form_close()?>
                                      </div>
                                    <?php echo $this->session->flashdata('msgsuccess'); ?>
                                  </section>
                              </div>
                          </div>
                      </div>
                  </section>
             </div>
          </div>

          <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <script >

      function previewFile(){
          var preview = document.querySelector('#bro_img'); //selects the query named img
          var file    = document.querySelector('input[type=file]').files[0]; //sames as here
          var reader  = new FileReader();
          reader.onloadend = function () {
              preview.src = reader.result;
          }
          if (file) {
              reader.readAsDataURL(file); //reads the data as a URL
          } else {
              //preview.src = ;
          }
      }
      previewFile();  //calls the function named previewFile()


      $(document).ready(function (){
          $('#cpass').keyup(function(){
              if($('#curpass').val()!="" && $('#pass').val()!=""){
                  if($(this).val()!= $('#pass').val()){
                     // document.getElementById('submitbtn').disabled = true;
                      $('#message').html('password and confirm password not match').css('color','red');
                  }else{
                 //     document.getElementById('submitbtn').disabled = false;
                      $('#message').html('match').css('color','green');
                  }
              }else if($('#curpass').val()=="" && $('#pass').val()==""){
                  $('#message').html(' ');
              }else{
                  //document.getElementById('submitbtn').disabled = true;
                  $('#message').html('please fill current password').css('color','red');
              }
          });

          $('#curpass').keyup(function (){
              var curr = $(this).val();
              $.ajax({
                  type: "post",
                  url: "http://[::1]/Third_Year_Project/NiceAdmin/Profile/index/",
                  cache: false,
                  data: {curpass: curr},
                  success: function (data) {
                      if(data.substring(0,4) =="true"){
                          $('#messagecurr').html('match!!!').css('color','green');
                      }else{
                          $('#messagecurr').html('This is not current password!!!').css('color','red');
                         // document.getElementById('submitbtn').disabled = true;
                      }
                  }

              });


          });

          $('#contact').keyup(function(){
              var reg1 = /^[0-9]{10}$/;
              var reg2 = /^[0-9]{7}$/;
              if((reg1.test($(this).val())) || (reg2.test($(this).val()))){
                  $('#checktel').html('');
                  document.getElementById('submitbtn').disabled = false ;
              }else{
                  document.getElementById('submitbtn').disabled = true ;
                  $('#checktel').html('Please Enter a Valid Contact Number!!!').css('color', 'red');
              }
          });
      });

  </script>

  <!-- container section end -->
    <!-- javascripts -->
    <script src="<?php echo base_url()."asserts/js/jquery.js"?>"></script>
    <script src="<?php echo base_url()."asserts/js/bootstrap.min.js"?>"></script>
    <!-- nice scroll -->
    <script src="<?php echo base_url()."asserts/js/jquery.scrollTo.min.js"?>"></script>
    <script src="<?php echo base_url()."asserts/js/jquery.nicescroll.js"?>" type="text/javascript"></script>
    <!-- jquery knob -->
    <script src="<?php echo base_url()."asserts/assets/jquery-knob/js/jquery.knob.js"?>"></script>
    <!--custome script for all page-->
    <script src="<?php echo base_url()."asserts/js/scripts.js"?>"></script>

  <script>

      //knob
      $(".knob").knob();

  </script>


  </body>
</html>
