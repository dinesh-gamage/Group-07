      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--start breadcrum-->
              <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-file-text-o"></i> Form elements</h3>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-home"></i><a href="<?php echo base_url()."Index1"?>">Home</a></li>
                            <li><i class="icon_document_alt"></i>Forms</li>
                            <li><i class="fa fa-file-text-o"></i>Form elements</li>
                        </ol>
                    </div>
              </div>
              <!--end breadcrum-->

              <div class="row">
                  <div class="col-lg-10 col-lg-offset-1">
                      <ul class="nav nav-pills">
                          <li class="active"><a data-toggle="pill" href="#case">Case History</a></li>
                          <li><a data-toggle="pill" href="#menu1">Menu 1</a></li>
                          <li><a data-toggle="pill" href="#menu2">Menu 2</a></li>
                      </ul>
                      <div class="tab-content">
                          <!--start pill content 1-->
                          <!-- start of case history in speech disorder -->
                          <div id="case" class="tab-pane fade in active">
                              <br>
                              <div class="progress">
                                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <!--form id="regiration_form" novalidate action="action.php"  method="post"-->
                              <?php
                                $attri = array(
                                    'id'=>'regiration_form',
                                );
                              echo  form_open('FormComponent/set_casehistory',$attri)?>
                                  <!--start fieldset one-->
                                  <fieldset>
                                    <?php foreach($speechpatient as $spatient):?>
                                      <h4>Step 1: Create your account</h4>
                                      <div class="row">
                                          <!--main column1-->
                                          <div class="col-xs-6" style="border-right: 2px red solid">
                                              <div class="row">
                                                  <div class="col-lg-8 col-lg-offset-1">
                                                      <div class="form-group">
                                                          <label >Reg.No</label>
                                                          <input type="text" class="form-control" id="reg" value="<?php echo $spatient->patient_id;?>" name="reg" placeholder="Reg.No">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-lg-8 col-lg-offset-1">
                                                      <div class="form-group">
                                                          <label >Name</label>
                                                          <input type="text" class="form-control" name="name" value="<?php echo $spatient->patien_name;?>" id="name" placeholder="Name">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-lg-8 col-lg-offset-1">
                                                      <div class="form-group">
                                                          <label >DOB</label>
                                                          <input type="text" class="form-control" id="dob" name="dob" value="<?php echo $spatient->dob;?>" placeholder="DOB">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-lg-8 col-lg-offset-1">
                                                      <div class="form-group">
                                                          <label>Age of referral</label>
                                                          <input type="text" class="form-control" id="age" name="age" value="<?php echo $spatient->age;?>" placeholder="Age">
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <!--end main column1-->
                                          <!--main column2-->
                                          <div class="col-xs-6 ">
                                              <div class="row">
                                                  <div class="col-lg-8 col-lg-offset-3">
                                                      <div class="form-group">
                                                          <label >Date</label>
                                                          <input type="text" class="form-control" id="date" value="<?php echo $spatient->regitration_date;?>" name="date" placeholder="Date">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-lg-8 col-lg-offset-3">
                                                      <div class="form-group">
                                                          <label >Language used</label>
                                                          <input type="text" class="form-control" value="<?php echo $spatient->language;?>" id="language" name="lan" placeholder="Language">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-lg-8 col-lg-offset-3">
                                                      <div class="form-group">
                                                          <label >Telephone Number</label>
                                                          <input type="text" class="form-control" id="tel" value="<?php echo $spatient->telephone;?>" name="tel" placeholder="Tele">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-lg-8 col-lg-offset-3">
                                                      <div class="form-group">
                                                          <label for="exampleInputPassword1">Gender</label>
                                                          <input type="text" class="form-control" name="gender" value="<?php if($spatient->gender==1){echo "Male";}else{echo "Female";};?>" id="gender" placeholder="Gender">
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <!--end main column2-->
                                      </div>
                                      <input type="button" name="next1" id="next1" class="next btn btn-info" style="float: right" value="Next" />
                                    <?php endforeach;?>
                                  </fieldset>
                                  <!--end fieldset one-->

                                  <!--start fieldset 2-->
                                  <fieldset>
                                      <h2> Step 2: Add Personnel Details</h2>
                                      <div class="row">
                                          <!--main column1-->
                                          <div class="col-xs-6" style="border-right: 2px red solid">
                                              <div class="row">
                                                  <div class="col-lg-8 col-lg-offset-1">
                                                      <div class="form-group">
                                                          <label >Father</label>
                                                          <input type="text" class="form-control" id="father" name="father" placeholder="Father">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-lg-8 col-lg-offset-1">
                                                      <div class="form-group">
                                                          <label>Mother</label>
                                                          <input type="text" class="form-control" id="mother" name="mother" placeholder="Mother">
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <!--end main column1-->
                                          <!--main column2-->
                                          <div class="col-xs-6 ">
                                              <div class="row">
                                                  <div class="col-lg-8 col-lg-offset-3">
                                                      <div class="form-group">
                                                          <label >No.of Siblings</label>
                                                          <input type="text" class="form-control" id="sibl" name="sibl" placeholder="No.of Siblings">
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <!--end main column2-->
                                      </div>
                                      <div class="row">
                                          <div class="col-lg-8">
                                              <div class="form-group">
                                                  <label >Home Situation</label>
                                                  <textarea type="text" class="form-control" name="homes" placeholder=""></textarea>
                                              </div>
                                          </div>
                                      </div>
                                      <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
                                      <input type="button" name="next"  id="next2" class="next btn btn-info" value="Next" />
                                  </fieldset>
                                  <!--end fieldset 2-->
                                  <!--start fieldset 3-->
                                  <fieldset>
                                      <h2>Step 3: Contact Information</h2>
                                      <div class="form-group">
                                          <label for="mob">Mobile Number</label>
                                          <input type="text" class="form-control" id="mob" name="mob" placeholder="Mobile Number">
                                      </div>
                                      <div class="form-group">
                                          <label for="address">Address</label>
                                          <textarea  class="form-control" name="address" placeholder="Communication Address"></textarea>
                                      </div>
                                      <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
                                      <input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
                                  </fieldset>
                                  <!--end fieldset 3-->
                              <?php echo $this->session->flashdata('msgsuccess'); ?>
                              <?php echo form_close();?>
                          </div>
                          <!-- end of case history in speech disorder row-->
                          <!--end pill content 1-->

                          <!--start pill content 2-->
                          <div id="menu1" class="tab-pane fade">
                            content2
                          </div>
                          <!--end pill content 2-->

                          <!--start pill content 3-->
                          <div id="menu2" class="tab-pane fade">
                              content3
                          </div>
                          <!--end pill content 3-->

                      </div>
                  </div>
              </div>


              <!-- page end-->
          </section>
      </section>
      <!--main content end-->

  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="<?php echo base_url()."asserts/js/jquery.js"?>"></script>
    <script src="<?php echo base_url()."asserts/js/bootstrap.min.js"?>"></script>
    <!-- nice scroll -->
    <script src="<?php echo base_url()."asserts/js/jquery.scrollTo.min.js"?>"></script>
    <script src="<?php echo base_url()."asserts/js/jquery.nicescroll.js"?>" type="text/javascript"></script>

    <!-- jquery ui -->
    <script src="<?php echo base_url()."asserts/js/jquery-ui-1.9.2.custom.min.js"?>"></script>

    <!--custom checkbox & radio-->
    <script type="text/javascript" src="<?php echo base_url()."asserts/js/ga.js"?>"></script>
    <!--custom switch-->
    <script src="<?php echo base_url()."asserts/js/bootstrap-switch.js"?>"></script>
    <!--custom tagsinput-->
    <script src="<?php echo base_url()."asserts/js/jquery.tagsinput.js"?>"></script>
    
    <!-- colorpicker -->
   
    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo base_url()."asserts/js/jquery.hotkeys.js"?>"></script>
    <script src="<?php echo base_url()."asserts/js/bootstrap-wysiwyg.js"?>"></script>
    <script src="<?php echo base_url()."asserts/js/bootstrap-wysiwyg-custom.js"?>"></script>
    <!-- ck editor -->
    <script type="text/javascript" src="<?php echo base_url()."asserts/assets/ckeditor/ckeditor.js"?>"></script>
    <!-- custom form component script for this page-->
    <script src="<?php echo base_url()."asserts/js/form-component.js"?>"></script>
    <!-- custome script for all page -->
    <script src="<?php echo base_url()."asserts/js/scripts.js"?>"></script>

      <script >
          /*$(document).ready(function(){
              var current = 1,current_step,next_step,steps,one;
              steps = $("fieldset").length;
              setProgressBar(current);
              $(".next").click(function() {
                  var cur = $(this).parent();
                  var nex = $(this).parent().next();
                  $.ajax({
                      type: "post",
                      url: "http://[::1]/Third_Year_Project/NiceAdmin/FormComponent",
                      cache: false,
                      data: {id: "one"},
                      success: function () {
                          alert("two");
                          current_step = cur;
                          next_step = nex;
                          next_step.show();
                          current_step.hide();
                          setProgressBar(++current);
                      }

                  });
              });
              $(".previous").click(function() {
                  var cur = $(this).parent();
                  var nex =  $(this).parent().prev();
                  $.ajax({
                      type: "post",
                      url: "http://[::1]/Third_Year_Project/NiceAdmin/FormComponent",
                      cache: false,
                      data: {id: "one"},
                      success: function () {
                          alert("prev");
                          current_step = cur;
                          next_step =nex;
                          next_step.show();
                          current_step.hide();
                          setProgressBar(--current);
                      }

                  });
              });

              function setProgressBar(curStep){
                  var percent = parseFloat(100 / steps) * curStep;
                  percent = percent.toFixed();
                  $(".progress-bar")
                      .css("width",percent+"%")
                      .html(percent+"%");
              }
          });*/
          $(document).ready(function() {
              var current = 1, current_step, next_step, steps, one;
              steps = $("fieldset").length;
              setProgressBar(current);
              $(".next").click(function () {
                  alert("two");
                  current_step = $(this).parent();
                  next_step = $(this).parent().next();
                  next_step.show();
                  current_step.hide();
                  setProgressBar(++current);
              });
              $(".previous").click(function () {
                  alert("prev");
                  current_step = $(this).parent();
                  next_step = $(this).parent().prev();
                  next_step.show();
                  current_step.hide();
                  setProgressBar(--current);
              });

              function setProgressBar(curStep) {
                  var percent = parseFloat(100 / steps) * curStep;
                  percent = percent.toFixed();
                  $(".progress-bar")
                      .css("width", percent + "%")
                      .html(percent + "%");
              }
          });



      </script>


  </body>
</html>
