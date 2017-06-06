<?php
        if (isset($this->session->userdata['logged_in'])) 
        {
            $username = ($this->session->userdata['logged_in']['username']);
            $email = ($this->session->userdata['logged_in']['email']);
            $name = ($this->session->userdata['logged_in']['name']);
            $picture = ($this->session->userdata['logged_in']['picture']);
            $status = ($this->session->userdata['logged_in']['status']);
            $doctorID = ($this->session->userdata['logged_in']['doctorId']);
            
            if($status != 'Doctor'){
                redirect('/Login');
            }
        } else{
            redirect('/Login');
        }
    ?>
<style>
    .modal-dialog {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 2%;
border-radius: 20px;
}

.modal-content {
  height: auto;
  
  
}
</style>
<section class="wrapper">
    <div class="contentContainer">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="<?php echo base_url() . "DoctorView" ?>">Home </a></li>   			  	
                    <li>Patient : &nbsp;   <!-- Current Page -->
                        <?php
                            
                         foreach ($patients as $patient):
                                if($patient->patient_id == $patient_id){
                                    echo $patient->patient_name; // Print patient name
                                }
                                $this->session->set_userdata('patient_sess',$patient->patient_id);
                        endforeach;                             
                        ?>                             
                    </li>					  	
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <!-- display error messages or success messages -->
                <?php
                    echo "<div class='error_msg'>";
                    echo validation_errors();
                    echo "</div>";
                    echo "<div class='error_msg'>";

                        if(isset($successMessage))
                        {
                ?>
                        <script>
                            swal('', '<?php  echo $successMessage ?>','success') //Success message
                        </script>
                <?php 
                        }
                        if(isset($errorMessage))
                        {
                ?>
                        <script>
                            swal('Oops... sorry','<?php  echo $errorMessage ?>','error') // error message
                        </script>
                <?php 

                        }
                        echo "</div>";
                ?>

                
                
  <!--  View Patient Details -->  
                <div id="viewPatient" style="display: none"> <!-- hide div by default -->
                    <div class="col-md-12" >
                        
                            <div class="col-md-3">
                                <div class="white_back container" >
                                <ul class="nav nav-pills nav-stacked">
                                    <li class="active"><a data-toggle="pill" href="#generalDetails">Genaral Details</a></li>
<<<<<<< HEAD:Group-07/NiceAdmin/application/views/doctor/doc_view_patient.php
                                    <li><a data-toggle="pill" href="#caseHistoryHistory">Case History</a></li>
                                    <li><a data-toggle="pill" href="#problemHistory">Problem</a></li>
=======
                                    <li><a data-toggle="pill" href="#problemHistory">Problem/Diagnosis</a></li>
                                    <li><a data-toggle="pill" href="#caseHistoryHistory">Case History</a></li>
>>>>>>> dd9595d42c59244d49c19c907f9097501ce54ea5:NiceAdmin/application/views/doctor/doc_view_patient.php
                                    <li><a data-toggle="pill" href="#goalEvaluationHistory">Goals Evaluation</a></li>
                                    <li><a data-toggle="pill" href="#cognitiveTestHistory">Cognitive Test</a></li>
                                    <li><a data-toggle="pill" href="#meicationsHistory">Medications</a></li>
                                    <li><a data-toggle="pill" href="#notesHistory">Doctor's Notes</a></li>
                                    <li><a data-toggle="pill" href="#referncesHistory">References</a></li>
                                </ul>
                                    </div>
                            </div>
                        
                        <div class="col-md-9">
                            <div class="white_back container" >
                                <div class="tab-content">
                                    <div id="generalDetails" class="tab-pane fade in active">
                                        
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
                                    
                                    <div id="caseHistoryHistory" class="tab-pane fade">
                                        <div class="col-md-12">                           
                                            <ul class="nav nav-pills nav-justified">
                                                <li class="active"><a data-toggle="pill" href="#familyHistory">Family/Medical</a></li>
                                                <li><a data-toggle="pill" href="#commhistory">communicationn</a></li>
                                                <li><a data-toggle="pill" href="#mortorhistory">Mortor</a></li>
                                                <li><a data-toggle="pill" href="#coghistory">Cognitive</a></li>
                                                <li><a data-toggle="pill" href="#case_noteshistory">Case_notes</a></li>
                                            </ul>

                    <!-- display tab pane body -->
                                            <div class="tab-content">

                    <!-- family history display -->
                                                <div id="familyHistory" class="tab-pane fade in active">
                                                    <div class="white_back">
                                                        <h3 class="text-center">Family and Medical History</h3><hr>
                                                            
                                                        <?php
                                                            foreach ($getFamily as $familyHistory):
                                                                if($patient_id == $familyHistory->patient_id)
                                                                {
                                                        ?>  

                                                                    <table class="table table-condensed table-bordered"> <!-- family history -->

                                                                        <thead>
                                                                            <tr class="success">
                                                                                <th class="text-center" colspan="2">Family History</th>
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
                                                                                <td><?php echo $familyHistory->no_of_sibilings; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Names of Sibilings</td>
                                                                                <td><?php echo $familyHistory->names_of_sibilings; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Home situation</td>
                                                                                <td><?php echo $familyHistory->home_situation; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Presenting Problems</td>
                                                                                <td><?php echo $familyHistory->presenting_problems; ?> </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                    <table class="table table-condensed table-bordered">  <!-- medical history -->
                                                                        <thead>
                                                                            <tr class="success">
                                                                                <th class="text-center" colspan="2">Medical History</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>During Pregnancy</td>
                                                                                <td><?php echo $familyHistory->during_pregnancy; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>At birth</td>
                                                                                <td><?php echo $familyHistory->at_birth; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Mode of delivery</td>
                                                                                <td><?php echo $familyHistory->mode_of_dilivery; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Birth Weight</td>
                                                                                <td><?php echo $familyHistory->birth_weight; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Birth Cry</td>
                                                                                <td><?php echo $familyHistory->birth_cry; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>After Birth</td>
                                                                                <td><?php echo $familyHistory->after_birth; ?> </td>
                                                                            </tr>  
                                                                            <tr>
                                                                                <td>Relevent illnesses</td>
                                                                                <td><?php echo $familyHistory->relevent_illnesses; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Medications / Investigations</td>
                                                                                <td><?php echo $familyHistory->medications; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Audiology Results</td>
                                                                                <td><?php echo $familyHistory->audiology; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Left Side :</td>
                                                                                <td><?php echo $familyHistory->audio_left; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Right Side :</td>
                                                                                <td><?php echo $familyHistory->audiio_right; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Vision</td>
                                                                                <td><?php echo $familyHistory->vision; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Left Side :</td>
                                                                                <td><?php echo $familyHistory->vision_left; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Right Side :</td>
                                                                                <td><?php echo $familyHistory->vision_right; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Histry of related Conditions in Family</td>
                                                                                <td><?php echo $familyHistory->related_history_family; ?> </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
<<<<<<< HEAD:Group-07/NiceAdmin/application/views/doctor/doc_view_patient.php
=======
                                                                    <table class="table table-condensed table-bordered">
                                                                        <tr class="active">
                                                                            <td><?php echo $familyHistory->doc_name; ?></td>
                                                                            <td><?php echo $familyHistory->date; ?></td>
                                                                            <td><?php echo $familyHistory->time; ?></td>
                                                                        </tr>
                                                                    </table>
>>>>>>> dd9595d42c59244d49c19c907f9097501ce54ea5:NiceAdmin/application/views/doctor/doc_view_patient.php
                                                        <?php 
                                                            }

                                                            endforeach;
                                                        ?>
                                                             
                                                    </div>
                                                </div>

                    <!-- display communication skills -->
                                                <div id="commhistory" class="tab-pane fade">
                                                    <div class="white_back">
                                                        <h3 class="text-center">Communication Skills</h3><hr>
                                                            
                                                        <?php
                                                            foreach ($getComm as $communication):
                                                                if($patient_id == $communication->patient_id)
                                                                {
                                                        ?>
                                                                    <table class="table table-condensed table-bordered " >

                                                                        <thead>
                                                                            <tr class="success">
                                                                                <th class="text-center" colspan="2">Communication</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Functional Communication</td>
                                                                                <td><?php echo $communication->func_comm; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Listening Skills</td>
                                                                                <td><?php echo $communication->listening; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Attention Skills</td>
                                                                                <td><?php echo $communication->attetion; ?> </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                    <table class="table table-condensed table-bordered " >           
                                                                        <thead>
                                                                            <tr class="success">
                                                                                <th class="text-center" colspan="2">Oral Skills / Examination</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Sucking</td>
                                                                                <td><?php echo $communication->sucking; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Chewing </td>
                                                                                <td><?php echo $communication->chewing; ?> </td>
                                                                            </tr>
                                                                                <tr>
                                                                                <td>Blowing</td>
                                                                                <td><?php echo $communication->blowing; ?> </td>
                                                                            </tr>
                                                                                <tr>
                                                                                <td>Strow</td>
                                                                                <td><?php echo $communication->strow; ?> </td>
                                                                            </tr>
                                                                                <tr>
                                                                                <td>Drooling</td>
                                                                                <td><?php echo $communication->drooling; ?> </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                    <table class="table table-condensed table-bordered " >           
                                                                        <thead>
                                                                            <tr class="success">
                                                                                <th class="text-center" colspan="2">Comprehension</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr class="active">
                                                                                <td colspan="2">Non verbal</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Facial expressions</td>
                                                                                <td><?php echo $communication->com_non_facial; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Gestures</td>
                                                                                <td><?php echo $communication->com_non_gesture; ?> </td>
                                                                            </tr>
                                                                            <tr class="active">
                                                                                <td colspan="2">verbal</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Word Level</td>
                                                                                <td><?php echo $communication->com_verbal; ?> </td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>

                                                                    <table class="table table-condensed table-bordered " >           
                                                                        <thead>
                                                                            <tr class="success">
                                                                                <th class="text-center" colspan="2">Expression</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr class="active">
                                                                                <td colspan="2">Non verbal</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Facial expressions</td>
                                                                                <td><?php echo $communication->expre_non_facial; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Gestures</td>
                                                                                <td><?php echo $communication->expre_non_gesture; ?> </td>
                                                                            </tr>
                                                                            <tr class="active">
                                                                                <td colspan="2">verbal</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Word Level</td>
                                                                                <td><?php echo $communication->expre_verbal; ?> </td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>

                                                                    <table class="table table-condensed table-bordered " >           
                                                                        <thead>
                                                                            <tr class="success">
                                                                                <th class="text-center" colspan="2">Speech</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <tr>
                                                                                <td>Articulation</td>
                                                                                <td><?php echo $communication->articulation; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Intelligibility</td>
                                                                                <td><?php echo $communication->intelligibility; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Phonology(speech sounds & processes )</td>
                                                                                <td><?php echo $communication->phonollogy; ?> </td>
                                                                            </tr>
                                                                            <tr class="active">
                                                                                <td colspan="2">Syntax & Morphology</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Sentence Structure</td>
                                                                                <td><?php echo $communication->sentence; ?> </td>
                                                                            </tr>
                                                                            <tr class="active">
                                                                                <td colspan="2">Vocabulary & Semantics</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Words & meanings</td>
                                                                                <td><?php echo $communication->word_meaning; ?> </td>
                                                                            </tr>                                            
                                                                        </tbody>
                                                                    </table>

                                                                    <table class="table table-condensed table-bordered " >           
                                                                        <thead>
                                                                            <tr class="success">
                                                                                <th class="text-center" colspan="2">Pragmatics</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <tr>
                                                                                <td>Conversations</td>
                                                                                <td><?php echo $communication->convertations; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Eye contact</td>
                                                                                <td><?php echo $communication->eye_contact; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Turn Taking</td>
                                                                                <td><?php echo $communication->turn_taking; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Initiating</td>
                                                                                <td><?php echo $communication->initiating; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Appropriate Answers</td>
                                                                                <td><?php echo $communication->appropriate_answer; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Voice</td>
                                                                                <td><?php echo $communication->voice; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Fluency</td>
                                                                                <td><?php echo $communication->fluency; ?> </td>
                                                                            </tr>
                                                                           <tr>
                                                                                <td>Other factors/Information</td>
                                                                                <td><?php echo $communication->other; ?> </td>
                                                                            </tr><tr>
                                                                                <td>Prognosis</td>
                                                                                <td><?php echo $communication->prognosis; ?> </td>
                                                                            </tr>                                           
                                                                        </tbody>
<<<<<<< HEAD:Group-07/NiceAdmin/application/views/doctor/doc_view_patient.php
                                                                    </table>               
=======
                                                                    </table> 
                                                                    <table class="table table-condensed table-bordered">
                                                                        <tr class="active">
                                                                            <td><?php echo $communication->doc_name; ?></td>
                                                                            <td><?php echo $communication->date; ?></td>
                                                                            <td><?php echo $communication->time; ?></td>
                                                                        </tr>
                                                                    </table>
>>>>>>> dd9595d42c59244d49c19c907f9097501ce54ea5:NiceAdmin/application/views/doctor/doc_view_patient.php

                                                        <?php 
                                                            }
                                                            endforeach;
                                                        ?>
                                                            
                                                    </div>
                                                </div>

                    <!-- display mortor skills -->
                                                <div id="mortorhistory" class="tab-pane fade">
                                                    <div class="white_back">
                                                        <h3 class="text-center">Mortor Skills</h3><hr>
                                                            
                                                        <?php
                                                            foreach ($getMotor as $Motor):
                                                                if($patient_id == $Motor->patient_id)
                                                                {
                                                        ?>
                                                                    <table class="table table-condensed table-bordered">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Gross</td>
                                                                                <td><?php echo $Motor->gross; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Fine</td>
                                                                                <td><?php echo $Motor->fine; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Social</td>
                                                                                <td><?php echo $Motor->social; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Feeding</td>
                                                                                <td><?php echo $Motor->feeding; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Dressing</td>
                                                                                <td><?php echo $Motor->dressing; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Toileting</td>
                                                                                <td><?php echo $Motor->toileting; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Independence</td>
                                                                                <td><?php echo $Motor->independence; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Behaviors/Personality</td>
                                                                                <td><?php echo $Motor->personality; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Stereotypic behavior</td>
                                                                                <td><?php echo $Motor->stereotypic_behaviors; ?> </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
<<<<<<< HEAD:Group-07/NiceAdmin/application/views/doctor/doc_view_patient.php
=======
                                                                    <table class="table table-condensed table-bordered">
                                                                        <tr class="active">
                                                                            <td><?php echo $Motor->doc_name; ?></td>
                                                                            <td><?php echo $Motor->date; ?></td>
                                                                            <td><?php echo $Motor->time; ?></td>
                                                                        </tr>
                                                                    </table>
>>>>>>> dd9595d42c59244d49c19c907f9097501ce54ea5:NiceAdmin/application/views/doctor/doc_view_patient.php


                                                        <?php 
                                                            }
                                                            endforeach;
                                                        ?>
                                                            
                                                    </div>
                                                </div>

                    <!-- display cognative skills --> 
                                                <div id="coghistory" class="tab-pane fade">
                                                    <div class="white_back">
                                                        <h3 class="text-center">Cognitive and Communication development</h3><hr>
                                                            
                                                        <?php
                                                            foreach ($getCog as $Cognitive):
                                                                if($patient_id == $Cognitive->patient_id)
                                                                {
                                                        ?>
                                                                    <table class="table table-condensed table-bordered " >
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Problem solving : Building blocks</td>
                                                                                <td><?php echo $Cognitive->problem_solving; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Matching / Sorting</td>
                                                                                <td><?php echo $Cognitive->matching; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Colors</td>
                                                                                <td><?php echo $Cognitive->colors; ?> </td>
                                                                            </tr>
                                                                             <tr>
                                                                                <td>Sizes</td>
                                                                                <td><?php echo $Cognitive->sizes; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Sequencing</td>
                                                                                <td><?php echo $Cognitive->sequencing; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2" class="active">Numbers</td>

                                                                            </tr>
                                                                            <tr>
                                                                                <td>Counting</td>
                                                                                <td><?php echo $Cognitive->counting; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Concept</td>
                                                                                <td><?php echo $Cognitive->concept; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Memory/Tecognition</td>
                                                                                <td><?php echo $Cognitive->memory; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Play/Iterests/Hobbies</td>
                                                                                <td><?php echo $Cognitive->hobbies; ?> </td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>

                                                                    <table class="table table-condensed table-bordered " >
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Interaction</td>
                                                                                <td><?php echo $Cognitive->interaction; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Babble</td>
                                                                                <td><?php echo $Cognitive->babble; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>First Words</td>
                                                                                <td><?php echo $Cognitive->first_word; ?> </td>
                                                                            </tr>
                                                                             <tr>
                                                                                <td>Words Together</td>
                                                                                <td><?php echo $Cognitive->word_together; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Expressing Needs</td>
                                                                                <td><?php echo $Cognitive->eppressing_needs; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Nursery/School/College/Work</td>
                                                                                <td><?php echo $Cognitive->school; ?> </td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
<<<<<<< HEAD:Group-07/NiceAdmin/application/views/doctor/doc_view_patient.php
=======
                                                                    <table class="table table-condensed table-bordered">
                                                                        <tr class="active">
                                                                            <td><?php echo $Cognitive->doc_name; ?></td>
                                                                            <td><?php echo $Cognitive->date; ?></td>
                                                                            <td><?php echo $Cognitive->time; ?></td>
                                                                        </tr>
                                                                    </table>
>>>>>>> dd9595d42c59244d49c19c907f9097501ce54ea5:NiceAdmin/application/views/doctor/doc_view_patient.php


                                                        <?php 
                                                            }
                                                                endforeach;
                                                        ?>
                                                        
                                                    </div>
                                                </div>

                    <!-- display cognative skills --> 
                                                <div id="case_noteshistory" class="tab-pane fade">
                                                    <div class="white_back">
                                                        <h3 class="success text-center">Case notes</h3><hr>
                                                          
                                                        <?php
                                                            foreach ($getNotes as $Notes):
                                                                if($patient_id == $Notes->patient_id)
                                                                {
                                                        ?>
<<<<<<< HEAD:Group-07/NiceAdmin/application/views/doctor/doc_view_patient.php
                                                                    <table class="table table-condensed table-bordered " >

                                                                        <tbody>

                                                                            <tr>
                                                                                <td><?php echo $Notes->note; ?> </td>
                                                                            </tr>

                                                                            </tbody>
                                                                    </table>

=======
                                                                    <p>
                                                                        <?php echo $Notes->note; ?>

                                                                    </p>
                                                                    <table class="table table-condensed table-bordered">
                                                                        <tr class="active">
                                                                            <td><?php echo $Notes->doc_name; ?></td>
                                                                            <td><?php echo $Notes->date; ?></td>
                                                                            <td><?php echo $Notes->time; ?></td>
                                                                        </tr>
                                                                    </table>

>>>>>>> dd9595d42c59244d49c19c907f9097501ce54ea5:NiceAdmin/application/views/doctor/doc_view_patient.php

                                                        <?php 
                                                            }endforeach;
                                                        ?>
                                                            
                                                    </div>
                                                </div>
                                            </div>                                              

                                        </div>
                                    </div> 
                                    
                                    <div id="problemHistory" class="tab-pane fade">
