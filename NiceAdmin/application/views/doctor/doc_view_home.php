<?php
        if (isset($this->session->userdata['logged_in'])) 
        {
            $username = ($this->session->userdata['logged_in']['username']);
            $email = ($this->session->userdata['logged_in']['email']);
            $name = ($this->session->userdata['logged_in']['name']);
            $picture = ($this->session->userdata['logged_in']['picture']);
            $status = ($this->session->userdata['logged_in']['status']);
            
            if($status != 'Doctor'){
                redirect('/Login');
            }
        } else{
            redirect('/Login');
        }
    ?>
<!--main content start-->
<!--section id="main-content"-->
    <section class="wrapper">
        <div class="contentContainer">
        <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
<!--                    <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>-->
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="<?php echo base_url() . "Index1" ?>">Home</a></li>
                        <li><i class="fa fa-laptop"></i>All Patients</li>					  	
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">New Patients</div>
                        <div class="panel-body">
                            <?php
                                foreach($patients as $patient):
                                    if ($patient->status == '0'){
                            ?>
                                        
                                <form name="myform" id="myform" action="<?php echo base_url() ?>/DoctorView/getPatient/" method="post">
                                    <input type="hidden" name="patientid" id="id" value="<?php echo $patient->patient_id; ?>" />
                                    <div class="patient">
                                        <div class="col-md-8">
                                            <?php 
                                                echo "<div class=\"col-sm-8 padding10top\">";
                                                    echo $patient->patient_name;
                                                echo "</div>";
                                                //echo str_repeat("&nbsp;", 6); 
                                                echo "<div class=\"col-sm-4 padding10top\">";
                                                    echo $patient->regitration_date;
                                                echo "</div>";
                                            ?>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-info" onclick="javascript: submit()" >View</button>
                                        </div>
                                    </div>                                    
                                </form>
                            
                            <?php
                                    }
                                endforeach;
                            ?>
                        </div>                
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">2<sup>nd</sup> visit </div>
                        <div class="panel-body">
                            <?php
                                foreach($patients as $patient):
                                    if ($patient->status == '1'){
                            ?>
                                        
                                <form name="myform" id="myform" action="<?php echo base_url() ?>/DoctorView/getPatient/" method="post">
                                    <input type="hidden" name="patientid" id="id" value="<?php echo $patient->patient_id; ?>" />
                                    <div class="patient">
                                        <div class="col-md-8">
                                            <?php 
                                                echo "<div class=\"col-sm-8 padding10top\">";
                                                    echo $patient->patient_name;
                                                echo "</div>";
                                                //echo str_repeat("&nbsp;", 6); 
                                                echo "<div class=\"col-sm-4 padding10top\">";
                                                    echo $patient->regitration_date;
                                                echo "</div>";
                                            ?>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-success" onclick="javascript: submit()" >View</button>
                                        </div>
                                    </div>                                    
                                </form>
                            
                            <?php
                                    }
                                endforeach;
                            ?>
                        </div>                
                    </div>
                </div>
                

            </div>
        
        
        </div>
    </section>
<!--/section-->