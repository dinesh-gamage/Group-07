 <?php
        if (isset($this->session->userdata['logged_in'])) 
        {
            $username = ($this->session->userdata['logged_in']['username']);
            $email = ($this->session->userdata['logged_in']['email']);
            $name = ($this->session->userdata['logged_in']['name']);
            $picture = ($this->session->userdata['logged_in']['picture']);
        } else{
            redirect('/Login');;
        }
    ?>

<section id="main-content">
    <section class="wrapper">
        <div class="contentContainer">
        <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
<!--                    <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>-->
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="<?php echo base_url() . "Index1" ?>">Home</a></li>
                        <li>All Patients</li>								  	
                        <li>Patient : print patient id</li>					  	
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <?php
                        echo "<div class='error_msg'>";
                        echo validation_errors();
                        echo "</div>";
                        echo "<div class='error_msg'>";

                            if(isset($successMessage))
                            {
                    ?>
                            <script>
                                alert('<?php  echo $successMessage ?>');
                            </script>
                    <?php 
                            }
                            if(isset($errorMessage))
                            {
                    ?>
                            <script>
                                alert('<?php  echo $errorMessage ?>');
                            </script>
                    <?php 
   
                            }
                            echo "</div>";
                    ?>
                    
                    <div id="viewPatient">
                        <div class="col-md-11" >
                        
                            <?php
                                foreach ($patients as $patient):
                                    if($patient->patient_id == $patient_id){
                                        if ($patient->status == "0"){
                            ?>
                                <div class="panel panel-info">
                                    <div class="panel-heading">Genaral Details : &nbsp; <?php echo $patient->patient_name; ?> &nbsp; ( New patient )</div>
                                    <div class="panel-body">
                                        <table class="table" border="0">
                                            <tr>
                                                <td>Name </td>
                                                <td>:</td>
                                                <td><?php echo $patient->patient_name; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Gender </td>
                                                <td>:</td>
                                                <td><?php echo $patient->gender; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Language </td>
                                                <td>:</td>
                                                <td><?php echo $patient->language; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Age </td>
                                                <td>:</td>
                                                <td><?php echo $patient->age; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Date of birth </td>
                                                <td>:</td>
                                                <td><?php echo $patient->dob; ?></td>
                                            </tr>
                                            <tr>
                                                <td>School </td>
                                                <td>:</td>
                                                <td><?php echo $patient->school; ?></td>
                                            </tr>
                                            <tr class="info"><td colspan="3" ></td></tr>
                                            <tr>
                                                <td>Guardian's Name </td>
                                                <td>:</td>
                                                <td><?php echo $patient->guardian_name; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Guardian's Relationship </td>
                                                <td>:</td>
                                                <td><?php echo $patient->relationship; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Address </td>
                                                <td>:</td>
                                                <td><?php echo $patient->address; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Telephone </td>
                                                <td>:</td>
                                                <td><?php echo $patient->telephone; ?></td>
                                            </tr>
                                            <tr>
                                                <td> Division </td>
                                                <td>:</td>
                                                <td><?php echo $patient->division; ?></td>
                                            </tr>
                                            <tr class="info"><td colspan="3" ></td></tr>
                                            <tr>
                                                <td> Refered By </td>
                                                <td>:</td>
                                                <td><?php echo $patient->refered_by; ?></td>
                                            </tr>
                                            <tr>
                                                <td> Registered date </td>
                                                <td>:</td>
                                                <td><?php echo $patient->regitration_date; ?></td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                            <?php
                                        }
                                        if ($patient->status == "1"){ 
                            ?>
                                <div class="panel panel-success">
                                    <div class="panel-heading">Genaral Details : &nbsp; <?php echo $patient->patient_name; ?></div>
                                    <div class="panel-body">
                                        <table class="table" border="0">
                                            <tr>
                                                <td>Name </td>
                                                <td>:</td>
                                                <td><?php echo $patient->patient_name; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Gender </td>
                                                <td>:</td>
                                                <td><?php echo $patient->gender; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Language </td>
                                                <td>:</td>
                                                <td><?php echo $patient->language; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Age </td>
                                                <td>:</td>
                                                <td><?php echo $patient->age; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Date of birth </td>
                                                <td>:</td>
                                                <td><?php echo $patient->dob; ?></td>
                                            </tr>
                                            <tr>
                                                <td>School </td>
                                                <td>:</td>
                                                <td><?php echo $patient->school; ?></td>
                                            </tr>
                                            <tr class="success"><td colspan="3" ></td></tr>
                                            <tr>
                                                <td>Guardian's Name </td>
                                                <td>:</td>
                                                <td><?php echo $patient->guardian_name; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Guardian's Relationship </td>
                                                <td>:</td>
                                                <td><?php echo $patient->relationship; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Address </td>
                                                <td>:</td>
                                                <td><?php echo $patient->address; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Telephone </td>
                                                <td>:</td>
                                                <td><?php echo $patient->telephone; ?></td>
                                            </tr>
                                            <tr>
                                                <td> Division </td>
                                                <td>:</td>
                                                <td><?php echo $patient->division; ?></td>
                                            </tr>
                                            <tr class="success"><td colspan="3" ></td></tr>
                                            <tr>
                                                <td> Refered By </td>
                                                <td>:</td>
                                                <td><?php echo $patient->refered_by; ?></td>
                                            </tr>
                                            <tr>
                                                <td> Registered date </td>
                                                <td>:</td>
                                                <td><?php echo $patient->regitration_date; ?></td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                            <?php
                                        }

                                    }
                                endforeach;
                            ?>
                        
                        </div>
                    </div>
                
                    <div id="caseHistory" style="display: none" >
                        <div class="col-md-11">
                            <?php
                                foreach ($patients as $patient):
                                    if($patient->patient_id == $patient_id){
                                        if ($patient->status == "0"){
                            ?>
                                <div class="panel panel-info">
                                    <div class="panel-heading">Case History</div>
                                    <div class="panel-body">

                                        <div class="col-md-12 marginBottom3">
                                            <div class="col-sm-6 padding10top">
                                                Family / Medical History
                                            </div>
                                            <div class="col-sm-3">
                                                <button id="familyAdd" type="button" class="btn btn-info" data-toggle="modal" data-target="#family">
                                                    Add
                                                </button>
                                            </div>
                                            <div class="col-sm-3">
                                                <button id="familyView" type="button" class="btn btn-info" data-toggle="modal" data-target="#familyview">
                                                    View
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-12 marginBottom3">
                                            <div class="col-sm-6 padding10top">
                                               Communication Skills
                                            </div>
                                            <div class="col-sm-3">
                                                <button id="commAdd" type="button" class="btn btn-info" data-toggle="modal" data-target="#communication">
                                                    Add
                                                </button>
                                            </div>
                                            <div class="col-sm-3">
                                                <button id="CommView" type="button" class="btn btn-info" data-toggle="modal" data-target="#communication">
                                                    View
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-12 marginBottom3">
                                            <div class="col-sm-6 padding10top">
                                                Motor Skills
                                            </div>
                                            <div class="col-sm-3">
                                                <button id="mortorAdd" type="button" class="btn btn-info" data-toggle="modal" data-target="#mortor">
                                                    Add
                                                </button>
                                            </div>
                                            <div class="col-sm-3">
                                                <button id="mortorView" type="button" class="btn btn-info" data-toggle="modal" data-target="#mortor">
                                                    View
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-12 marginBottom3">
                                            <div class="col-sm-6 padding10top">
                                                Cognitive & Comm. Development
                                            </div>
                                            <div class="col-sm-3">
                                                <button id="cogAdd" type="button" class="btn btn-info" data-toggle="modal" data-target="#cognitive">
                                                    Add
                                                </button>
                                            </div>
                                            <div class="col-sm-3">
                                                <button id="cogView" type="button" class="btn btn-info" data-toggle="modal" data-target="#cognitive">
                                                    View
                                                </button>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12 marginBottom3">
                                            <div class="col-sm-6 padding10top">
                                               Case Notes
                                            </div>
                                            <div class="col-sm-3">
                                                <button id="caseAdd" type="button" class="btn btn-info" data-toggle="modal" data-target="#notes">
                                                    Add
                                                </button>
                                            </div>
                                            <div class="col-sm-3">
                                                <button id="caseView" type="button" class="btn btn-info" data-toggle="modal" data-target="#notes">
                                                    View
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                            <?php
                                        }if ($patient->status == "1"){
                            ?>
                                <div class="panel panel-success">
                                    <div class="panel-heading">Case History</div>
                                    <div class="panel-body">                        

                                        <div class="col-md-12 marginBottom3">
                                            <div class="col-sm-6 padding10top">
                                                Family / Medical History
                                            </div>
                                            <div class="col-sm-3">
                                                <button id="familyAdd" type="button" class="btn btn-success" data-toggle="modal" data-target="#family">
                                                    Add
                                                </button>
                                            </div>
                                            <div class="col-sm-3">
                                                <button id="familyView" type="button" class="btn btn-success" data-toggle="modal" data-target="#familyview">
                                                    View
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-12 marginBottom3">
                                            <div class="col-sm-6 padding10top">
                                               Communication Skills
                                            </div>
                                            <div class="col-sm-3">
                                                <button id="commAdd" type="button" class="btn btn-success" data-toggle="modal" data-target="#communication">
                                                    Add
                                                </button>
                                            </div>
                                            <div class="col-sm-3">
                                                <button id="commView" type="button" class="btn btn-success" data-toggle="modal" data-target="#communication">
                                                    View
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-12 marginBottom3">
                                            <div class="col-sm-6 padding10top">
                                                Motor Skills
                                            </div>
                                            <div class="col-sm-3">
                                                <button id="mortorAdd" type="button" class="btn btn-success" data-toggle="modal" data-target="#mortor">
                                                    Add
                                                </button>
                                            </div>
                                            <div class="col-sm-3">
                                                <button id="mortorView" type="button" class="btn btn-success" data-toggle="modal" data-target="#mortor">
                                                    View
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-12 marginBottom3">
                                            <div class="col-sm-6 padding10top">
                                                Cognitive & Comm. Development
                                            </div>
                                            <div class="col-sm-3">
                                                <button id="cogAdd" type="button" class="btn btn-success" data-toggle="modal" data-target="#cognitive">
                                                    Add
                                                </button>
                                            </div>
                                            <div class="col-sm-3">
                                                <button id="cogView" type="button" class="btn btn-success" data-toggle="modal" data-target="#cognitive">
                                                    View
                                                </button>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12 marginBottom3">
                                            <div class="col-sm-6 padding10top">
                                               Case Notes
                                            </div>
                                            <div class="col-sm-3">
                                                <button id="caseAdd" type="button" class="btn btn-success" data-toggle="modal" data-target="#notes">
                                                    Add
                                                </button>
                                            </div>
                                            <div class="col-sm-3">
                                                <button id="caseView" type="button" class="btn btn-success" data-toggle="modal" data-target="#notes">
                                                    View
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            <?php
                                        }
                                    }
                                endforeach;
                            ?>

                        </div>