<<<<<<< HEAD:Group-07/NiceAdmin/application/views/doctor/doc_view_patient.php

                     
                                    </div>
                                    <div id="goalEvaluationHistory" class="tab-pane fade">
                                        <h3>Menu 3</h3>
                                        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
=======
                                        <div id="diagnosis_table">
                                            <div class="white_back">
                                                <h3 class="success text-center">Diagnosis</h3><hr>
                                                
                                            <?php
                                                foreach ($getDiagnosis as $diagnosis):
                                                    if($patient_id == $diagnosis->patient_id)
                                                    {
                                            ?>
                                                <p><?php echo $diagnosis->diagnosis; ?> </p>
                                                    
                                                        <table class="table table-condensed table-bordered">
                                                            <tr class="active">
                                                                <td><?php echo $diagnosis->doc_name; ?></td>
                                                                <td><?php echo $diagnosis->date; ?></td>
                                                                <td><?php echo $diagnosis->time; ?></td>
                                                            </tr>
                                                        </table>

                                            <?php 
                                                }endforeach;
                                            ?>
                                                </div>
                                                
                                        </div>
                                        <div id="problem_table">
                                            <div class="white_back">
                                                <h3 class="success text-center">Problem</h3><hr>
                                                
                                            <?php
                                                foreach ($getDiagnosis as $problems):
                                                    if($patient_id == $problems->patient_id)
                                                    {
                                            ?>
                                                <p><?php echo $problems->problem; ?></p>
                                                        <table class="table table-condensed table-bordered">
                                                            <tr class="active">
                                                                <td><?php echo $problems->doc_name; ?></td>
                                                                <td><?php echo $problems->date; ?></td>
                                                                <td><?php echo $problems->time; ?></td>
                                                            </tr>
                                                        </table>

                                            <?php 
                                                }endforeach;
                                            ?>
                                                </div>
                                            
                                        </div>
                     
                                    </div>
                                    <div id="goalEvaluationHistory" class="tab-pane fade">
                                        <h3 class="success text-center">Goal Evaluation</h3>
                                        
                                        <?php
                                            $dates = array();
                                            foreach($goalEvaluation as $goalmarks):
                                                $date = $goalmarks->date;
                                                if (in_array($date, $dates)){
                                                    continue;
                                                }else{
                                                    array_push($dates,$date);
                                                }
                                            endforeach;
                                        
                                            $goalsM = array();
                                            foreach($goalEvaluation as $goalmarks):
                                                $goal = $goalmarks->goal;
                                                $marks = $goalmarks->marks;
                                                if (in_array($goal, $goalsM)){
                                                    continue;
                                                }else{
                                                    array_push($goalsM,$goal);
                                                }
                                            endforeach;
                                        ?>
                                        <table class="table table-condensed table-bordered">
                                            <tr>
                                                <td></td>
                                                <?php
                                                    foreach ($dates as $dates):
                                                    echo "<td>".$dates."</td>";
                                                    endforeach;
                                                ?>
                                            </tr>
                                            <?php
                                                foreach($goalsM as $goalsM):
                                                echo "<tr><td>".$goalsM."</td>";
                                                    foreach($goalEvaluation as $goalmarks):
                                                        if ($goalsM == $goalmarks->goal){
                                                            echo "<td>".$goalmarks->marks."</td>";
                                                        }
                                                    endforeach;
                                                echo "</tr>";
                                                endforeach;
                                                
                                            ?>
                                            
                                        </table> 
