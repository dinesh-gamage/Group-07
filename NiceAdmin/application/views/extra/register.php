
<section id="main-content">
    <section class="wrapper">
        
            <div class="row">
                <div class="col-lg-12">
                    <?php
                    $formopendoc = array(
                        'class'=> '.form-horizontal'
                    );
                    $labelcontaoldoc = array(
                        'class'=>'control-label'
                        
                    );
                    $inputdoc = array(
                        'class'=>'form-control'
                    );
                    $buttondoc = array(
                        'class'=>'btn btn-primary'
                    );
                    $emaildoc = array(
                        'class'=>'form-control',
                        'required'=>'required',
                        'type'=>'email'   
                    );
                    echo form_open_multipart('Register',$formopendoc);?>
                    <div class="form-group">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-lg-1"><?php echo form_label('Name:','',$labelcontaoldoc)?></div>
                                <div class="col-lg-4"><?php echo form_input('doc_name','',$inputdoc);?></div>
                                <?php echo form_error('doc_name');?>
                            </div>
                        </div> 
                        </br> 
                        
                        <div class="row">
                            <div class="form-group">
                                <div class="col-lg-1"><?php echo form_label('Password:','',$labelcontaoldoc)?></div>
                                <div class="col-lg-4"><?php echo form_password('doc_pass','',$inputdoc);?></div>
                            </div>
                        </div> 
                        </br> 
                        
                        <div class="row">
                            <div class="form-group">
                                <div class="col-lg-1"><?php echo form_label('Hospital:','',$labelcontaoldoc)?></div>
                                <div class="col-lg-4"><?php echo form_input('hospital','',$inputdoc);?></div>
                            </div>
                        </div>
                        
                        </br> 
                        <div class="row">
                            <div class="form-group">
                                <div class="col-lg-1"><?php echo form_label('Contact:','',$labelcontaoldoc)?></div>
                                <div class="col-lg-4"><?php echo form_input('contact','',$inputdoc);?></div>
                            </div>
                        </div> 
                        </br>
                         <div class="row">
                            <div class="form-group">
                                <div class="col-lg-1"><?php echo form_label('Email:','',$labelcontaoldoc)?></div>
                                <div class="col-lg-4"><?php echo form_input('email','',$emaildoc);?></div>
                                <?php echo form_error('email')?>
                            </div>
                        </div> 
                        </br>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-lg-1"><?php echo form_label('Specialist For:','',$labelcontaoldoc)?></div>
                                <div class="col-lg-4"><?php echo form_input('special','',$inputdoc);?></div>
                            </div>
                        </div> 
                        </br>
                        
                        <div class="row">
                            <div class="form-group">
                                <div class="col-lg-2"><?php echo form_upload('userfile');?></div>
                            </div>
                        </div> 
                        <br/>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-lg-2"><?php echo form_submit('register_doc','Register',$buttondoc);?></div>
                            </div>
                        </div> 
                        
                    </div>
                    <?php echo form_close();?>
                </div>
                <?php echo $this->session->flashdata('msgsuccess'); ?>
               
                
                
            </div>
        
    </section>
</section>

</section>
<script src="<?php echo base_url() . "asserts/js/jquery.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/jquery-ui-1.10.4.min.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/jquery-1.8.3.min.js" ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . "asserts/js/jquery-ui-1.9.2.custom.min.js" ?>"></script>
<!-- bootstrap -->
<script src="<?php echo base_url() . "asserts/js/bootstrap.min.js" ?>"></script>
<!-- nice scroll -->
<script src="<?php echo base_url() . "asserts/js/jquery.scrollTo.min.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/jquery.nicescroll.js" ?>" type="text/javascript"></script>
<!-- charts scripts -->
<script src="<?php echo base_url() . "asserts/assets/jquery-knob/js/jquery.knob.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/jquery.sparkline.js" ?>" type="text/javascript"></script>
<script src="<?php echo base_url() . "asserts/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/owl.carousel.js" ?>" ></script>
<!-- jQuery full calendar -->
<script src="<?php echo base_url() . "asserts/js/fullcalendar.min.js" ?>"></script> <!-- Full Google Calendar - Calendar -->
<script src="<?php echo base_url() . "asserts/assets/fullcalendar/fullcalendar/fullcalendar.js" ?>"></script>
<!--script for this page only-->
<script src="<?php echo base_url() . "asserts/js/calendar-custom.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/jquery.rateit.min.js" ?>"></script>
<!-- custom select -->
<script src="<?php echo base_url() . "asserts/js/jquery.customSelect.min.js" ?>" ></script>
<script src="<?php echo base_url() . "asserts/assets/chart-master/Chart.js" ?>"></script>

<!--custome script for all page-->
<script src="<?php echo base_url() . "asserts/js/scripts.js" ?>"></script>
<!-- custom script for this page-->
<script src="<?php echo base_url() . "asserts/js/sparkline-chart.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/easy-pie-chart.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/jquery-jvectormap-1.2.2.min.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/jquery-jvectormap-world-mill-en.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/xcharts.min.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/jquery.autosize.min.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/jquery.placeholder.min.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/gdp-data.js" ?>"></script>	
<script src="<?php echo base_url() . "asserts/js/morris.min.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/sparklines.js" ?>"></script>	
<script src="<?php echo base_url() . "asserts/js/charts.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/jquery.slimscroll.min.js" ?>"></script>



</body>
</html>