<!-- MODEL - FAMILY AND MEDICAL HISTORY -->
<!-- ***************************************************************************************************************************************** -->                      
                        <!-- Modal -->
                        <div class="modal fade" id="family" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <!--form class="form-horizontal" method="POST" action="<!?php echo base_url()."Calendar/add_data";?>"-->
                                        <?php 
                                        $attri = array(
                                            'class'=>'form-horizontal'
                                        );
                                        echo form_open('DoctorView/add_family_history',$attri);?>
                                        <div class="model-head">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Family and Medical History</h4>
                                        </div>
                                        <div class="modal-body">

                                            <h4>Family History</h4>

                                            <div class="form-group">
                                                <label for="title" class="col-sm-3 control-label">Father </label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="father" class="form-control"   placeholder="Father's Name" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="title" class="col-sm-3 control-label">Mother</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="mother" class="form-control"   placeholder="Mother's Name" required/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="title" class="col-sm-3 control-label">No of Sibilings</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="noOfSibilings" class="form-control"   placeholder="Number of Sibilings" required/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="title" class="col-sm-3 control-label">Names of Sibilings</label>
                                                <div class="col-sm-9">
                                                    <textarea name="namesOfSibilings" class="form-control"   placeholder="Names of Sibilings" required></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="title" class="col-sm-3 control-label">Home situation</label>
                                                <div class="col-sm-9">
                                                    <textarea name="homeSituation" class="form-control"   placeholder="Home Situation" required></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="problem" class="col-sm-3 control-label">Presenting Problems</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="Problem" class="form-control" placeholder="Type or Select problem" name="presentingProblem" list="presentingProblem"  required>
                                                    <datalist id="presentingProblem">
                                                        <option value="Speach & language delay">Speach & language delay</option>
                                                        <option value="Global language delay">Global language delay</option>
                                                        <option value="Autism">Autism</option>
                                                        <option value="Learning Difficulties">Learning Difficulties</option>
                                                        <option value="Stammering">Stammering</option>
                                                        <option value="MR">MR</option>
                                                        <option value="Other">Other</option>
                                                    </datalist>
                                                </div>
                                            </div>

                                            <h4>Medical History</h4>
                                            <div class="form-group">
                                                <label for="title" class="col-sm-3 control-label">During Pregnancy</label>
                                                <div class="col-sm-9">
                                                    <select name="duringPregnancy" class="form-control" id="color" required>
                                                        <option value="" >Select an option</option>
                                                        <option value="No Complication">No Complication</option>
                                                        <option value="Complicated">Complicated</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="title" class="col-sm-3 control-label">At birth</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="atBirth" class="form-control"   placeholder="At birth" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="title" class="col-sm-3 control-label">Mode of delivery</label>
                                                <div class="col-sm-9">
                                                    <select name="modeOfDelivery" class="form-control" id="color">
                                                        <option value="" >Select a mode</option>
                                                        <option value="NVO">NVO</option>
                                                        <option value="LSCS">LSCS</option>
                                                        <option value="EM">EM</option>
                                                        <option value="ELEM">ELEM</option>
                                                        <option value="Assisted : Forced">Assisted : Forced</option>
                                                        <option value="Assisted : Vaccumed">Assisted : Vaccumed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="title" class="col-sm-3 control-label">Birth Weight</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="birthWeight" class="form-control"   placeholder="Birth Weight" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="title" class="col-sm-3 control-label">Birth Cry</label>
                                                <div class="col-sm-9">
                                                    <select name="birthCry" class="form-control" id="color">
                                                        <option value="" >Select an option</option>
                                                        <option value="No concern">No concern</option>
                                                        <option value="Delayed">Delayed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="title" class="col-sm-3 control-label">After Birth</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="afterBirth" class="form-control"   placeholder="After Birth" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="title" class="col-sm-3 control-label">Relevent illnesses</label>
                                                <div class="col-sm-9">
                                                    <textarea name="releventIllnesses" class="form-control"   placeholder="Relevent Illnesses" required></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="title" class="col-sm-3 control-label">Medications / Investigations</label>
                                                <div class="col-sm-9">
                                                    <input type="checkbox" name="medication" value="EEG" >&nbsp;&nbsp; EEG <br/>
                                                    <input type="checkbox" name="medication" value="CT">&nbsp;&nbsp; CT <br/>
                                                    <input type="checkbox" name="medication" value="EMG" >&nbsp;&nbsp; EMG <br/>
                                                    <input type="checkbox" name="medication" value="USS Brain">&nbsp;&nbsp; USS Brain <br/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="title" class="col-sm-3 control-label">Audiology Results</label>
                                                <div class="col-sm-9">
                                                    <select name="audiology" class="form-control" id="color">
                                                        <option class="form-control" value="" >Select an option</option>
                                                        <option class="form-control" value="Assesed">Assessed</option>
                                                        <option class="form-control" value="Not Assesed">Not Assessed</option>
                                                        <option class="form-control" value="No concern">No Concern</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-3"></div>
                                                <div class="col-sm-9">
                                                    <div class="col-sm-6">
                                                        <div class="col-sm-5">Left Side :</div>
                                                        <div class="col-md-7">
                                                            <input type="text" name="audioLeft" class="form-control"   placeholder="Audiology Left" required/>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="col-sm-5">Right Side :</div>
                                                        <div class="col-sm-7">
                                                            <input type="text" name="audioRight" class="form-control"   placeholder="Audiology Right" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="title" class="col-sm-3 control-label">Vision</label>
                                                <div class="col-sm-9">
                                                    <select name="vision" class="form-control" id="color">
                                                        <option value="" >Select an option</option>
                                                        <option value="Assesed">Assessed</option>
                                                        <option value="Not Assesed">Not Assessed</option>
                                                        <option value="No concern">No Concern</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-3"></div>
                                                <div class="col-sm-9">
                                                    <div class="col-sm-6">
                                                        <div class="col-sm-5">Left Side :</div>
                                                        <div class="col-sm-7">
                                                            <input type="text" name="visionLeft" class="form-control"   placeholder="Vision Left" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="col-sm-5">Right Side :</div>
                                                        <div class="col-sm-7">
                                                            <input type="text" name="visionRight" class="form-control"   placeholder="Vision Right" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="title" class="col-sm-3 control-label">Histry of related Conditions in Family</label>
                                                <div class="col-sm-9">
                                                    <textarea name="relatedConditions" class="form-control"   placeholder="Related Conditions in Family" required></textarea>
                                                </div>
                                            </div>

                                        </div>  

                                        <div class="modal-footer">
                                            <input type="hidden" name="patientid" id="id" value="<?php echo $patient_id; ?>" />
                                            <input type="hidden" name="time" id="id" value="<?php echo date('H:i:s'); ?>" />
                                            <input type="hidden" name="date" id="id" value="<?php echo date('Y-m-d'); ?>" />
                                            <input type="hidden" name="doctorid" id="id" value="<?php echo $name; ?>" />
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" name='save' class="btn btn-primary">Save changes</button>
                                        </div>
                                        <?php echo form_close();?>
                                    </div>
                                </div>
                            </div>
                                
                                