>>>>>>> dd9595d42c59244d49c19c907f9097501ce54ea5:NiceAdmin/application/views/doctor/doc_view_patient.php
                                    </div>
                                    <div id="cognitiveTestHistory" class="tab-pane fade">
                                        <div class="white_back container">
                                            <h3 class="success text-center">Cognitive Test Final Marks</h3>
                                            <?php
                                                foreach($finalmarks as $final):
                                                if ($final->test_type == "A"){
                                            ?>

                                            <div class="col-lg-12">
                                                <table class="table table-condensed table-bordered"> 
                                                    <thead>
                                                        <tr class="success">
                                                            <th class="text-center" colspan="2">Test A Final Marks</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Deviation Quotients</td>
                                                            <td><?php echo $final->dq; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Percentile Ranks</td>
                                                            <td><?php echo $final->pr; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Description</td>
                                                            <td><?php echo $final->description; ?></td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr class="active">
                                                            <td><?php echo $final->doc_name; ?></td>
                                                            <td><?php echo $final->date; ?></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>

                                            <?php }else{ ?>
                                            <div class="col-lg-12">
                                                <table class="table table-condensed table-bordered"> 
                                                    <thead>
                                                        <tr class="success">
                                                            <th class="text-center" colspan="2">Test B Final Marks</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Deviation Quotients</td>
                                                            <td><?php echo $final->dq; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Percentile Ranks</td>
                                                            <td><?php echo $final->pr; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Description</td>
                                                            <td><?php echo $final->description; ?></td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr class="active">
                                                            <td><?php echo $final->doc_name; ?></td>
                                                            <td><?php echo $final->date; ?></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <?php 
                                                }
                                            endforeach;
                                            ?>
                                        </div>
                                    </div>
                                    <div id="meicationsHistory" class="tab-pane fade">
                                        <h3>Menu 3</h3>
                                        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    </div>
                                    <div id="notesHistory" class="tab-pane fade">
                                        <?php 
                                            foreach($doc_notes as $notes): 
                                        ?>
                                        
                                        <div class="panel-group">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" href="#<?php echo $notes->date; ?>">Doctor's Note: Date - <?php echo $notes->date; ?></a>
                                                    </h4>
                                                </div>
                                                <div id="<?php echo $notes->date; ?>" class="panel-collapse collapse">
                                                    <div class="panel-body"> <?php echo $notes->note; ?></div>
                                                    <div class="panel-footer"><?php echo $notes->doc_name; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <?php 
                                            endforeach; 
                                        ?>
                                    </div>
                                    <div id="referncesHistory" class="tab-pane fade">
                                    <?php 
                                        foreach($refernces as $reference):
                                        if ($patient_id == $reference->patient_id)
                                        {
                                    ?>     
                                        <div class="panel-group" id="accordion">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" href="#<?php echo $reference->clinic_no; ?>">Reference Details: Clinic - <?php echo $reference->clinic_no; ?></a>
                                                    </h4>
                                                </div>
                                                <div id="<?php echo $reference->clinic_no; ?>" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <table class="table" border="0">
                                                            <tr>
                                                                <td>Date </td>
                                                                <td>:</td>
                                                                <td><?php echo $reference->date; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Clinic </td>
                                                                <td>:</td>
                                                                <td><?php echo $reference->clinic_no; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Description </td>
                                                                <td>:</td>
                                                                <td><?php echo $reference->description; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Letter</td>
                                                                <td>:</td>
                                                                <td><a target="_blank" href="<?php echo base_url($reference->path); ?>">View Letter</a></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="panel-footer"><?php echo $reference->doc_name; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        

                                    <?php 
                                        }
                                        endforeach; 
                                    ?>
                                    </div>
                                    
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
<<<<<<< HEAD:Group-07/NiceAdmin/application/views/doctor/doc_view_patient.php
                
                <div id="diagnosis" style="display: none" ></div>
                <div id="problem" style="display: none" >
                    <div class="white_back">
                        <h3 class="success">Problem</h3><hr>
                            <div id="problem_table">
                        <?php
                            foreach ($getNotes as $Notes):
                                if($patient_id == $Notes->patient_id)
                                {
                        ?>
                                    <table class="table table-condensed table-bordered " >

                                        <tbody>

                                            <tr>
                                                <td><?php echo $Notes->note; ?> </td>
                                            </tr>

                                            </tbody>
                                    </table>


=======

                <div id="diagnosis" style="display: none" >
                    <div class="white_back">
                        <h3 class="success text-center">Diagnosis</h3><hr>
                            <div id="diagnosis_table">
                        <?php
                            foreach ($getDiagnosis as $diagnosis):
                                if($patient_id == $diagnosis->patient_id)
                                {
                        ?>
                                <p><?php echo $diagnosis->diagnosis; ?></p> 
                                                    
                                    <table class="table table-condensed table-bordered">
                                        <tr class="active">
                                            <td><?php echo $diagnosis->doc_name; ?></td>
                                            <td><?php echo $diagnosis->date; ?></td>
                                            <td><?php echo $diagnosis->time; ?></td>
                                        </tr>
                                    </table>



>>>>>>> dd9595d42c59244d49c19c907f9097501ce54ea5:NiceAdmin/application/views/doctor/doc_view_patient.php
                        <?php 
                            }endforeach;
                        ?>
                            </div>
<<<<<<< HEAD:Group-07/NiceAdmin/application/views/doctor/doc_view_patient.php
                            <div id="problem_form">
                        <?php 
                            $attri = array('class'=>'form-horizontal');
                            echo form_open('DoctorView/add_case_notes',$attri);
                        ?>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <textarea name="cese_notes" class="form-control"   placeholder=""></textarea>
                                    </div>
                                </div>  

=======
                            <div id="diagnosis_form">
                        <?php 
                            $attri = array('class'=>'form-horizontal');
                            echo form_open('DoctorView/add_diagnosis',$attri);
                        ?>

                                <div class="form-group col-lg-3">
                                    <label for="diagnosis" class="col-sm-3 control-label text-center">Diagnosis </label>
                                </div>
                                <div class="form-group col-lg-9">
                                
                                    <select name="diagnosis" class="form-control">
                                        <option value="ASD">ASD</option>
                                        <option value="ODD">ODD</option>
                                        <option value="ADHD">ADHD</option>
                                        <option value="SDLSS">SDLSS</option>
                                        <option value="OCD">OCD</option>
                                        <option value="PTSD">PTSD</option>
                                        <option value="GAD">GAD</option>
                                        <option value="Ajustment Disorder">Ajustment Disorder</option>
                                        <option value="Acute Stress Disorder">Acute Stress Disorder</option>
                                        <option value="MR">MR</option>
                                        <option value="Conduct Disorder">Conduct Disorder</option>
                                        <option value="Dissociative Disorder">Dissociative Disorder</option>
                                        <option value="Non Organic Enuresis">Non Organic Enuresis</option>
                                        <option value="Somatization Disorder">Somatization Disorder</option>
                                        <option value="Selective Mutism">Selective Mutism</option>
                                        <option value="Reactive Attachment Disorder">Reactive Attachment Disorder</option>
                                        <option value="Tie Disorder">Tie Disorder</option>
                                        <option value="Panic Disorder">Panic Disorder</option>
                                        <option value="Seperation Anxiety Disorder">Seperation Anxiety Disorder</option>
                                        <option value="Mental Behavioural Disorder">Mental Behavioural Disorder</option>
                                        <option value="Pshycotic Disorder">Pshycotic Disorder</option>
                                        <option value="No Mental Illness">No Mental Illness</option>
                                        <option value="Expressive Language Dificult Speach Delay">Expressive Language Dificult Speach Delay</option>
                                    </select>
                                    
                                </div>  


                                <input type="hidden" name="patientid" id="id" value="<?php echo $patient_id; ?>" />
                                <input type="hidden" name="time" id="id" value="<?php echo date('H:i:s'); ?>" />
                                <input type="hidden" name="date" id="id" value="<?php echo date('Y-m-d'); ?>" />
                                <input type="hidden" name="doctorid" id="id" value="<?php echo $name; ?>" />

                                <div class="form-group">
                                    <div class="col-sm-7"></div>
                                    <div class="col-sm-2">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    </div>
                                    <div class="col-sm-3">
                                        <button type="submit" name='save' class="btn btn-primary">Save</button>
                                    </div>
                                </div>

                        <?php  
                            echo form_close();                                        
                        ?>                                        
                            </div>
                    </div>
                    <div class="white_back">
                        <h3 class="success text-center">Problem</h3><hr>
                            <div id="problem_table">
                        <?php
                            foreach ($getDiagnosis as $problems):
                                if($patient_id == $problems->patient_id)
                                {
                        ?>
                                    
                                <p><?php echo $problems->problem; ?></p>
                                <table class="table table-condensed table-bordered">
                                    <tr class="active">
                                        <td><?php echo $problems->doc_name2; ?></td>
                                        <td><?php echo $problems->date2; ?></td>
                                        <td><?php echo $problems->time2; ?></td>
                                    </tr>
                                </table>
                        <?php 
                            }endforeach;
                        ?>
                            </div>
                            <div id="problem_form">
                        <?php 
                            $attri = array('class'=>'form-horizontal');
                            echo form_open('DoctorView/add_problem',$attri);
                        ?>

                                <div class="form-group col-lg-3">
                                    <label for="problem" class="control-label text-center">Problem </label>
                                </div>
                                <div class="form-group col-lg-9">
                                    <textarea name="problem" class="form-control"   placeholder=""></textarea>
                                </div>
>>>>>>> dd9595d42c59244d49c19c907f9097501ce54ea5:NiceAdmin/application/views/doctor/doc_view_patient.php

                                <input type="hidden" name="patientid" id="id" value="<?php echo $patient_id; ?>" />
                                <input type="hidden" name="time" id="id" value="<?php echo date('H:i:s'); ?>" />
                                <input type="hidden" name="date" id="id" value="<?php echo date('Y-m-d'); ?>" />
                                <input type="hidden" name="doctorid" id="id" value="<?php echo $name; ?>" />

                                <div class="form-group">
                                    <div class="col-sm-7"></div>
                                    <div class="col-sm-2">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    </div>
                                    <div class="col-sm-3">
<<<<<<< HEAD:Group-07/NiceAdmin/application/views/doctor/doc_view_patient.php
                                        <button type="submit" name='save' class="btn btn-primary">Submit</button>
=======
                                        <button type="submit" name='save' class="btn btn-primary">Save</button>
>>>>>>> dd9595d42c59244d49c19c907f9097501ce54ea5:NiceAdmin/application/views/doctor/doc_view_patient.php
                                    </div>
                                </div>

                        <?php 
                            echo form_close();                                        
                        ?>                                        
                            </div>
                    </div>
                </div>
                
<!-- Case history forms and tables -->
                <div id="caseHistory">
                    <div class="col-md-12">
                        
  <!--  Display tab pane header -->                           
                        <ul class="nav nav-pills nav-justified">
                            <li class="active"><a data-toggle="pill" href="#family">Family/Medical</a></li>
                            <li><a data-toggle="pill" href="#comm">communicationn</a></li>
                            <li><a data-toggle="pill" href="#mortor">Mortor</a></li>
                            <li><a data-toggle="pill" href="#cog">Cognitive</a></li>
                            <li><a data-toggle="pill" href="#case_notes">Case_notes</a></li>
                        </ul>
                        
<!-- display tab pane body -->
                        <div class="tab-content">

<!-- family history display -->
                            <div id="family" class="tab-pane fade in active">
                                <div class="white_back">
                                    <h3 class="text-center">Family and Medical History</h3><hr>
                                        <div id="family_table" >
                                    <?php
                                        foreach ($getFamily as $familyHistory):
                                            if($patient_id == $familyHistory->patient_id)
                                            {
                                    ?>  
                                            
                                                <table class="table table-condensed table-bordered"> <!-- family history -->

                                                    <thead>
                                                        <tr class="success">
                                                            <th class="text-center" colspan="2">Family History</th>
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
                                                            <td><?php echo $familyHistory->no_of_sibilings; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Names of Sibilings</td>
                                                            <td><?php echo $familyHistory->names_of_sibilings; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Home situation</td>
                                                            <td><?php echo $familyHistory->home_situation; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Presenting Problems</td>
                                                            <td><?php echo $familyHistory->presenting_problems; ?> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                    
                                                <table class="table table-condensed table-bordered">  <!-- medical history -->
                                                    <thead>
                                                        <tr class="success">
                                                            <th class="text-center" colspan="2">Medical History</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>During Pregnancy</td>
                                                            <td><?php echo $familyHistory->during_pregnancy; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>At birth</td>
                                                            <td><?php echo $familyHistory->at_birth; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mode of delivery</td>
                                                            <td><?php echo $familyHistory->mode_of_dilivery; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Birth Weight</td>
                                                            <td><?php echo $familyHistory->birth_weight; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Birth Cry</td>
                                                            <td><?php echo $familyHistory->birth_cry; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>After Birth</td>
                                                            <td><?php echo $familyHistory->after_birth; ?> </td>
                                                        </tr>  
                                                        <tr>
                                                            <td>Relevent illnesses</td>
                                                            <td><?php echo $familyHistory->relevent_illnesses; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Medications / Investigations</td>
                                                            <td><?php echo $familyHistory->medications; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Audiology Results</td>
                                                            <td><?php echo $familyHistory->audiology; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Left Side :</td>
                                                            <td><?php echo $familyHistory->audio_left; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Right Side :</td>
                                                            <td><?php echo $familyHistory->audiio_right; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vision</td>
                                                            <td><?php echo $familyHistory->vision; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Left Side :</td>
                                                            <td><?php echo $familyHistory->vision_left; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Right Side :</td>
                                                            <td><?php echo $familyHistory->vision_right; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Histry of related Conditions in Family</td>
                                                            <td><?php echo $familyHistory->related_history_family; ?> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
<<<<<<< HEAD:Group-07/NiceAdmin/application/views/doctor/doc_view_patient.php
=======
                                                <table class="table table-condensed table-bordered">
                                                    <tr class="active">
                                                        <td><?php echo $familyHistory->doc_name; ?></td>
                                                        <td><?php echo $familyHistory->date; ?></td>
                                                        <td><?php echo $familyHistory->time; ?></td>
                                                    </tr>
                                                </table>
>>>>>>> dd9595d42c59244d49c19c907f9097501ce54ea5:NiceAdmin/application/views/doctor/doc_view_patient.php
                                    <?php 
                                        }
                                       
                                        endforeach;
                                    ?>
                                        </div>
                                        <div id="family_form">
                                    <?php
                                     
                                        $attri = array('class'=>'form-horizontal');
                                        echo form_open('DoctorView/add_family_history',$attri);
                                    ?>

                                                <h4>Family History</h4><hr>

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

                                                <h4>Medical History</h4><hr>
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
                                                            <div class="col-sm-5">Left Side</div>
                                                            <div class="col-md-7">
                                                                <input type="text" name="audioLeft" class="form-control"   placeholder="Audiology Left" required/>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="col-sm-5">Right Side</div>
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
                                                            <div class="col-sm-5">Left Side </div>
                                                            <div class="col-sm-7">
                                                                <input type="text" name="visionLeft" class="form-control"   placeholder="Vision Left" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="col-sm-5">Right Side </div>
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


                                                <input type="hidden" name="patientid" id="id" value="<?php echo $patient_id; ?>" />
                                                <input type="hidden" name="time" id="id" value="<?php echo date('H:i:s'); ?>" />
                                                <input type="hidden" name="date" id="id" value="<?php echo date('Y-m-d'); ?>" />
                                                <input type="hidden" name="doctorid" id="id" value="<?php echo $name; ?>" />

                                                <div class="form-group">
                                                    <div class="col-sm-7"></div>
                                                    <div class="col-sm-2">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <button type="submit" name='save' class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>

                                    <?php 
                                        echo form_close();
                                    ?>
                                    </div>
                                </div>
                            </div>

<!-- display communication skills -->
                            <div id="comm" class="tab-pane fade">
                                <div class="white_back">
                                    <h3 class="text-center">Communication Skills</h3><hr>
                                        <div id="comm_table">
                                    <?php
                                        foreach ($getComm as $communication):
                                            if($patient_id == $communication->patient_id)
                                            {
                                    ?>
                                                <table class="table table-condensed table-bordered " >

                                                    <thead>
                                                        <tr class="success">
                                                            <th class="text-center" colspan="2">Communication</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Functional Communication</td>
                                                            <td><?php echo $communication->func_comm; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Listening Skills</td>
                                                            <td><?php echo $communication->listening; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Attention Skills</td>
                                                            <td><?php echo $communication->attetion; ?> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                    
                                                <table class="table table-condensed table-bordered " >           
                                                    <thead>
                                                        <tr class="success">
                                                            <th class="text-center" colspan="2">Oral Skills / Examination</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Sucking</td>
                                                            <td><?php echo $communication->sucking; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Chewing </td>
                                                            <td><?php echo $communication->chewing; ?> </td>
                                                        </tr>
                                                            <tr>
                                                            <td>Blowing</td>
                                                            <td><?php echo $communication->blowing; ?> </td>
                                                        </tr>
                                                            <tr>
                                                            <td>Strow</td>
                                                            <td><?php echo $communication->strow; ?> </td>
                                                        </tr>
                                                            <tr>
                                                            <td>Drooling</td>
                                                            <td><?php echo $communication->drooling; ?> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <table class="table table-condensed table-bordered " >           
                                                    <thead>
                                                        <tr class="success">
                                                            <th class="text-center" colspan="2">Comprehension</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="active">
                                                            <td colspan="2">Non verbal</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Facial expressions</td>
                                                            <td><?php echo $communication->com_non_facial; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gestures</td>
                                                            <td><?php echo $communication->com_non_gesture; ?> </td>
                                                        </tr>
                                                        <tr class="active">
                                                            <td colspan="2">verbal</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Word Level</td>
                                                            <td><?php echo $communication->com_verbal; ?> </td>
                                                        </tr>

                                                    </tbody>
                                                </table>

                                                <table class="table table-condensed table-bordered " >           
                                                    <thead>
                                                        <tr class="success">
                                                            <th class="text-center" colspan="2">Expression</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="active">
                                                            <td colspan="2">Non verbal</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Facial expressions</td>
                                                            <td><?php echo $communication->expre_non_facial; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gestures</td>
                                                            <td><?php echo $communication->expre_non_gesture; ?> </td>
                                                        </tr>
                                                        <tr class="active">
                                                            <td colspan="2">verbal</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Word Level</td>
                                                            <td><?php echo $communication->expre_verbal; ?> </td>
                                                        </tr>

                                                    </tbody>
                                                </table>

                                                <table class="table table-condensed table-bordered " >           
                                                    <thead>
                                                        <tr class="success">
                                                            <th class="text-center" colspan="2">Speech</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr>
                                                            <td>Articulation</td>
                                                            <td><?php echo $communication->articulation; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Intelligibility</td>
                                                            <td><?php echo $communication->intelligibility; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Phonology(speech sounds & processes )</td>
                                                            <td><?php echo $communication->phonollogy; ?> </td>
                                                        </tr>
                                                        <tr class="active">
                                                            <td colspan="2">Syntax & Morphology</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sentence Structure</td>
                                                            <td><?php echo $communication->sentence; ?> </td>
                                                        </tr>
                                                        <tr class="active">
                                                            <td colspan="2">Vocabulary & Semantics</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Words & meanings</td>
                                                            <td><?php echo $communication->word_meaning; ?> </td>
                                                        </tr>                                            
                                                    </tbody>
                                                </table>

                                                <table class="table table-condensed table-bordered " >           
                                                    <thead>
                                                        <tr class="success">
                                                            <th class="text-center" colspan="2">Pragmatics</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr>
                                                            <td>Conversations</td>
                                                            <td><?php echo $communication->convertations; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Eye contact</td>
                                                            <td><?php echo $communication->eye_contact; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Turn Taking</td>
                                                            <td><?php echo $communication->turn_taking; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Initiating</td>
                                                            <td><?php echo $communication->initiating; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Appropriate Answers</td>
                                                            <td><?php echo $communication->appropriate_answer; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Voice</td>
                                                            <td><?php echo $communication->voice; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fluency</td>
                                                            <td><?php echo $communication->fluency; ?> </td>
                                                        </tr>
                                                       <tr>
                                                            <td>Other factors/Information</td>
                                                            <td><?php echo $communication->other; ?> </td>
                                                        </tr><tr>
                                                            <td>Prognosis</td>
                                                            <td><?php echo $communication->prognosis; ?> </td>
                                                        </tr>                                           
                                                    </tbody>
<<<<<<< HEAD:Group-07/NiceAdmin/application/views/doctor/doc_view_patient.php
                                                </table>               
=======
                                                </table> 
                                                <table class="table table-condensed table-bordered">
                                                    <tr class="active">
                                                        <td><?php echo $communication->doc_name; ?></td>
                                                        <td><?php echo $communication->date; ?></td>
                                                        <td><?php echo $communication->time; ?></td>
                                                    </tr>
                                                </table>
>>>>>>> dd9595d42c59244d49c19c907f9097501ce54ea5:NiceAdmin/application/views/doctor/doc_view_patient.php

                                    <?php 
                                        }
                                        endforeach;
                                    ?>
                                        </div>
                                        <div id="comm_form">

                                    <?php 
                                        $attri = array('class'=>'form-horizontal');
                                        echo form_open('DoctorView/add_communication_skills',$attri);
                                    ?>

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
                                                <h4> Oral Skills / Examination</h4><hr>
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

                                                <h4>Comprehension</h4><hr>

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

                                                <h4>Expression</h4><hr>

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

                                                <h4>Speech</h4><hr>
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
                                                    <label for="phonollogy" class="col-sm-3 control-label">Phonollogy (speech sound &amp; processes)</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="phonollogy" class="form-control"   placeholder="" required>
                                                    </div>
                                                </div>
                                                <h4> Syntax &amp; Morphology</h4><hr>
                                                <div class="form-group">
                                                    <label for="sentences" class="col-sm-3 control-label">Sentence Structure</label>
                                                    <div class="col-sm-9">
                                                       <select name="sentences" class="form-control" id="color">
                                                            <option  value="No Concern">No Concern</option>
                                                            <option   value="Impaired">Impaired</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <h4> Vocabulary &amp; Semantics</h4><hr>
                                                <div class="form-group">
                                                    <label for="words" class="col-sm-3 control-label">Words &amp; Meanings</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="words" class="form-control"   placeholder="" required>
                                                    </div>
                                                </div>
                                                <h4> Pragmetics</h4><hr>
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

                                                <input type="hidden" name="patientid" id="id" value="<?php echo $patient_id; ?>" />
                                                <input type="hidden" name="time" id="id" value="<?php echo date('H:i:s'); ?>" />
                                                <input type="hidden" name="date" id="id" value="<?php echo date('Y-m-d'); ?>" />
                                                <input type="hidden" name="doctorid" id="id" value="<?php echo $name; ?>" />
                                    
                                                <div class="form-group">
                                                    <div class="col-sm-7"></div>
                                                    <div class="col-sm-2">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <button type="submit" name='save' class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                    <?php 
                                        echo form_close();
                                        
                                    ?>
                                    </div>
                            </div>
                        </div>
                            
<!-- display mortor skills -->
                            <div id="mortor" class="tab-pane fade">
                                <div class="white_back">
                                    <h3 class="text-center">Mortor Skills</h3><hr>
                                        <div id="mortor_table">
                                    <?php
                                        foreach ($getMotor as $Motor):
                                            if($patient_id == $Motor->patient_id)
                                            {
                                    ?>
                                                <table class="table table-condensed table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>Gross</td>
                                                            <td><?php echo $Motor->gross; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fine</td>
                                                            <td><?php echo $Motor->fine; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Social</td>
                                                            <td><?php echo $Motor->social; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Feeding</td>
                                                            <td><?php echo $Motor->feeding; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dressing</td>
                                                            <td><?php echo $Motor->dressing; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Toileting</td>
                                                            <td><?php echo $Motor->toileting; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Independence</td>
                                                            <td><?php echo $Motor->independence; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Behaviors/Personality</td>
                                                            <td><?php echo $Motor->personality; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Stereotypic behavior</td>
                                                            <td><?php echo $Motor->stereotypic_behaviors; ?> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
<<<<<<< HEAD:Group-07/NiceAdmin/application/views/doctor/doc_view_patient.php
=======
                                                <table class="table table-condensed table-bordered">
                                                    <tr class="active">
                                                        <td><?php echo $Motor->doc_name; ?></td>
                                                        <td><?php echo $Motor->date; ?></td>
                                                        <td><?php echo $Motor->time; ?></td>
                                                    </tr>
                                                </table>
>>>>>>> dd9595d42c59244d49c19c907f9097501ce54ea5:NiceAdmin/application/views/doctor/doc_view_patient.php


                                    <?php 
                                        }
                                        endforeach;
                                    ?>
                                        </div>
                                        <div id="mortor_form">
                                    <?php 
                                        $attri = array(
                                            'class'=>'form-horizontal'
                                        );
                                        echo form_open('DoctorView/add_motor_skills',$attri);
                                    ?>

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

                                    <input type="hidden" name="patientid" id="id" value="<?php echo $patient_id; ?>" />
                                    <input type="hidden" name="time" id="id" value="<?php echo date('H:i:s'); ?>" />
                                    <input type="hidden" name="date" id="id" value="<?php echo date('Y-m-d'); ?>" />
                                    <input type="hidden" name="doctorid" id="id" value="<?php echo $name; ?>" />
                                    
                                    <div class="form-group">
                                        <div class="col-sm-7"></div>
                                        <div class="col-sm-2">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        </div>
                                        <div class="col-sm-3">
                                            <button type="submit" name='save' class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>

                                <?php 
                                    echo form_close();
                                    
                                ?>

                                    </div>
                            </div>
                        </div>

<!-- display cognative skills --> 
                            <div id="cog" class="tab-pane fade">
                                <div class="white_back">
                                    <h3 class="text-center">Cognitive and Communication development</h3><hr>
                                        <div id="cog_table">
                                    <?php
                                        foreach ($getCog as $Cognitive):
                                            if($patient_id == $Cognitive->patient_id)
                                            {
                                    ?>
                                                <table class="table table-condensed table-bordered " >
                                                    <tbody>
                                                        <tr>
                                                            <td>Problem solving : Building blocks</td>
                                                            <td><?php echo $Cognitive->problem_solving; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Matching / Sorting</td>
                                                            <td><?php echo $Cognitive->matching; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Colors</td>
                                                            <td><?php echo $Cognitive->colors; ?> </td>
                                                        </tr>
                                                         <tr>
                                                            <td>Sizes</td>
                                                            <td><?php echo $Cognitive->sizes; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sequencing</td>
                                                            <td><?php echo $Cognitive->sequencing; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" class="active">Numbers</td>

                                                        </tr>
                                                        <tr>
                                                            <td>Counting</td>
                                                            <td><?php echo $Cognitive->counting; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Concept</td>
                                                            <td><?php echo $Cognitive->concept; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Memory/Tecognition</td>
                                                            <td><?php echo $Cognitive->memory; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Play/Iterests/Hobbies</td>
                                                            <td><?php echo $Cognitive->hobbies; ?> </td>
                                                        </tr>

                                                    </tbody>
                                                </table>

                                                <table class="table table-condensed table-bordered " >
                                                    <tbody>
                                                        <tr>
                                                            <td>Interaction</td>
                                                            <td><?php echo $Cognitive->interaction; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Babble</td>
                                                            <td><?php echo $Cognitive->babble; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>First Words</td>
                                                            <td><?php echo $Cognitive->first_word; ?> </td>
                                                        </tr>
                                                         <tr>
                                                            <td>Words Together</td>
                                                            <td><?php echo $Cognitive->word_together; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Expressing Needs</td>
                                                            <td><?php echo $Cognitive->eppressing_needs; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nursery/School/College/Work</td>
                                                            <td><?php echo $Cognitive->school; ?> </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
<<<<<<< HEAD:Group-07/NiceAdmin/application/views/doctor/doc_view_patient.php
=======
                                                <table class="table table-condensed table-bordered">
                                                    <tr class="active">
                                                        <td><?php echo $Cognitive->doc_name; ?></td>
                                                        <td><?php echo $Cognitive->date; ?></td>
                                                        <td><?php echo $Cognitive->time; ?></td>
                                                    </tr>
                                                </table>
>>>>>>> dd9595d42c59244d49c19c907f9097501ce54ea5:NiceAdmin/application/views/doctor/doc_view_patient.php


                                    <?php 
                                        }
                                            endforeach;
                                    ?>
                                    </div>
                                    <div id="cog_form">

                                    <?php 
                                        $attri = array('class'=>'form-horizontal');
                                        echo form_open('DoctorView/add_cognitive_skills',$attri);
                                    ?>

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

                                            <h4>Communication Development</h4><hr>
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

                                            <input type="hidden" name="patientid" id="id" value="<?php echo $patient_id; ?>" />
                                            <input type="hidden" name="time" id="id" value="<?php echo date('H:i:s'); ?>" />
                                            <input type="hidden" name="date" id="id" value="<?php echo date('Y-m-d'); ?>" />
                                            <input type="hidden" name="doctorid" id="id" value="<?php echo $name; ?>" />
                                    
                                            <div class="form-group">
                                                <div class="col-sm-7"></div>
                                                <div class="col-sm-2">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                </div>
                                                <div class="col-sm-3">
                                                    <button type="submit" name='save' class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>

                                    <?php 
                                        echo form_close();
                                        
                                    ?>
                                    </div>
                                </div>
                            </div>

<!-- display cognative skills --> 
                            <div id="case_notes" class="tab-pane fade">
                                <div class="white_back">
                                    <h3 class="success text-center">Case notes</h3><hr>
                                        <div id="notes_table">
                                    <?php
                                        foreach ($getNotes as $Notes):
                                            if($patient_id == $Notes->patient_id)
                                            {
                                    ?>
<<<<<<< HEAD:Group-07/NiceAdmin/application/views/doctor/doc_view_patient.php
                                                <table class="table table-condensed table-bordered " >

                                                    <tbody>

                                                        <tr>
                                                            <td><?php echo $Notes->note; ?> </td>
                                                        </tr>

                                                        </tbody>
                                                </table>
=======
                                                
                                            <p>
                                                <?php echo $Notes->note; ?>
                                                
                                            </p>
                                            <table class="table table-condensed table-bordered">
                                                <tr class="active">
                                                    <td><?php echo $Notes->doc_name; ?></td>
                                                    <td><?php echo $Notes->date; ?></td>
                                                    <td><?php echo $Notes->time; ?></td>
                                                </tr>
                                            </table>
>>>>>>> dd9595d42c59244d49c19c907f9097501ce54ea5:NiceAdmin/application/views/doctor/doc_view_patient.php


                                    <?php 
                                        }endforeach;
                                    ?>
                                        </div>
                                        <div id="notes_form">
                                    <?php 
                                        $attri = array('class'=>'form-horizontal');
                                        echo form_open('DoctorView/add_case_notes',$attri);
                                    ?>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <textarea name="cese_notes" class="form-control"   placeholder=""></textarea>
                                                </div>
                                            </div>  


                                            <input type="hidden" name="patientid" id="id" value="<?php echo $patient_id; ?>" />
                                            <input type="hidden" name="time" id="id" value="<?php echo date('H:i:s'); ?>" />
                                            <input type="hidden" name="date" id="id" value="<?php echo date('Y-m-d'); ?>" />
                                            <input type="hidden" name="doctorid" id="id" value="<?php echo $name; ?>" />
                                    
                                            <div class="form-group">
                                                <div class="col-sm-7"></div>
                                                <div class="col-sm-2">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                </div>
                                                <div class="col-sm-3">
                                                    <button type="submit" name='save' class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>

                                    <?php 
                                        echo form_close();                                        
                                    ?>                                        
                                        </div>
                                </div>
                            </div>
                        </div>                                              
      
                    </div>
                </div>  

<!-- medications -->
                <div id="medication" style="display: none" >

                </div>
  
<!-- goals -->
                <div id="goals" style="display: none" >
                    
                    <ul class="nav nav-pills nav-justified">
                        <li class="active"><a data-toggle="pill" href="#setGoals">Set Goals</a></li>
                        <li><a data-toggle="pill" href="#EvaluateGols">Evaluate Goals</a></li>
                    </ul>
                        
<!-- display tab pane body -->
                    <div class="tab-content">

                        <div id="setGoals" class="tab-pane fade in active">
                                <div class="white_back container">
                                <h3 class="text-center">Set Goals</h3><hr>
                                    <?php 
                                        $attri = array('class'=>'form-horizontal');
                                        echo form_open('DoctorView/add_goals',$attri);
                                    ?>

                                            <div class="form-group">
                                                <div class="col-sm-2">
                                                    <select name="type1" class="form-control">
                                                        <option value="Clinical">Clinical</option>
                                                        <option value="Phsycologycal">Phsycologycal</option>
                                                        <option value="Educational">Educational</option>
                                                    </select>
                                                    
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="text" name="goal1" class="form-control"   placeholder="Goal">
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="text" name="criteria1" class="form-control"   placeholder="criteria">
                                                </div>
                                                <input type="hidden" name="doc[0][patient_id]" id="id" value="<?php echo $patient_id; ?>" />
                                                    <input type="hidden" name="doc[0][time]" id="id" value="<?php echo date('H:i:s'); ?>" />
                                                    <input type="hidden" name="doc[0][date]" id="id" value="<?php echo date('Y-m-d'); ?>" />
                                                    <input type="hidden" name="doc[0][doc_name]" id="id" value="<?php echo $name; ?>" />
                                            </div> 
                                            <div class="form-group">
                                                <div class="col-sm-2">
                                                    <select name="type2" class="form-control">
                                                        <option value="Clinical">Clinical</option>
                                                        <option value="Phsycologycal">Phsycologycal</option>
                                                        <option value="Educational">Educational</option>
                                                    </select>
                                                    
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="text" name="goal2" class="form-control"   placeholder="Goal">
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="text" name="criteria2" class="form-control"   placeholder="criteria">
                                                </div>
                                                
                                                    <input type="hidden" name="doc[1][patient_id]" id="id" value="<?php echo $patient_id; ?>" />
                                                    <input type="hidden" name="doc[1][time]" id="id" value="<?php echo date('H:i:s'); ?>" />
                                                    <input type="hidden" name="doc[1][date]" id="id" value="<?php echo date('Y-m-d'); ?>" />
                                                    <input type="hidden" name="doc[1][doc_name]" id="id" value="<?php echo $name; ?>" />
                                            </div> 
                                            <div class="form-group">
                                                <div class="col-sm-2">
                                                    <select name="type3" class="form-control">
                                                        <option value="Clinical">Clinical</option>
                                                        <option value="Phsycologycal">Phsycologycal</option>
                                                        <option value="Educational">Educational</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="text" name="goal3" class="form-control"   placeholder="Goal">
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="text" name="criteria3" class="form-control"   placeholder="criteria">
                                                </div>
                                                    <input type="hidden" name="doc[2][patient_id]" id="id" value="<?php echo $patient_id; ?>" />
                                                    <input type="hidden" name="doc[2][time]" id="id" value="<?php echo date('H:i:s'); ?>" />
                                                    <input type="hidden" name="doc[2][date]" id="id" value="<?php echo date('Y-m-d'); ?>" />
                                                    <input type="hidden" name="doc[2][doc_name]" id="id" value="<?php echo $name; ?>" />
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-2">
                                                    <select name="type4" class="form-control">
                                                        <option value="Clinical">Clinical</option>
                                                        <option value="Phsycologycal">Phsycologycal</option>
                                                        <option value="Educational">Educational</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="text" name="goal4" class="form-control"   placeholder="Goal">
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="text" name="criteria4" class="form-control"   placeholder="criteria">
                                                </div>
                                                    <input type="hidden" name="doc[3][patient_id]" id="id" value="<?php echo $patient_id; ?>" />
                                                    <input type="hidden" name="doc[3][time]" id="id" value="<?php echo date('H:i:s'); ?>" />
                                                    <input type="hidden" name="doc[3][date]" id="id" value="<?php echo date('Y-m-d'); ?>" />
                                                    <input type="hidden" name="doc[3][doc_name]" id="id" value="<?php echo $name; ?>" />
                                            </div> 
                                            <div class="form-group">
                                                <div class="col-sm-2">
                                                    <select name="type5" class="form-control">
                                                        <option value="Clinical">Clinical</option>
                                                        <option value="Phsycologycal">Phsycologycal</option>
                                                        <option value="Educational">Educational</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="text" name="goal5" class="form-control"   placeholder="Goal">
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="text" name="criteria5" class="form-control"   placeholder="criteria">
                                                </div>
                                                    
                                                <input type="hidden" name="doc[4][patient_id]" id="id" value="<?php echo $patient_id; ?>" />
                                                    <input type="hidden" name="doc[4][time]" id="id" value="<?php echo date('H:i:s'); ?>" />
                                                    <input type="hidden" name="doc[4][date]" id="id" value="<?php echo date('Y-m-d'); ?>" />
                                                    <input type="hidden" name="doc[4][doc_name]" id="id" value="<?php echo $name; ?>" />
                                            </div> 
                                            <input type="hidden" name="patientid" id="id" value="<?php echo $patient_id; ?>" />
                                            <input type="hidden" name="time" id="id" value="<?php echo date('H:i:s'); ?>" />
                                            <input type="hidden" name="date" id="id" value="<?php echo date('Y-m-d'); ?>" />
                                            <input type="hidden" name="doc_name" id="id" value="<?php echo $name; ?>" />
                                            <div class="form-group">
                                                <div class="col-sm-7"></div>
                                                <div class="col-sm-2">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                </div>
                                                <div class="col-sm-3">
                                                    <button type="submit" name='save' class="btn btn-primary">Submit</button>
                                                </div>
                                                    
                                            </div>

                                    <?php 
                                        echo form_close();                                        
                                    ?> 

                                </div>
                            </div>
                        
                            <div id="EvaluateGols" class="tab-pane fade">
                                <div class="white_back container">
                                    <h4> Evaluvate Goals</h4><hr>
<!--                                    <form method="get" >-->
                                   <?php 
                                        $attri = array('class'=>'form-horizontal');
                                        echo form_open('DoctorView/add_goal_marks',$attri);
                                    ?>
                                    <?php
//                                        
                                        foreach ($goals as $goal):
                                            if($goal->patient_id == $patient_id){
                                                    //if($goals->type == 'Clinical'){
                                    ?>
                                    <div class="col-lg-12">
                                        <div class="col-lg-5"><?php echo $goal->goal;?></div>
                                        <div class="col-lg-7">
                                            <input type="hidden" name="goal<?php echo $goal->sequence;?>" value="<?php echo $goal->goal;?>" />
                                            <img src="<?php echo base_url('asserts/images/range.png'); ?>" />
                                            <input class="range" type="range" name="mark<?php echo $goal->sequence;?>" min="0" max="10" step="1" value="0" />
                                        </div>
                                        <div class="col-lg-12 info">
                                            <div class="col-lg-3">
                                                Evaluation Criteria :
                                            </div>
                                            <div class="col-lg-9">
                                                <?php echo $goal->criteria;?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <?php
                                                    
                                                //}
                                            }
                                        endforeach;
                                    ?>
                                    
                                    <input type="hidden" name="patientid" id="id" value="<?php echo $patient_id; ?>" />
                                    <input type="hidden" name="time" id="id" value="<?php echo date('H:i:s'); ?>" />
                                    <input type="hidden" name="date" id="id" value="<?php echo date('Y-m-d'); ?>" />
                                    <input type="hidden" name="doc_name" id="id" value="<?php echo $name; ?>" />
                                    <div class="form-group">
                                        <div class="col-sm-7"></div>
                                        <div class="col-sm-2">
                                            <br/>
                                            <br/>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        </div>
                                        <div class="col-sm-3">
                                            <br/>
                                            <br/>
                                            <button type="submit" name='save' class="btn btn-primary">Save Marks</button>
                                        </div>

                                    </div>

                                    <?php 
                                        echo form_close();                                        
                                    ?> 
<!--                                    </form>-->
                                </div>
                                                                
                            </div>
                    
                            
                    </div>
                </div>
                    
<!-- progress -->
                <div id="progress" style="display: none" >
                    <div class="white_back container">
                        <script type="text/javascript" src="<?php echo base_url() . "asserts/js/Chart.min.js" ?>"></script>
<!--                        <script type="text/javascript" src="js/Chart.min.js"></script>-->
                        <script type="text/javascript">
                            function random_rgba() {
                                var letters = '012345'.split('');
                                var color = '#';        
                                color += letters[Math.round(Math.random() * 5)];
                                letters = '0123456789ABCDEF'.split('');
                                for (var i = 0; i < 5; i++) {
                                    color += letters[Math.round(Math.random() * 15)];
                                }
                                return color;
                            }
                            function ArrNoDupe(a) {
                                var temp = {};
                                for (var i = 0; i < a.length; i++)
                                    temp[a[i]] = true;
                                var r = [];
                                for (var k in temp)
                                    r.push(k);
                                return r;
                            }
                            function getGraphData(){
                                $.ajax({
                                    url: 'http://[::1]/new4/NiceAdmin/DoctorView/getGraphData/',
                                    type: "POST",
                                    data: {graph:"graph"},
                                    success: function(one) {
                                        var two = [];
                                        var x = one.split(']');
                                        for(var i=0 ; i<x.length-1;i++){
                                            two[i] = JSON.parse(x[i]+']');
                                        }
                                        var marks = [];
                                        var goal = [];
                                        var goalDup = [];
                                        var date = [];
                                        var noDupes = [];
                                        var marksDup = [];
                                        var marks = [];
                                        for(var z = 0;z<two.length;z++){
                                            for(var i =0;i<two[z].length;i++) {
                                                    goalDup.push("" + two[z][i].goal);
                                                    marksDup.push(two[z][i].marks);
                                                    date.push(two[z][i].date);
                                                    noDupes = ArrNoDupe(date);
                                                    goal = ArrNoDupe(goalDup);
                                            }
                                            marks.push(noDupes[z]);
                                            marks.push(marksDup);
                                            marksDup = [];
                                        }
            
                                        var chartdata = {
                                                labels: goal                                                                                                     
                                            };
                                        var datasetValue = [];
                                        var color ;
                                        for(var i = 0; i < marks.length; i++){
                                            if(marks[i].length===10){
                                                    var color = random_rgba();
                                                    datasetValue.push({
                                                        label: ""+marks[i],
                                                        fill: false,
                                                        lineTension: 0.1,
                                                        backgroundColor: ""+color,
                                                        borderColor: ""+color,
                                                        pointHoverBackgroundColor: ""+color,
                                                        pointHoverBorderColor: ""+color,
                                                        data: marks[i+1]
                                                    });
                                            }
                                        }
                                        chartdata.datasets = datasetValue;
                                        var ctx = $("#mycanvas");
                                            var LineGraph = new Chart(ctx, {
                                                    type: 'line',
                                                    data: chartdata
                                            }); 
                                    },
                                    error : function(data) {
                                    }
                                });
                            }
                            getGraphData();
                        
                        </script>
                        <div class="col-lg-12">
                            <div id="chart_div"></div>
                            <div class="chart-container">
                                <canvas id="mycanvas"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

<!-- notes -->
                <div id="notes" style="display: none" >
                    <div class="white_back container">
                        <h4> Doctor's Notes</h4><hr>
<!--                                    <form method="get" >-->
                                   <?php 
                                        $attri = array('class'=>'form-horizontal');
                                        echo form_open('DoctorView/add_doc_notes',$attri);
                                    ?>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <textarea name="doc_notes" class="form-control"   placeholder=""></textarea>
                                        </div>
                                    </div>  
                                    
                                    <input type="hidden" name="patientid" id="id" value="<?php echo $patient_id; ?>" />
                                    <input type="hidden" name="time" id="id" value="<?php echo date('H:i:s'); ?>" />
                                    <input type="hidden" name="date" id="id" value="<?php echo date('Y-m-d'); ?>" />
                                    <input type="hidden" name="doc_name" id="id" value="<?php echo $name; ?>" />
                                    <div class="form-group">
                                        <div class="col-sm-7"></div>
                                        <div class="col-sm-2">
                                            <br/>
                                            <br/>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        </div>
                                        <div class="col-sm-3">
                                            <br/>
                                            <br/>
                                            <button type="submit" name='save' class="btn btn-primary">Save Note</button>
                                        </div>

                                    </div>

                                    <?php 
                                        echo form_close();                                        
                                    ?> 
<!--                                    </form>-->
                    </div>
                </div>

<!-- refernces -->
                <div id="references" style="display: none" >
                        <?php
                            foreach ($patients as $patient):
                                if($patient->patient_id == $patient_id)
                                {
                                    $patient_name = $patient->patient_name;
                                    $patient_name = $patient->age;
                        ?>
                                    <div class="col-md-12">
                                        <div class="white_back">
                                
                                            <h2 class="text-center">Reference form</h2><hr>
                                            <form action="<?php echo site_url('Form2');?>" method="post" target="_blank">
                                                
                                                <div class="form-group col-sm-6">
                                                    <label for="date">Date:</label>
                                                    <input type="text" class="form-control" name="date" value="<?php echo date('Y-m-d'); ?>" placeholder="Enter clinic number" readonly>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="clno">Clinic No:</label>
                                                    <input type="text" class="form-control" name="clinic" placeholder="Enter clinic number">
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="ref">Ref.Name:</label>
                                                    <input type="text" class="form-control" name="ref"  value="<?php echo $patient->patient_name; ?>" placeholder="Enter Reference name">
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="age">Age:</label>
                                                    <input type="text" class="form-control" name="age" value="<?php echo $patient->age ; ?>" placeholder="Enter Age">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="des">Description:</label>
                                                    <textarea class="form-control" rows="5" name="des"></textarea>
                                                </div>
                                                <div class="form-group">
                                                   <button type="submit" class="btn btn-info" >Submit</button>
                                                </div>
                                                <input type="hidden" name="patientid" id="id" value="<?php echo $patient_id; ?>" />
                                                <input type="hidden" name="doc_name" id="id" value="<?php echo $name; ?>" />
                                                
                                            </form>
                                
                                        </div>
                                    </div>

                        <?php
                                }
                            endforeach;
                        ?>
                    </div>
  
<!-- cognitive test -->
                <div id="cognitiveTest" style="display: none" >
                    <div class="white_back container">
                        
                        <h3 class="text-center">Cognitive Test</h3><hr>
                        
                        <form name="myform" id="myform" action="<?php echo base_url() ?>CogTestQuiz/getTest/" method="post" target="_blank" >
                            <div class="form-group">
                                <label for="title" class="col-sm-4 control-label text-center">Select Test Type</label>
                                <div class="col-sm-4">
                                    <select name="testType" class="form-control" id="color" required>
                                        <option value="A">Test A</option>
                                        <option value="B">Test B</option>
                                    </select>
                                </div>
                                <input type="hidden" name="patientid" id="patientcogid" value="<?php echo $patient_id; ?>" />
                                <div class="col-sm-4">
                                    <button type="button" id="start" class="btn btn-info" onclick="javascript: submit()" >Start Test Now</button>
                                </div>
                            </div>
                            <div class="form-group"></div>
                        </form>
                        
                    </div>
                    <div class="white_back container">
                        
                        <h3 class="text-center">Cognitive Test Marks</h3><hr>
                        
                        <div id="cognitive_marks">
                           
                            <div class="col-lg-6 panel panel-info">
                                <div class="panel-heading">Patient Answers : Test A</div>
                                <div class="panel-body" id="cogtestmarks_A">
                                    
                                </div>
                                
                            </div>
                
                            <div class="col-lg-6 panel panel-info">
                                <div class="panel-heading">Patient Answers : Test B</div>
                                <div class="panel-body" id="cogtestmarks_B">
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                        
                    </div>
                    
                    <div class="white_back container">
                        <?php
                            foreach($finalmarks as $final):
                            if ($final->test_type == "A"){
                        ?>
                    
                        <div class="col-lg-6">
                            <table class="table table-condensed table-bordered"> 
                                <thead>
                                    <tr class="success">
                                        <th class="text-center" colspan="2">Test A Final Marks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Deviation Quotients</td>
                                        <td><?php echo $final->dq; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Percentile Ranks</td>
                                        <td><?php echo $final->pr; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td><?php echo $final->description; ?></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="active">
                                        <td><?php echo $final->doc_name; ?></td>
                                        <td><?php echo $final->date; ?></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        
                        <?php }else{ ?>
                        <div class="col-lg-6">
                            <table class="table table-condensed table-bordered"> 
                                <thead>
                                    <tr class="success">
                                        <th class="text-center" colspan="2">Test B Final Marks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Deviation Quotients</td>
                                        <td><?php echo $final->dq; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Percentile Ranks</td>
                                        <td><?php echo $final->pr; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td><?php echo $final->description; ?></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="active">
                                        <td><?php echo $final->doc_name; ?></td>
                                        <td><?php echo $final->date; ?></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <?php 
                            }
                        endforeach;
                        ?>
                    </div>
                    <div class="white_back container">
                        <h3 class="success text-center" >Add Final Marks</h3>
                        <?php 
                            $attri = array(
                                'class'=>'form-horizontal'
                            );
                            echo form_open('DoctorView/add_final_marks',$attri);
                        ?>

                        <div class="form-group">
                            <label for="test" class="col-sm-3 control-label">Select Test </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="type">
                                    <option value="A">Test A</option>
                                    <option value="B">Test B</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fine" class="col-sm-3 control-label">Deviation Quotients</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" placeholder="Deviation Quotients" name="dq" required >
                            </div>
                            <div class="col-sm-4">
                                <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#dq">View Deviation Quotients table </button>

                                <!-- Modal -->
                                <div id="dq" class="modal fade" role="dialog">
                                    <div class="modal-dialog modal-lg">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title text-center">Deviation Quotients table</h4>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table table-condensed table-bordered">
                                                      <tr class="success text-center" style="color:green;"> 	
                                                          <td>TONI-3 Raw Scores</td>	
                                                          <td>6-0 to 6-5</td><td>6-6 to 6-11</td><td>7-0 to 7-5</td><td>7-6 to 7-11</td><td>8-0 to 8-5</td><td>8-6 to 8-11</td><td>9-0 to 9-5</td><td>9-6 to 9-11</td><td>10-0 to 10-5</td><td>10-6 to 10-11</td><td>11-0 to11-11</td><td>12-0 to 12-11</td><td>13-0 to 13-11</td><td>14-0 to 14-11</td><td>15-0 to 15-11</td><td>16-0 to 16-11</td><td>17-0 to 54-11</td><td>55-0 to 59-11</td><td>60-0 to 64-11</td><td>65-0 to 69-11</td><td>70-0 to 74-11</td><td>75-0 to 79-11</td><td>80-0 to 89-11</td>
                                                      </tr>
                                                      <tr class="active text-center" style="color:gray;">        
                                                          <td>0</td><td>70</td><td>69</td><td>68</td><td>67</td><td>66</td><td>65</td><td>64</td><td>63</td><td>62</td><td>61</td><td>61</td><td>60</td><td>60</td><td>60</td><td>60</td><td>60</td><td>60</td><td>62</td><td>63</td><td>64</td><td>65</td><td>67</td><td>68</td>
                                                      </tr>
                                                      <tr class="success text-center" style="color:gray;">
                                                          <td>1</td><td>75</td><td>70</td><td>69</td><td>68</td><td>67</td><td>66</td><td>65</td><td>64</td><td>64</td><td>63</td><td>63</td><td>62</td><td>62</td><td>62</td><td>62</td><td>61</td><td>61</td><td>63</td><td>64</td><td>65</td><td>67</td><td>68</td><td>70</td>
                                                      </tr>
                                                      <tr class="active text-center" style="color:gray;">
                                                          <td>2</td><td>80</td><td>75</td><td>70</td><td>70</td><td>69</td><td>68</td><td>67</td><td>66</td><td>66</td><td>65</td><td>65</td><td>64</td><td>63</td><td>63</td><td>63</td><td>62</td><td>62</td><td>64</td><td>65</td><td>66</td><td>68</td><td>69</td><td>73</td>
                                                      </tr>
                                                      <tr class="info text-center" style="color:gray;">
                                                          <td>3</td><td>85</td><td>81</td><td>75</td><td>72</td><td>70</td><td>69</td><td>69</td><td>68</td><td>68</td><td>67</td><td>67</td><td>66</td><td>65</td><td>65</td><td>64</td><td>63</td><td>63</td><td>65</td><td>66</td><td>67</td><td>69</td><td>70</td><td>75</td>
                                                      </tr>
                                                      <tr class="active text-center" style="color:gray;">
                                                          <td>4</td><td>87</td><td>83</td><td>78</td><td>75</td><td>72</td><td>70</td><td>70</td><td>69</td><td>69</td><td>68</td><td>68</td><td>67</td><td>66</td><td>66</td><td>65</td><td>64</td><td>64</td><td>66</td><td>67</td><td>68</td><td>70</td><td>73</td><td>77</td>
                                                      </tr>
                                                      <tr class="success text-center" style="color:gray;">
                                                          <td>5</td><td>89</td><td>85</td><td>81</td><td>78</td><td>75</td><td>73</td><td>72</td><td>70</td><td>70</td><td>69</td><td>69</td><td>68</td><td>67</td><td>67</td><td>66</td><td>65</td><td>65</td><td>67</td><td>68</td><td>69</td><td>72</td><td>75</td><td>79</td>
                                                      </tr>
                                                      <tr class="active text-center" style="color:gray;">
                                                          <td>6</td><td>95</td><td>89</td><td>83</td><td>81</td><td>79</td><td>77</td><td>75</td><td>73</td><td>72</td><td>70</td><td>70</td><td>69</td><td>68</td><td>68</td><td>67</td><td>66</td><td>66</td><td>68</td><td>69</td><td>70</td><td>74</td><td>78</td><td>82</td>
                                                      </tr>
                                                      <tr class="info text-center" style="color:gray;"> 	
                                                          <td>7</td><td>100</td><td>93</td><td>85</td><td>83</td><td>81</td><td>80</td><td>79</td><td>75</td><td>74</td><td>73</td><td>72</td><td>70</td><td>69</td><td>69</td><td>68</td><td>67</td><td>67</td><td>69</td><td>70</td><td>72</td><td>76</td><td>80</td><td>85</td>
                                                      </tr>
                                                      <tr class="active text-center" style="color:gray;">
                                                          <td>8</td><td>103</td><td>96</td><td>88</td><td>84</td><td>83</td><td>82</td><td>81</td><td>78</td><td>76</td><td>75</td><td>74</td><td>72</td><td>70</td><td>70</td><td>69</td><td>68</td><td>68</td><td>70</td><td>72</td><td>74</td><td>78</td><td>81</td><td>86</td>
                                                      </tr>
                                                      <tr class="success text-center" style="color:gray;">
                                                          <td>9</td><td>104</td><td>97</td><td>89</td><td>85</td><td>84</td><td>83</td><td>82</td><td>79</td><td>78</td><td>77</td><td>76</td><td>75</td><td>73</td><td>72</td><td>70</td><td>69</td><td>69</td><td>71</td><td>73</td><td>75</td><td>81</td><td>85</td><td>87</td>
                                                      </tr>
                                                      <tr class="active text-center" style="color:gray;">
                                                          <td>10</td><td>107</td><td>100</td><td>92</td><td>88</td><td>85</td><td>84</td><td>83</td><td>81</td><td>80</td><td>79</td><td>78</td><td>77</td><td>75</td><td>74</td><td>72</td><td>70</td><td>70</td><td>72</td><td>74</td><td>77</td><td>83</td><td>86</td><td>88</td>
                                                      </tr>
                                                      <tr class="info text-center" style="color:gray;">
                                                          <td>11</td><td>109</td><td>102</td><td>94</td><td>90</td><td>89</td><td>85</td><td>84</td><td>82</td><td>81</td><td>80</td><td>79</td><td>78</td><td>76</td><td>75</td><td>74</td><td>73</td><td>72</td><td>74</td><td>75</td><td>79</td><td>85</td><td>87</td><td>89</td>
                                                      </tr>
                                                      <tr class="active text-center" style="color:gray;">
                                                          <td>12</td><td>111</td><td>104</td><td>97</td><td>93</td><td>92</td><td>86</td><td>85</td><td>84</td><td>82</td><td>81</td><td>80</td><td>79</td><td>78</td><td>NULL	</td><td>NULL</td><td>75</td><td>NULL</td><td>NULL</td><td>NULL</td><td>80</td><td>86</td><td>88</td><td>90</td>
                                                      </tr>
                                                      <tr class="success text-center" style="color:gray;">
                                                          <td>13</td><td>115</td><td>107</td><td>100</td><td>95</td><td>94</td><td>89</td><td>88</td><td>85</td><td>84</td><td>83</td><td>82</td><td>81</td><td>80</td><td>79</td><td>77</td><td>76</td><td>75</td><td>77</td><td>79</td><td>82</td><td>87</td><td>89</td><td>91</td>
                                                      </tr>
                                                      <tr class="active text-center" style="color:gray;">
                                                          <td>14</td><td>117</td><td>109</td><td>103</td><td>97</td><td>95</td><td>91</td><td>89</td><td>88</td><td>85</td><td>84</td><td>83</td><td>82</td><td>81</td><td>80</td><td>78</td><td>77</td><td>76</td><td>78</td><td>80</td><td>85</td><td>88</td><td>90</td><td>92</td>
                                                      </tr>
                                                      <tr class="info text-center" style="color:gray;">
                                                          <td>15</td><td>119</td><td>110</td><td>105</td><td>99</td><td>97</td><td>93</td><td>91</td><td>90</td><td>87</td><td>85</td><td>84</td><td>83</td><td>82</td><td>81</td><td>79</td><td>78</td><td>77</td><td>79</td><td>81</td><td>86</td><td>89</td><td>91</td><td>93</td>
                                                      </tr>
                                                      <tr class="active text-center" style="color:gray;">
                                                          <td>16</td><td>121</td><td>115</td><td>107</td><td>100</td><td>99</td><td>95</td><td>93</td><td>92</td><td>89</td><td>88</td><td>85</td><td>84</td><td>83</td><td>82</td><td>81</td><td>80</td><td>79</td><td>80</td><td>83</td><td>87</td><td>90</td><td>92</td><td>94</td>
                                                      </tr>
                                                      <tr class="success text-center" style="color:gray;">
                                                          <td>17</td><td>123</td><td>116</td><td>109</td><td>102</td><td>100</td><td>98</td><td>95</td><td>93</td><td>91</td><td>90</td><td>87</td><td>85</td><td>84</td><td>83</td><td>82</td><td>81</td><td>80</td><td>81</td><td>85</td><td>88</td><td>91</td><td>93</td><td>96</td>
                                                      </tr>
                                                      <tr class="active text-center" style="color:gray;">
                                                          <td>18</td><td>125</td><td>117</td><td>112</td><td>105</td><td>102</td><td>99</td><td>98</td><td>97</td><td>93</td><td>92</td><td>89</td><td>88</td><td>85</td><td>84</td><td>83</td><td>82</td><td>81</td><td>82</td><td>86</td><td>89</td><td>92</td><td>94</td><td>98</td>
                                                      </tr>
                                                      <tr class="info text-center" style="color:gray;">
                                                          <td>19</td><td>127</td><td>120</td><td>115</td><td>107</td><td>105</td><td>100</td><td>100</td><td>98</td><td>96</td><td>95</td><td>92</td><td>91</td><td>90</td><td>85</td><td>84</td><td>83</td><td>82</td><td>83</td><td>87</td><td>90</td><td>93</td><td>95</td><td>100</td>
                                                      </tr>
                                                      <tr class="active text-center" style="color:gray;">
                                                          <td>20</td><td>129</td><td>122</td><td>116</td><td>110</td><td>108</td><td>103</td><td>102</td><td>100</td><td>98</td><td>97</td><td>95</td><td>93</td><td>91</td><td>90</td><td>85</td><td>84</td><td>83</td><td>85</td><td>88</td><td>92</td><td>95</td><td>98</td><td>102</td>
                                                      </tr>
                                                      <tr class="success text-center" style="color:gray;">
                                                          <td>21</td><td>130</td><td>124</td><td>118</td><td>115</td><td>110</td><td>106</td><td>105</td><td>102</td><td>100</td><td>98</td><td>96</td><td>95</td><td>93</td><td>91</td><td>89</td><td>85</td><td>84</td><td>88</td><td>89</td><td>93</td><td>98</td><td>100</td><td>105</td>
                                                      </tr>
                                                      <tr class="active text-center" style="color:gray;">
                                                          <td>22</td><td>131</td><td>126</td><td>121</td><td>118</td><td>115</td><td>110</td><td>108</td><td>105</td><td>103</td><td>100</td><td>98</td><td>97</td><td>96</td><td>93</td><td>89</td><td>86</td><td>85</td><td>87</td><td>90</td><td>95</td><td>100</td><td>101</td><td>107</td>
                                                      </tr>
                                                      <tr class="info text-center" style="color:gray;">
                                                          <td>23</td><td>133</td><td>129</td><td>125</td><td>121</td><td>118</td><td>115</td><td>111</td><td>107</td><td>105</td><td>104</td><td>100</td><td>99</td><td>98</td><td>95</td><td>91</td><td>89</td><td>88</td><td>90</td><td>93</td><td>97</td><td>102</td><td>103</td><td>109</td>
                                                      </tr>
                                                      <tr class="active text-center" style="color:gray;">
                                                          <td>24</td><td>135</td><td>130</td><td>127</td><td>124</td><td>121</td><td>117</td><td>113</td><td>110</td><td>108</td><td>107</td><td>102</td><td>100</td><td>99</td><td>98</td><td>94</td><td>91</td><td>90</td><td>92</td><td>95</td><td>100</td><td>104</td><td>105</td><td>110</td>
                                                      </tr>
                                                  </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fine" class="col-sm-3 control-label">Percentile Ranks</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" placeholder="Percentile Ranks" name="pr" required >
                            </div>
                            <div class="col-sm-4">
                                <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#pr">View Percentile Ranks table </button>

                                <!-- Modal -->
                                <div id="pr" class="modal fade" role="dialog">
                                    <div class="modal-dialog modal-lg">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title text-center">Percentile Ranks table</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-lg-3">
                                                    <table class="table table-condensed table-bordered">
                                                          <tr class="success text-center" style="color:green;">
                                                              <td>Quotients</td><td>Percentiles</td>
                                                          </tr>
                                                          <tr class="active text-center" style="color:gray;">
                                                              <td>140</td><td>99</td></tr>
                                                          <tr class="success text-center" style="color:gray;">
                                                              <td>139</td><td>99</td></tr>
                                                          <tr class="active text-center" style="color:gray;">
                                                              <td>138</td><td>99</td></tr>
                                                          <tr class="info text-center" style="color:gray;">
                                                              <td>137</td><td>99</td></tr>
                                                          <tr class="active text-center" style="color:gray;">
                                                              <td>136</td><td>99</td></tr>
                                                          <tr class="success text-center" style="color:gray;">
                                                              <td>135</td><td>99</td></tr>
                                                          <tr class="active text-center" style="color:gray;">
                                                              <td>134</td><td>99</td></tr>
                                                          <tr class="info text-center" style="color:gray;">
                                                              <td>133</td><td>99</td></tr>
                                                          <tr class="active text-center" style="color:gray;">
                                                              <td>132</td><td>98</td></tr>
                                                          <tr class="success text-center" style="color:gray;">
                                                              <td>131</td><td>98</td></tr>
                                                          <tr class="active text-center" style="color:gray;">
                                                              <td>130</td><td>98</td></tr>
                                                          <tr class="info text-center" style="color:gray;">
                                                              <td>129</td><td>97</td></tr>
                                                          <tr class="active text-center" style="color:gray;">
                                                              <td>128</td><td>97</td></tr>
                                                          <tr class="success text-center" style="color:gray;">
                                                              <td>127</td><td>96</td></tr>
                                                          <tr class="active text-center" style="color:gray;">
                                                              <td>126</td><td>96</td></tr>
                                                          <tr class="info text-center" style="color:gray;">
                                                              <td>125</td><td>96</td></tr>
                                                          <tr class="active text-center" style="color:gray;">
                                                              <td> 124</td><td>95</td></tr>
                                                          <tr class="success text-center" style="color:gray;">
                                                                <td>123</td><td>94</td></tr>
                                                          <tr class="active text-center" style="color:gray;">
                                                                <td>122</td><td>93</td></tr>

                                                    </table>
                                                      </div>
                                                      <div class="col-lg-3">
                                                        <table class="table table-condensed table-bordered">
                                                            <tr class="success text-center" style="color:green;">
                                                                <td>Quotients</td><td>Percentiles</td>
                                                            </tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td>121</td><td>92</td></tr>
                                                            <tr class="success text-center" style="color:gray;">
                                                                <td>120</td><td>91</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td>119</td><td>90</td></tr>
                                                            <tr class="info text-center" style="color:gray;">
                                                                <td>118</td><td>88</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td>117</td><td>87</td></tr>
                                                            <tr class="success text-center" style="color:gray;">
                                                                <td>116</td><td>86</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td> 115</td><td>84</td></tr>
                                                            <tr class="info text-center" style="color:gray;">
                                                                <td>114</td><td>83</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td>113</td><td>81</td></tr>
                                                            <tr class="success text-center" style="color:gray;">
                                                                <td>112</td><td>79</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td>111</td><td>76</td></tr>
                                                            <tr class="info text-center" style="color:gray;">
                                                                <td>110</td><td>74</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td>109</td><td>73</td></tr>
                                                            <tr class="success text-center" style="color:gray;">
                                                                <td>108</td><td>70</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td>107</td><td>68</td></tr>
                                                            <tr class="info text-center" style="color:gray;">
                                                                <td>106</td><td>66</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td>105</td><td>63</td></tr>
                                                            <tr class="success text-center" style="color:gray;">
                                                                <td>104</td><td>61</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td>103</td><td>58</td></tr>
                                                          </table>
                                                      </div>
                                                        <div class="col-lg-3">
                                                        <table class="table table-condensed table-bordered">
                                                            <tr class="success text-center" style="color:green;">
                                                                <td>Quotients</td><td>Percentiles</td>
                                                            </tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td>102</td><td>55</td></tr>
                                                            <tr class="success text-center" style="color:gray;">
                                                                <td>101</td><td>52</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td>100</td><td>50</td></tr>
                                                            <tr class="info text-center" style="color:gray;">
                                                                <td>99</td><td>48</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td>98</td><td>45</td></tr>
                                                            <tr class="success text-center" style="color:gray;">
                                                                <td>97</td><td>42</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td> 96</td><td>39</td></tr>
                                                            <tr class="info text-center" style="color:gray;">
                                                                <td>95</td><td>37</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td>94</td><td>34</td></tr>
                                                            <tr class="success text-center" style="color:gray;">
                                                                <td>93</td><td>32</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td>92</td><td>30</td></tr>
                                                            <tr class="info text-center" style="color:gray;">
                                                                <td>91</td><td>27</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td> 90</td><td>26</td></tr>
                                                            <tr class="success text-center" style="color:gray;">
                                                                <td>89</td><td>24</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td>88</td><td>21</td></tr>
                                                            <tr class="info text-center" style="color:gray;">
                                                                <td>87</td><td>19</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td>86</td><td>17</td></tr>
                                                            <tr class="success text-center" style="color:gray;">
                                                                <td> 85</td><td>16</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td>84</td><td>14</td></tr>
                                                        </table>
                                                      </div>

                                                      <div class="col-lg-3">
                                                        <table class="table table-condensed table-bordered">
                                                            <tr class="success text-center" style="color:green;">
                                                                <td>Quotients</td><td>Percentiles</td>
                                                            </tr>    
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td>83</td><td>13</td></tr>
                                                            <tr class="success text-center" style="color:gray;">
                                                                <td>82</td><td>12</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td>81</td><td>10</td></tr>
                                                            <tr class="info text-center" style="color:gray;">
                                                                <td> 80</td><td>9</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td>79</td><td>8</td></tr>
                                                            <tr class="success text-center" style="color:gray;">
                                                                <td>78</td><td>7</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td>77</td><td>6</td></tr>
                                                            <tr class="info text-center" style="color:gray;">
                                                                <td>76</td><td>5</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td>75</td><td>5</td></tr>
                                                            <tr class="success text-center" style="color:gray;">
                                                                <td>74</td><td>4</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td>73</td><td>4</td></tr>
                                                            <tr class="info text-center" style="color:gray;">
                                                                <td>72</td><td>3</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td>71</td><td>3</td></tr>
                                                            <tr class="success text-center" style="color:gray;">
                                                                <td>70</td><td>2</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td>69</td><td>2</td></tr>
                                                            <tr class="info text-center" style="color:gray;">
                                                                <td>68</td><td>2</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td> 67</td><td>1</td></tr>
                                                            <tr class="succes text-center" style="color:gray;">
                                                                <td>66</td><td>1</td></tr>
                                                            <tr class="active text-center" style="color:gray;">
                                                                <td>65</td><td>1</td></tr>
                                                            <tr class="info text-center" style="color:gray;">
                                                                <td>64</td><td>1</td></tr>
                                                      </table>
                                                      </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="fine" class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-5">
                                <select class="form-control" name="desc">
                                    <option value="Very Superior">Very Superior</option>
                                    <option value="Superior">Superior</option>
                                    <option value="Above Average">Above Average</option>
                                    <option value="Average">Average</option>
                                    <option value="Below Average">Below Average</option>
                                    <option value="Poor">Poor</option>
                                    <option value="Very Poo">Very Poor</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#desc">View Description table </button>

                                <!-- Modal -->
                                <div id="desc" class="modal fade" role="dialog">
                                    <div class="modal-dialog modal-lg">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title text-center">Description table</h4>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table table-condensed table-bordered">
                                                    <tr class="success text-center" style="color:green;">
                                                        <td>Percentile Ranks</td><td>Deviation Quotients</td><td>Description</td><td>%Included</td>
                                                    </tr>    
                                                    <tr class="active text-center" style="color:gray;">
                                                        <td>&gt;98</td><td>&gt;130</td><td>Very Superior</td><td>2.34</td></tr>
                                                    <tr class="success text-center" style="color:gray;">
                                                        <td>91-98</td><td>121-130</td><td>Superior</td><td>6.87</td></tr>
                                                    <tr class="active text-center" style="color:gray;">
                                                        <td>74-97</td><td>111-120</td><td>Above Average</td><td>16.12</td></tr>
                                                    <tr class="success text-center" style="color:gray;">
                                                        <td> 25-73</td><td>90-110</td><td>Average</td><td>49.51</td> </tr>
                                                    <tr class="active text-center" style="color:gray;">
                                                        <td>9-24</td><td>80-89</td><td>Below Average</td><td>16.12</td></tr>
                                                    <tr class="success text-center" style="color:gray;">
                                                        <td>2-8</td><td>70-79</td><td>Poor</td><td>6.87</td></tr>
                                                    <tr class="active text-center" style="color:gray;">
                                                        <td>&lt;2</td><td>&lt;70</td><td>Very Poor</td><td>2.34</td></tr>
                                                </table>
                                            </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        

                        <input type="hidden" name="patientid" id="id" value="<?php echo $patient_id; ?>" />
                        <input type="hidden" name="time" id="id" value="<?php echo date('H:i:s'); ?>" />
                        <input type="hidden" name="date" id="id" value="<?php echo date('Y-m-d'); ?>" />
                        <input type="hidden" name="doctorid" id="id" value="<?php echo $name; ?>" />

                        <div class="form-group">
                            <div class="col-sm-7"></div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </div>
                            <div class="col-sm-3">
                                <button type="submit" name='save' class="btn btn-primary">Save</button>
                            </div>
                        </div>

                    <?php 
                        echo form_close();

                    ?>
                    </div>

                </div>

<!-- discharge -->
                <div id="discharge" style="display: none" ></div>
                
                            
            </div>
            
<!-- Tile navigation -->
            <div class="col-lg-4">
                <div class="col-sm-2 col-icon-box " onclick="viewPatients()" >
                    <img src="<?php echo base_url()."asserts/images/icons/patient.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
                    <div class="overlay">
                        <div class="text">View Patient</div>
                    </div>
                </div>
                <div class="col-sm-2 col-icon-box "  onclick="diagnosis()">
<<<<<<< HEAD:Group-07/NiceAdmin/application/views/doctor/doc_view_patient.php
                    <img src="<?php echo base_url()."asserts/images/icons/diagnosis.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
                    <div class="overlay">
                        <div class="text">Diagnosis</div>
                    </div>
                </div>
                <div class="col-sm-2 col-icon-box "  onclick="problem()">
                    <img src="<?php echo base_url()."asserts/images/icons/problem.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
=======
                    <img src="<?php echo base_url()."asserts/images/icons/diagnosis_problem.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
                    <div class="overlay">
                        <div class="text">Problem <br>Diagnosis</div>
                    </div>
                </div>
<!--
                <div class="col-sm-2 col-icon-box "  onclick="problem()">
                    <img src="</?php echo base_url()."asserts/images/icons/problem.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
>>>>>>> dd9595d42c59244d49c19c907f9097501ce54ea5:NiceAdmin/application/views/doctor/doc_view_patient.php
                    <div class="overlay">
                        <div class="text">Problem</div>
                    </div>
                </div>
<<<<<<< HEAD:Group-07/NiceAdmin/application/views/doctor/doc_view_patient.php
=======
-->
>>>>>>> dd9595d42c59244d49c19c907f9097501ce54ea5:NiceAdmin/application/views/doctor/doc_view_patient.php
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

                <div class="col-sm-2 col-icon-box " onclick="DischargePlan()" >
                    <img src="<?php echo base_url()."asserts/images/icons/discharge_plan.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
                    <div class="overlay">
                        <div class="text">Discharge<br/> Plan</div>
                    </div>
                </div>
            </div>
            
            

                
                
                
                
        </div> 
    </div>
</section>

<?php                                   ///  show/hide form/table for family andd medical history
    foreach ($getFamily as $family):
        if($patient_id == $family->patient_id){
?>
    
    <script type="text/javascript">
        document.getElementById('family_form').style.display = 'none';
        document.getElementById('family_table').style.display = 'block'; 
    </script>
<?php
        }else{
?>
    <script type="text/javascript">
        document.getElementById('family_form').style.display = 'block';
        document.getElementById('family_table').style.display = 'none';
    </script>
<?php
        }
    endforeach;
?>


<?php                           //  show/hide form/table for communication skills
    foreach ($getComm as $comm):
        if($patient_id == $comm->patient_id){
?>
    
    <script type="text/javascript">
        document.getElementById('comm_form').style.display = 'none';
        document.getElementById('comm_table').style.display = 'block';
    </script>
<?php
        }else{
?>
    <script type="text/javascript">
        document.getElementById('comm_form').style.display = 'block';
        document.getElementById('comm_table').style.display = 'none';
    </script>
<?php
        }
    endforeach;
?>


<?php                           //  show/hide form/table for mortor skills
    foreach ($getMotor as $mortor):
        if($patient_id == $mortor->patient_id){   
?>
    
    <script type="text/javascript">
        document.getElementById('mortor_form').style.display = 'none';
        document.getElementById('mortor_table').style.display = 'block';
    </script>
<?php
        }else{
?>
    <script type="text/javascript">
        document.getElementById('mortor_form').style.display = 'block';
        document.getElementById('mortor_table').style.display = 'none';
    </script>
<?php
        }
    endforeach;
?>


<?php                           //  show/hide form/table for cognative 
    foreach ($getCog as $cog):
        if($patient_id == $cog->patient_id){ 
?>
    
    <script type="text/javascript">
        document.getElementById('cog_form').style.display = 'none';
        document.getElementById('cog_table').style.display = 'block';
    </script>
<?php
        }else{
?>
    <script type="text/javascript">
        document.getElementById('cog_form').style.display = 'block';
        document.getElementById('cog_table').style.display = 'none';
    </script>
<?php
        }
    endforeach;
?>


<?php                       //  show/hide form/table for notes
    foreach ($getNotes as $notes):
        if($patient_id == $notes->patient_id){
?>
    
    <script type="text/javascript">
        document.getElementById('notes_form').style.display = 'none';
        document.getElementById('notes_table').style.display = 'block';
    </script>
<?php
        }else{
?>
    <script type="text/javascript">
        document.getElementById('notes_form').style.display = 'block';
        document.getElementById('notes_table').style.display = 'none';
    </script>
<?php
        }
    endforeach;
?>

<<<<<<< HEAD:Group-07/NiceAdmin/application/views/doctor/doc_view_patient.php
=======
<?php                       //  show/hide form/table for problem
    foreach ($getDiagnosis as $problems):
        if($patient_id == $problems->patient_id && !empty($problems->problem)){ 
?>
    
    <script type="text/javascript">
        document.getElementById('problem_form').style.display = 'none';
        document.getElementById('problem_table').style.display = 'block';
    </script>
<?php
        }else{
?>
    <script type="text/javascript">
        document.getElementById('problem_form').style.display = 'block';
        document.getElementById('problem_table').style.display = 'none';
    </script>
<?php
        }
    endforeach;
?>

<?php                       //  show/hide form/table for diagnosis
    foreach ($getDiagnosis as $diagnosis):
        if($patient_id == $diagnosis->patient_id){
?>
    
    <script type="text/javascript">
        document.getElementById('diagnosis_form').style.display = 'none';
        document.getElementById('diagnosis_table').style.display = 'block';
    </script>
<?php
        }else{
?>
    <script type="text/javascript">
        document.getElementById('diagnosis_form').style.display = 'block';
        document.getElementById('diagnosis_table').style.display = 'none';
    </script>
<?php
        }
    endforeach;
?>

>>>>>>> dd9595d42c59244d49c19c907f9097501ce54ea5:NiceAdmin/application/views/doctor/doc_view_patient.php

<script src="<?php echo base_url("js/jquery-1.10.2.js"); ?>" type="text/javascript"></script>

<script type="text/javascript">
$("#start").click(function() {
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('CogTestQuiz/ViewMarks'); ?>",
        success: function(data) {
            $("#cognitive_marks").html(data);
        }
    });
});
</script>

