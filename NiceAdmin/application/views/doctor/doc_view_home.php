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
<!-- paging -->
            <div class="col-lg-6">
                <?php
                    foreach($records as $patient) {
                        $tmpl = array(
                            'table_open' => '<table border="0" class="table table-bordered table-hover">',
                            'heading_row_start' => "<tr  >",
                            'heading_row_end' => '</tr>',
                            'heading_cell_start' => '<th>',
                            'heading_cell_end' => '</th>',
                            'row_start' => "<tr>",
                            'row_end' => '</tr>',
                            'cell_start' => '<td>',
                            'cell_end' => '</td>',
                            'row_alt_start' => '<tr>',
                            'row_alt_end' => '</tr>',
                            'cell_alt_start' => '<td>',
                            'cell_alt_end' => '</td>',
                            'table_close' => '</table>'
                        );
                        $this->table->set_template($tmpl);
                        $this->table->set_heading(
                            ' ',
                            'Patient ID',
                            'Patient Name'
                        );
                        $this->table->add_row(
                            array('data' =>"<input type='checkbox' name='userid[]' class='chk' value=''/>"),
                            array('data' => $patient->patient_id),
                            array('data' => $patient->patient_name),
                            array('data' =>"<div class='btn btn-primary'  onclick='lordpatienthistory(0);' style='border-radius: 0px;'  >View</div>")
                        );
                    }
                ?>

                <div class="col-lg-12 col-lg-12">	
                    <div class="panel panel-default">

                        <?php echo form_open("index1/delete");?>
                            <div class="panel-heading">
                                <div class="col-xs-4"><h2><i class="fa fa-flag-o red"></i><strong>Patient Records</strong></h2></div>
                                <div class="col-xs-4">
                                    <select class="form-control" id="disease" onchange="search();">
                                        <option name="disease" value="fever">Fever</option>
                                        <option name="disease" value="mental">Mental Disorders</option>
                                        <option name="disease" value="speech">Speech Disorders</option>
                                        <option name="disease" value="man">Man</option>
                                    </select>
                                </div>
                                <div class="panel-actions col-xs-4" style="float: right;">
                                    <button type="submit" class="btn btn-md btn-primary " name="del" id="del" ><span class="glyphicon glyphicon-trash"></span></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <div class="data">
                                        <?php echo $this->table->generate(); ?>
                                    </div>

                                </div>
                            </div>
                            <div class="panel-footer" style="height:70px;">
                                <?php echo $pagination;?>
                            </div>
                        <?php echo form_close();?>
                        </div>

                    </div>

            </div>
            
<!-- calendar -->
            <div class="col-lg-6">
                
            </div>
            
<!-- patients -->
            <div class="col-lg-3">
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
                                    <div class="col-lg-8">
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
                                    <div class="col-lg-4">
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
            <div class="col-lg-3">
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
                                    <div class="col-lg-8">
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
                                    <div class="col-lg-4">
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