<!-- MODEL - Communication Skills -->
<!-- ***************************************************************************************************************************************** -->
                        <div class="modal fade" id="communication" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <!--form class="form-horizontal" method="POST" action="<!?php echo base_url()."Calendar/add_data";?>"-->
                                        <?php 
                                        $attri = array(
                                            'class'=>'form-horizontal'
                                        );
                                        echo form_open('DoctorView/add_communication_skills',$attri);?>
                                        <div class="model-head">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Communication Skills</h4>
                                        </div>
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label for="funcCom" class="col-sm-3 control-label">Functional Communication </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="Type or Select" name="funcCom" list="funcCom" required >
                                                    <datalist id="funcCom">
                                                        <option value="Verbal">Verbal</option>
                                                        <option value="Non Verbal">Non Verbal</option>
                                                        <option value="Gestures">Gestures</option>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="listening" class="col-sm-3 control-label">Listening Skills</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="Type or Select" name="listening" list="listening" required >
                                                    <datalist id="listening">
                                                        <option value="Adequate">Adequate</option>
                                                        <option value="Not Adequate">Not Adequate</option>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="attention" class="col-sm-3 control-label">Attention Skills</label>
                                                <div class="col-sm-9">
                                                    <select name="attention" class="form-control" id="color">
                                                        <option value="Distracted">Distracted</option>
                                                        <option value="One task / Single Chanelled">One task / Single Chanelled</option>
                                                        <option value="Focus attention">Focus attention</option>
                                                        <option value="Shift attention / dual Chanelled">One task / Single Chanelled</option>
                                                        <option value="Sustain attention">Sustain attention</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h4> Oral Skills / Examination</h4>
                                            <div class="form-group">
                                                <label for="sucking" class="col-sm-3 control-label">Sucking</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="Type or Select" name="sucking" list="sucking" required >
                                                    <datalist id="sucking">
                                                        <option value="Positive">Positive</option>
                                                        <option value="Negative">Negative</option>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="chewing" class="col-sm-3 control-label">Chewing</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="Type or Select" name="chewing" list="chewing" required >
                                                    <datalist id="chewing">
                                                        <option value="Positive">Positive</option>
                                                        <option value="Negative">Negative</option>
                                                        <option value="Poketing">Poketing</option>
                                                        <option value="Food Consistancy">Food Consistancy</option>
                                                        <option value="Lateral movements">Lateral movements</option>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="blowing" class="col-sm-3 control-label">Blowing</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="Problem" class="form-control" placeholder="Type or Select problem" name="blowing" list="blowing" required>
                                                    <datalist id="blowing">
                                                        <option value="Positive">Positive</option>
                                                        <option value="Negative">Negative</option>
                                                        <option value="Horn">Horn</option>
                                                        <option value="Baloon">Baloon</option>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="strow" class="col-sm-3 control-label">Strow</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="Problem" class="form-control" placeholder="Type or Select problem" name="strow" list="strow" required>
                                                    <datalist id="strow">
                                                        <option value="Positive">Positive</option>
                                                        <option value="Negative">Negative</option>
                                                    </datalist>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label for="drooling" class="col-sm-3 control-label">Drooling</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="Problem" class="form-control" placeholder="Type or Select problem" name="drooling" list="drooling" required>
                                                    <datalist id="drooling">
                                                        <option value="Positive">Positive</option>
                                                        <option value="Negative">Negative</option>
                                                    </datalist>
                                                </div>
                                            </div>
                                            
                                            <h4>Comprehension</h4>

                                            <div class="form-group">
                                                <label for="compreNonVerbal" class="col-sm-3 control-label">Non Verbal</label>
                                                <div class="col-sm-9">
                                                    <div class="col-sm-6">
                                                        <div class="col-sm-6">Facial Expressions</div>
                                                        <div class="col-sm-6">
                                                            <input type="radio" name="compreNonVerbalFacial" value="Positive" >&nbsp;&nbsp; Positive <br/>
                                                            <input type="radio" name="compreNonVerbalFacial" value="Negative">&nbsp;&nbsp; Negative <br/>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="col-sm-6">Gestures</div>
                                                        <div class="col-sm-6">
                                                            <input type="radio" name="compreNonVerbalGestures" value="Positive" >&nbsp;&nbsp; Positive <br/>
                                                            <input type="radio" name="compreNonVerbalGestures" value="Negative">&nbsp;&nbsp; Negative <br/>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="compreVerbal" class="col-sm-3 control-label">Verbal</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="Problem" class="form-control" placeholder="Type or Select problem" name="compreVerbal" list="compreVerbal" required>
                                                    <datalist id="compreVerbal">
                                                        <option value="One word level">One word level</option>
                                                        <option value="2 - 3 word level">2 - 3 word level</option>
                                                        <option value="3 - 4 word level">3 - 4 word level</option>
                                                        <option value="4 - 5 word level">4 - 5 word level</option>
                                                        <option value="Narrative level">Narrative level</option>
                                                    </datalist>
                                                </div>
                                            </div>
                                            
                                            <h4>Expression</h4>

                                            <div class="form-group">
                                                <label for="expreNonVerbal" class="col-sm-3 control-label">Non Verbal</label>
                                                <div class="col-sm-9">
                                                    <div class="col-sm-6">
                                                        <div class="col-sm-6">Facial Expressions</div>
                                                        <div class="col-sm-6">
                                                            <input type="radio" name="expreNonVerbalFacial" value="Positive" >&nbsp;&nbsp; Positive <br/>
                                                            <input type="radio" name="expreNonVerbalFacial" value="Negative">&nbsp;&nbsp; Negative <br/>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="col-sm-6">Gestures</div>
                                                        <div class="col-sm-6">
                                                            <input type="radio" name="expreNonVerbalGestures" value="Positive" >&nbsp;&nbsp; Positive <br/>
                                                            <input type="radio" name="expreNonVerbalGestures" value="Negative">&nbsp;&nbsp; Negative <br/>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="expressVerbal" class="col-sm-3 control-label">Verbal</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="Problem" class="form-control" placeholder="Type or Select problem" name="expressVerbal" list="expressVerbal" required>
                                                    <datalist id="expressVerbal">
                                                        <option value="One word level">One word level</option>
                                                        <option value="2 - 3 word level">2 - 3 word level</option>
                                                        <option value="3 - 4 word level">3 - 4 word level</option>
                                                        <option value="4 - 5 word level">4 - 5 word level</option>
                                                        <option value="Narrative level">Narrative level</option>
                                                    </datalist>
                                                </div>
                                            </div>
                                            
                                            <h4>Speech</h4>
                                            <div class="form-group">
                                                <label for="articulation" class="col-sm-3 control-label">Articulation</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="articulation" class="form-control"   placeholder="Articulation" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="intelligibility" class="col-sm-3 control-label">Intelligibility</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="Problem" class="form-control" placeholder="Type or Select problem" name="intelligibility" list="intelligibility" required>
                                                    <datalist id="intelligibility">
                                                        <option value="No concern">No concern</option>
                                                        <option value="Poor - (Understand - Family)">Poor - (Understand - Family)</option>
                                                        <option value="Poor - (Understand - Strangers)">Poor - (Understand - Strangers)</option>
                                                    </datalist>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="phonollogy" class="col-sm-3 control-label">Phonollogy (speech sound & processes</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="phonollogy" class="form-control"   placeholder="" required>
                                                </div>
                                            </div>
                                            <h4> Syntax & Morphology</h4>
                                            <div class="form-group">
                                                <label for="sentences" class="col-sm-3 control-label">Sentence Structure</label>
                                                <div class="col-sm-9">
                                                   <select name="sentences" class="form-control" id="color">
                                                        <option  value="No Concern">No Concern</option>
                                                        <option   value="Impaired">Impaired</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h4> Vocabulary & Semantics</h4>
                                            <div class="form-group">
                                                <label for="words" class="col-sm-3 control-label">Words & Meanings</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="words" class="form-control"   placeholder="" required>
                                                </div>
                                            </div>
                                            <h4> Pragmetics</h4>
                                            <div class="form-group">
                                                <label for="convertations" class="col-sm-3 control-label">Convertations</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="convertations" class="form-control"   placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="eyeContact" class="col-sm-3 control-label">Eye contact</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="Type or Select" name="eyeContact" list="eyeContact" required >
                                                    <datalist id="eyeContact">
                                                        <option value="Adequate">Adequate</option>
                                                        <option value="Not Adequate">Not Adequate</option>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="turnTaking" class="col-sm-3 control-label">Turn Taking</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="Type or Select" name="turnTaking" list="turnTaking" required >
                                                    <datalist id="turnTaking">
                                                        <option value="Adequate">Adequate</option>
                                                        <option value="Not Adequate">Not Adequate</option>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="eyeContact" class="col-sm-3 control-label">Initiating</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="Type or Select" name="initiating" list="initiating" required >
                                                    <datalist id="initiating">
                                                        <option value="Adequate">Adequate</option>
                                                        <option value="Not Adequate">Not Adequate</option>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="approAnswer" class="col-sm-3 control-label">Appropriate answer</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="Type or Select" name="approAnswer" list="approAnswer" required >
                                                    <datalist id="approAnswer">
                                                        <option value="Adequate">Adequate</option>
                                                        <option value="Not Adequate">Not Adequate</option>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="voice" class="col-sm-3 control-label">Voice</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="voice" class="form-control"   placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="fluency" class="col-sm-3 control-label">Fluency</label>
                                                <div class="col-sm-9">
                                                    <select name="fluency" class="form-control" id="color">
                                                        <option  value="Blocking">Blocking</option>
                                                        <option value="Repetition">Repetition</option>
                                                        <option  value="Prolongations">Prolongations</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="other" class="col-sm-3 control-label">Other factors / Information</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="other" class="form-control"   placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="prognosis" class="col-sm-3 control-label">Prognosis</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="prognosis" class="form-control"   placeholder="" required>
                                                </div>
                                            </div>
                                        <div class="modal-footer">
                                            <input type="hidden" name="patientid" id="id" value="<?php echo $patient_id; ?>" />
                                            <input type="hidden" name="time" id="id" value="<?php echo date('H:i:s'); ?>" />
                                            <input type="hidden" name="date" id="id" value="<?php echo date('Y-m-d'); ?>" />
                                            <input type="hidden" name="doctorid" id="id" value="<?php echo $name; ?>" />
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" name='save' class="btn btn-primary">Save changes</button>
                                        </div>
                                        <?php echo form_close();?>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        
                        
       
<!-- MODEL - Mortor Skills -->
<!-- ***************************************************************************************************************************************** -->
                        <div class="modal fade" id="mortor" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <!--form class="form-horizontal" method="POST" action="<!?php echo base_url()."Calendar/add_data";?>"-->
                                        <?php 
                                        $attri = array(
                                            'class'=>'form-horizontal'
                                        );
                                        echo form_open('DoctorView/add_motor_skills',$attri);?>
                                        <div class="model-head">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Motor Skills</h4>
                                        </div>
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label for="gross" class="col-sm-3 control-label">Gross </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="Type or Select" name="gross" list="gross" required >
                                                    <datalist id="gross">
                                                        <option value="Delayed">Delayed</option>
                                                        <option value="No concern">No concern</option>
                                                        <option value="Sitting">Sitting</option>
                                                        <option value="Walking">Walking</option>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="fine" class="col-sm-3 control-label">Fine</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="Type or Select" name="fine" list="fine" required >
                                                    <datalist id="fine">
                                                        <option value="Pincer grasp">Pincer grasp</option>
                                                        <option value="Palmer grasp">Palmer grasp</option>
                                                        <option value="Holding Pencile">Holding Pencile</option>
                                                        <option value="Holding Spoon">Holding Spoon</option>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="social" class="col-sm-3 control-label">Social</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="social" class="form-control"   placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="feeding" class="col-sm-3 control-label"> Feeding</label>
                                                <div class="col-sm-9">
                                                    <select name="feeding" class="form-control" id="color">
                                                        <option value="No Concern">No Concern</option>
                                                        <option value="Need Support">Need Support</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="dressing" class="col-sm-3 control-label"> Dressing</label>
                                                <div class="col-sm-9">
                                                    <select name="dressing" class="form-control" id="color">
                                                        <option value="No Concern">No Concern</option>
                                                        <option value="Need Support">Need Support</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="toiletting" class="col-sm-3 control-label"> Toiletting</label>
                                                <div class="col-sm-9">
                                                    <select name="toiletting" class="form-control" id="color">
                                                        <option value="No Concern">No Concern</option>
                                                        <option value="Need Support">Need Support</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="independence" class="col-sm-3 control-label"> Independence</label>
                                                <div class="col-sm-9">
                                                    <select name="independence" class="form-control" id="color">
                                                        <option value="Like to be alone">Like to be alone</option>
                                                        <option value="Like to be with others">Like to be with others</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="behavior" class="col-sm-3 control-label"> Behaviors / Personality</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="Type or Select" name="behavior" list="behavior" required >
                                                    <datalist id="behavior">
                                                        <option value="Get angry easily">Get angry easily</option>
                                                        <option value="Temper tantrum">Temper tantrum</option>
                                                        <option value="Friendly">Friendly</option>
                                                        <option value="Calm">Calm</option>
                                                        <option value="Easily Distracted">Easily Distracted</option>
                                                        <option value="Head Banging">Head Banging</option>
                                                        <option value="Throwing">Throwing</option>
                                                        <option value="Bitting">Bitting</option>
                                                        <option value="Hitting">Hitting</option>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="stereotypic" class="col-sm-3 control-label">Stereotypic Behaviors</label>
                                                <div class="col-sm-9">
                                                    <select name="stereotypic" class="form-control" id="color">
                                                        <option value="Spinning">Spinning</option>
                                                        <option value="Spin Wheels">Spin Wheels</option>
                                                        <option value="Put every thing in order">Put every thing in order</option>
                                                        <option value="Tip toe walking">Tip toe walking</option>
                                                        <option value="Flapping">Flapping</option>
                                                        <option value="Shaking Body">Shaking Body</option>
                                                        <option value="Difficult to change routing">Difficult to change routing</option>
                                                        <option value="Self stimulation behaviors">Self stimulation behaviors</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                        <div class="modal-footer">
                                            <input type="hidden" name="patientid" id="id" value="<?php echo $patient->patient_id; ?>" />
                                            <input type="hidden" name="time" id="id" value="<?php echo date('H:i:s'); ?>" />
                                            <input type="hidden" name="date" id="id" value="<?php echo date('Y-m-d'); ?>" />
                                            <input type="hidden" name="doctorid" id="id" value="<?php echo $name; ?>" />
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" name='save' class="btn btn-primary">Save changes</button>
                                        </div>
                                        <?php echo form_close();?>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        
                        
<!-- MODEL - Cognitive -->
<!-- ***************************************************************************************************************************************** -->
                        <div class="modal fade" id="cognitive" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <!--form class="form-horizontal" method="POST" action="<!?php echo base_url()."Calendar/add_data";?>"-->
                                        <?php 
                                        $attri = array(
                                            'class'=>'form-horizontal'
                                        );
                                        echo form_open('DoctorView/add_cognitive_skills',$attri);?>
                                        <div class="model-head">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Cognitive and Communication development</h4>
                                        </div>
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label for="problem" class="col-sm-3 control-label">Problem Solving: Building blocks </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="Type or Select" name="problem" list="problem" required >
                                                    <datalist id="problem">
                                                        <option value="Put blocks in order">Put blocks in order</option>
                                                        <option value="Make Towers">Make Towers</option>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="maching" class="col-sm-3 control-label">Maching / Sorting</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="Type or Select" name="maching" list="maching" required >
                                                    <datalist id="maching">
                                                        <option value="Picture to picture">Picture to picture</option>
                                                        <option value="Picture to Word">Picture to Word</option>
                                                        <option value="Word to word">Word to word</option>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="colors" class="col-sm-3 control-label">Colors</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="colors" class="form-control"   placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="sizes" class="col-sm-3 control-label"> Sizes </label>
                                                <div class="col-sm-9">
                                                    <input type="checkbox" name="sizes" value="Big" >&nbsp;&nbsp; Big <br/>
                                                    <input type="checkbox" name="sizes" value="Small">&nbsp;&nbsp; Small <br/>
                                                    <input type="checkbox" name="sizes" value="Short" >&nbsp;&nbsp; Short <br/>
                                                    <input type="checkbox" name="sizes" value="Long">&nbsp;&nbsp; Long <br/>
                                                    <input type="checkbox" name="sizes" value="Tall">&nbsp;&nbsp; Tall <br/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="sequencing" class="col-sm-3 control-label">Sequencing</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="sequencing" class="form-control"   placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="numbering" class="col-sm-3 control-label"> Numbers</label>
                                                <div class="col-sm-9">
                                                    <div class="col-sm-6">
                                                        <div class="col-sm-5">Counting: </div>
                                                        <div class="col-sm-7">
                                                            <input type="text" name="counting" class="form-control"   placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="col-sm-5">Concept: </div>
                                                        <div class="col-sm-7">
                                                            <select name="concept" class="form-control" id="color">
                                                                <option value="Positive">Positive</option>
                                                                <option value="Negative">Negative</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="memory" class="col-sm-3 control-label"> Memory / tecognition</label>
                                                <div class="col-sm-9">
                                                    <select name="memory" class="form-control" id="color">
                                                        <option value="Recognize familier faces">Recognize familier faces</option>
                                                        <option value="Poor">Poor</option>
                                                        <option value="Good">Good</option>
                                                        <option value="Fine">Fine</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="play" class="col-sm-3 control-label"> Play / Interests / Hobbies</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="Type or Select" name="play" list="play" required >
                                                    <datalist id="play">
                                                        <option value="Pretend Play">Pretend Play</option>
                                                        <option value="Water">Water</option>
                                                        <option value="Sand">Sand</option>
                                                        <option value="Music">Music</option>
                                                        <option value="TV">TV</option>
                                                        <option value="Videos">Videos</option>
                                                        <option value="Animals">Animals</option>
                                                        <option value="Vehicals">Vehicals</option>
                                                        <option value="Solitary Play">Solitary Play</option>
                                                    </datalist>
                                                </div>
                                            </div>
                                            
                                            <h4>Communication Development</h4>
                                            <div class="form-group">
                                                <label for="interaction" class="col-sm-3 control-label">Interaction</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="interaction" class="form-control"   placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="babble" class="col-sm-3 control-label">Babble</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="babble" class="form-control"   placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="firstWord" class="col-sm-3 control-label">First Word</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="firstWord" class="form-control"   placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="wordTogether" class="col-sm-3 control-label">Word Together</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="wordTogether" class="form-control"   placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="expressingNeeds" class="col-sm-3 control-label">Expressing Needs</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="expressingNeeds" class="form-control"   placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="school" class="col-sm-3 control-label"> Nursery / School / 
                                                work </label>
                                                <div class="col-sm-9">
                                                    <select name="school" class="form-control" id="color">
                                                        <option value="Disterbed">Disterbed</option>
                                                        <option value="Poor">Poor</option>
                                                        <option value="Good">Good</option>
                                                        <option value="Fine">Fine</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                        <div class="modal-footer">
                                            <input type="hidden" name="patientid" id="id" value="<?php echo $patient_id; ?>" />
                                            <input type="hidden" name="time" id="id" value="<?php echo date('H:i:s'); ?>" />
                                            <input type="hidden" name="date" id="id" value="<?php echo date('Y-m-d'); ?>" />
                                            <input type="hidden" name="doctorid" id="id" value="<?php echo $name; ?>" />
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" name='save' class="btn btn-primary">Save changes</button>
                                        </div>
                                        <?php echo form_close();?>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        

<!-- MODEL - FAMILY AND MEDICAL HISTORY -->
<!-- ***************************************************************************************************************************************** -->                      
                        <!-- Modal -->
                        <div class="modal fade" id="notes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <!--form class="form-horizontal" method="POST" action="<!?php echo base_url()."Calendar/add_data";?>"-->
                                        <?php 
                                        $attri = array(
                                            'class'=>'form-horizontal'
                                        );
                                        echo form_open('DoctorView/add_case_notes',$attri);?>
                                        <div class="model-head">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Case History Notes</h4>
                                        </div>
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <textarea name="cese_notes" class="form-control"   placeholder=""></textarea>
                                                </div>
                                            </div>

                                        </div>  

                                        <div class="modal-footer">
                                            <input type="hidden" name="patientid" id="id" value="<?php echo $patient_id; ?>" />
                                            <input type="hidden" name="time" id="id" value="<?php echo date('H:i:s'); ?>" />
                                            <input type="hidden" name="date" id="id" value="<?php echo date('Y-m-d'); ?>" />
                                            <input type="hidden" name="doctorid" id="id" value="<?php echo $name; ?>" />
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" name='save' class="btn btn-primary">Save changes</button>
                                        </div>
                                        <?php echo form_close();?>
                                    </div>
                                </div>
                            </div>

                    </div>

<!-- MODEL - FAMILY AND MEDICAL HISTORY -->
<!-- ***************************************************************************************************************************************** -->
                    <div id="medication" style="display: none" >

                    </div>
                    
                    
<!-- MODEL - FAMILY AND MEDICAL HISTORY -->
<!-- ***************************************************************************************************************************************** -->
                    <div id="goals" style="display: none" >

                    </div>
                    
                    
<!-- MODEL - FAMILY AND MEDICAL HISTORY -->
<!-- ***************************************************************************************************************************************** -->
                    <div id="progress" style="display: none" >
                    </div>
                    
                    
<!-- MODEL - FAMILY AND MEDICAL HISTORY -->
<!-- ***************************************************************************************************************************************** -->
                    <div id="notes" style="display: none" ></div>
                    
<!-- MODEL - FAMILY AND MEDICAL HISTORY -->
<!-- ***************************************************************************************************************************************** -->   
                    <div id="references" style="display: none" ></div>
                    
<!-- MODEL - FAMILY AND MEDICAL HISTORY -->
<!-- ***************************************************************************************************************************************** --> 
                    <div id="cognitiveTest" style="display: none" ></div>
                    
<!-- MODEL - FAMILY AND MEDICAL HISTORY -->
<!-- ***************************************************************************************************************************************** -->
                    <div id="discharge" style="display: none" ></div>
                            
                </div>
                
<!-- MODEL - FAMILY AND MEDICAL HISTORY -->
<!-- ***************************************************************************************************************************************** -->
                <div class="col-md-5">
                        <div class="col-sm-2 col-icon-box " onclick="viewPatients()" >
                            <img src="<?php echo base_url()."asserts/images/icons/patient.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
                            <div class="overlay">
                                <div class="text">View Patient</div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-icon-box "  onclick="caseHistory()">
                            <img src="<?php echo base_url()."asserts/images/icons/medical_history_icon.jpg"; ?>" class="img-thumbnail" width="100px" height="100px" />
                            <div class="overlay">
                                <div class="text">Case History</div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-icon-box " onclick="medication()">
                            <img src="<?php echo base_url()."asserts/images/icons/medicine.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
                            <div class="overlay">
                                <div class="text">Medications</div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-icon-box " onclick="goals()">
                            <img src="<?php echo base_url()."asserts/images/icons/goal.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
                            <div class="overlay">
                                <div class="text">Set Goals</div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-icon-box "  onclick="progress()">
                            <img src="<?php echo base_url()."asserts/images/icons/progress.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
                            <div class="overlay">
                                <div class="text">Progress</div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-icon-box " onclick="notes()">
                            <img src="<?php echo base_url()."asserts/images/icons/notes.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
                            <div class="overlay">
                                <div class="text">Doctor's<br/>Notes</div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-icon-box "  onclick="references()">
                            <img src="<?php echo base_url()."asserts/images/icons/reference_letters.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
                            <div class="overlay">
                                <div class="text">References</div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-icon-box " onclick="cognitiveTest()">
                            <img src="<?php echo base_url()."asserts/images/icons/quiz.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
                            <div class="overlay">
                                <div class="text">Cognitive <br/>Test</div>
                            </div>
                        </div>
                        
                        <div class="col-sm-2 col-icon-box " onclick="discharge()">
                            <img src="<?php echo base_url()."asserts/images/icons/discharge_plan.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
                            <div class="overlay">
                                <div class="text">Discharge<br/> Plan</div>
                            </div>
                        </div>
                    </div>

                
                
                
                
            </div>
            
        </div>
    </section>
</section>
<?php
    foreach ($allFamily as $familyHistory):
        if($patient_id == $familyHistory->patient_id){
?>
    <script> 
        document.getElementById("familyAdd").disabled = true;
        document.getElementById("familyView").disabled = false;familyview
    </script>

        <!-- MODEL - FAMILY AND MEDICAL HISTORY -->
<!-- ***************************************************************************************************************************************** -->                              <div class="modal fade" id="familyview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        
                                        <div class="model-head">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Case History Notes</h4>
                                        </div>
                                        <div class="modal-body">

                                            
                                                
                                                    <table class="table table-condensed table-bordered " >
                                                        
                                                        <thead class="text-center">
                                                            <tr>
                                                                <th colspan="2">Family History</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                       
                                                        <tr>
                                                            <td>Father</td>
                                                            <td><?php echo $familyHistory->father; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mother</td>
                                                            <td><?php echo $familyHistory->mother; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>No of Sibilings</td>
                                                            <td><?php echo $familyHistory->mother; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Names of Sibilings</td>
                                                            <td><?php echo $familyHistory->mother; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Home situation</td>
                                                            <td><?php echo $familyHistory->mother; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Presenting Problems</td>
                                                            <td><?php echo $familyHistory->mother; ?> </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <table class="table table-condensed table-bordered" >
                                                        <thead class="text-center">
                                                            <tr>
                                                                <th colspan="2">Medical History</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>During Pregnancy</td>
                                                            <td><?php echo $familyHistory->mother; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>At birth</td>
                                                            <td><?php echo $familyHistory->mother; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mode of delivery</td>
                                                            <td><?php echo $familyHistory->mother; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Birth Weight</td>
                                                            <td><?php echo $familyHistory->mother; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Birth Cry</td>
                                                            <td><?php echo $familyHistory->mother; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>After Birth</td>
                                                            <td><?php echo $familyHistory->mother; ?> </td>
                                                        </tr>  
                                                        <tr>
                                                            <td>Relevent illnesses</td>
                                                            <td><?php echo $familyHistory->mother; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Medications / Investigations</td>
                                                            <td><?php echo $familyHistory->mother; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Audiology Results</td>
                                                            <td><?php echo $familyHistory->mother; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Left Side :</td>
                                                            <td><?php echo $familyHistory->mother; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Right Side :</td>
                                                            <td><?php echo $familyHistory->mother; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vision</td>
                                                            <td><?php echo $familyHistory->mother; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Left Side :</td>
                                                            <td><?php echo $familyHistory->mother; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Right Side :</td>
                                                            <td><?php echo $familyHistory->mother; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Histry of related Conditions in Family</td>
                                                            <td><?php echo $familyHistory->mother; ?> </td>
                                                        </tr>

                                                    </table>
                                                </div>  

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       


<?php
        }else{
?>
    <script> 
        document.getElementById("familyAdd").disabled = false;
        document.getElementById("familyView").disabled = true;
    </script>
<?php
        }
    endforeach;
?>

<?php
    foreach ($allComm as $comm):
        if($patient_id == $comm->patient_id){
?>
    <script> 
        document.getElementById("commAdd").disabled = true;
        document.getElementById("commView").disabled = false;
    </script>
<?php
        }else{
?>
    <script> 
        document.getElementById("commAdd").disabled = false;
        document.getElementById("commView").disabled = true;
    </script>
<?php
        }
    endforeach;
?>

<?php
    foreach ($allMotor as $mortor):
        if($patient_id == $mortor->patient_id){
?>
    <script> 
        document.getElementById("mortorAdd").disabled = true;
        document.getElementById("mortorView").disabled = false;
    </script>
<?php
        }else{
?>
    <script> 
        document.getElementById("mortorAdd").disabled = false;
        document.getElementById("mortorView").disabled = true;
    </script>
<?php
        }
    endforeach;
?>
<?php
    foreach ($allCog as $cog):
        if($patient_id == $cog->patient_id){
?>
    <script> 
        document.getElementById("cogAdd").disabled = true;
        document.getElementById("cogView").disabled = false;
    </script>
<?php
        }else{
?>
    <script> 
        document.getElementById("cogAdd").disabled = false;
        document.getElementById("cogView").disabled = true;
    </script>
<?php
        }
    endforeach;
?>

<?php
    foreach ($allNotes as $notes):
        if($patient_id == $notes->patient_id){
?>
    <script> 
        document.getElementById("caseAdd").disabled = true;
        document.getElementById("caseView").disabled = false;
    </script>
<?php
        }else{
?>
    <script> 
        document.getElementById("caseAdd").disabled = false;
        document.getElementById("caseView").disabled = true;
    </script>
<?php
        }
    endforeach;
?>


<script>
    function viewPatients() {
        $("#viewPatient").show();  
        $("#caseHistory,#medication,#goals,#progress,#notes,#references,#cognitiveTest,#discharge").hide();   
    }
    function caseHistory() {
        $("#caseHistory").show();
        $("#viewPatient,#medication,#goals,#progress,#notes,#references,#cognitiveTest,#discharge").hide(); 
    }
    function medication() {
        $("#medication").show();
        $("#caseHistory,#viewPatient,#goals,#progress,#notes,#references,#cognitiveTest,#discharge").hide();  
    }
    function goals() {
        $("#goals").show();
        $("#caseHistory,#viewPatient,#medication,#progress,#notes,#references,#cognitiveTest,#discharge").hide(); 
    }
    function progress() {
        $("#progress").show();
        $("#caseHistory,#viewPatient,#medication,#goals,#notes,#references,#cognitiveTest,#discharge").hide(); 
    }
    function notes() {
        $("#notes").show();
        $("#caseHistory,#viewPatient,#medication,#goals,#progress,#references,#cognitiveTest,#discharge").hide(); 
    }
    function references() {
        $("#references").show();
        $("#caseHistory,#viewPatient,#medication,#goals,#progress,#notes,#cognitiveTest,#discharge").hide(); 
    }
    function cognitiveTest() {
        $("#cognitiveTest").show();
        $("#caseHistory,#viewPatient,#medication,#goals,#progress,#notes,#references,#discharge").hide(); 
    }
    function discharge() {
        $("#discharge").show();
        $("#caseHistory,#viewPatient,#medication,#goals,#progress,#notes,#references,#cognitiveTest,").hide(); 
    }
   
    
</script>