<<<<<<< HEAD:Group-07/NiceAdmin/application/views/doctor/doc_view_patient.php
=======
<script type="text/javascript">
$("#calculateB").click(function() {
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('CogTestQuiz/ViewMarks'); ?>",
        success: function(data) {
            $("#cognitive_marks").html(data);
        }
    });
});
</script>


>>>>>>> dd9595d42c59244d49c19c907f9097501ce54ea5:NiceAdmin/application/views/doctor/doc_view_patient.php
<!-- javascript functions for tile navigation -->
<script>
    function viewPatients() {
        $("#viewPatient").show();  
        $("#caseHistory,#medication,#goals,#progress,#notes,#references,#cognitiveTest,#discharge,#problem,#diagnosis").hide();   
    }
    function caseHistory() {
        $("#caseHistory").show();
        $("#viewPatient,#medication,#goals,#progress,#notes,#references,#cognitiveTest,#discharge,#problem,#diagnosis").hide(); 
    }
    function medication() {
        $("#medication").show();
        $("#caseHistory,#viewPatient,#goals,#progress,#notes,#references,#cognitiveTest,#discharge,#problem,#diagnosis").hide();  
    }
    function goals() {
        $("#goals").show();
        $("#caseHistory,#viewPatient,#medication,#progress,#notes,#references,#cognitiveTest,#discharge,#problem,#diagnosis").hide(); 
    }
    function progress() {
        $("#progress").show();
        $("#caseHistory,#viewPatient,#medication,#goals,#notes,#references,#cognitiveTest,#discharge,#problem,#diagnosis").hide(); 
    }
    function notes() {
        $("#notes").show();
        $("#caseHistory,#viewPatient,#medication,#goals,#progress,#references,#cognitiveTest,#discharge,#problem,#diagnosis").hide(); 
    }
    function references() {
        $("#references").show();
        $("#caseHistory,#viewPatient,#medication,#goals,#progress,#notes,#cognitiveTest,#discharge,#problem,#diagnosis").hide(); 
    }
    function cognitiveTest() {
        $("#cognitiveTest").show();
        $("#caseHistory,#viewPatient,#medication,#goals,#progress,#notes,#references,#discharge,#problem,#diagnosis").hide(); 
    }
    function diagnosis() {
        $("#diagnosis").show();  
<<<<<<< HEAD:Group-07/NiceAdmin/application/views/doctor/doc_view_patient.php
        $("#caseHistory,#medication,#goals,#progress,#notes,#references,#cognitiveTest,#viewPatient,#problem,#diagnosis").hide();   
    }
    function problem() {
        $("#problem").show();  
        $("#caseHistory,#medication,#goals,#progress,#notes,#references,#cognitiveTest,#viewPatient,#diagnosis").hide();   
=======
        $("#caseHistory,#medication,#goals,#progress,#notes,#references,#cognitiveTest,#viewPatient,#problem").hide();   
>>>>>>> dd9595d42c59244d49c19c907f9097501ce54ea5:NiceAdmin/application/views/doctor/doc_view_patient.php
    }
    function DischargePlan() {
        $("#discharge").show();  
        $("#caseHistory,#medication,#goals,#progress,#notes,#references,#cognitiveTest,#viewPatient,#problem,#diagnosis").hide();   
    }
      $(document).ready(function (){
                setInterval(getMarksB, 100);
                setInterval(getMarksA, 100);
            });
    function getMarksB(){
    $(document).ready(function(){
        var id = $('#patientcogid').attr("value");
        $.ajax({
			 url: 'http://[::1]/project/Group-07/NiceAdmin/CogTestQuiz/getMarksB/',
			 type: "POST",
			 data: {id:id},
			 success: function(data) {
                    $('#cogtestmarks_B').html(data);
             }
			});

    });
    }
    
    function getMarksA(){
    $(document).ready(function(){
        var id = $('#patientcogid').attr("value");
        $.ajax({
			 url: 'http://[::1]/project/Group-07/NiceAdmin/CogTestQuiz/getMarksA/',
			 type: "POST",
			 data: {id:id},
			 success: function(data) {
                    $('#cogtestmarks_A').html(data);
             }
			});
 
    });
    }
    
<<<<<<< HEAD:Group-07/NiceAdmin/application/views/doctor/doc_view_patient.php
</script>
=======
</script>




<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
>>>>>>> dd9595d42c59244d49c19c907f9097501ce54ea5:NiceAdmin/application/views/doctor/doc_view_patient.php
