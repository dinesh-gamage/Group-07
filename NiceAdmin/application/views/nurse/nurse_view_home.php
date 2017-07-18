<?php
        
        $status  = $this->session->userdata('status');    
        if($status != 'Nurse'){
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
                    <li><i class="fa fa-home"></i><a href="<?php echo base_url() . "NurseView" ?>">Home</a></li>
                    <li><i class="fa fa-laptop"></i>All Patients</li>	
                </ol>
            </div>
        </div>

        <div class="row">
            <!--calender -->
            <div class="col-lg-8">
            	<div class="row">
            		<div class="col-lg-12" >
		            	<div id="staicReport" style="display: none" >
		                	<ul class="nav nav-pills nav-justified">
			                    <li class="active"><a data-toggle="pill" href="#diagnos">Diagnosis</a></li>
			                    <li><a data-toggle="pill" href="#visit">Patient Visit</a></li>
			                    <li><a data-toggle="pill" href="#">Total Attendance</a></li>
			                    <li><a data-toggle="pill" href="#">New Registrants</a></li>
			                </ul>

		                    <?php $months = array('January','February','March','Aprail','May','June','July','Auguest','September','October','November','December');?>
		                    <div class="tab-content">
			                    <div id="diagnos" class="tab-pane fade in active">
			                        <div class="white_back" style="overflow-x:auto; ">
			                        	<div class="table-responsive" >
				                        	<table class="table "  >
												  <thead>
												    <tr>
												      <th>No</th>
												      <th>Month</th>
												      <th>ASD</th>
												      <th>ODD</th>
												      <th>ADHD</th>
												      <th>SDLSS</th>
												      <th>OCD</th>
												      <th>PTSD</th>
												      <th>Depression</th>
												      <th>GAD</th>
												      <th>Adjustment Disorder</th>
												      <th>Acute Stress Disorder</th>
												      <th>MR</th>
												      <th>Conduct Disorder</th>
												      <th>Disosiative Disorder</th>
												      <th>Non Organic Enuresis</th>
												      <th>Somatization Disorder</th>
												      <th>Selective Mutism</th>
												      <th>Reactive Attachment Disorder</th>
												      <th>Tie Disorder</th>
												      <th>Panic Disorder</th>
												      <th>Separation Ansiety Disorder</th>
												      <th>Mental Behavioural Disorder</th>
												      <th>Phychotic Disorder</th>
												      <th>No Mental illness</th>
												      <th>Expressive Language Difficult Disorder</th>
												      <th>Total</th>
												    </tr>
												  </thead>

												  <tbody>
												  	<?php for($m=0;$m<sizeof($months);$m++){
												  	?>
												    <tr>
												      <th scope="row"><?php echo $m+1?></th>
												      <td><?php echo $months[$m];?></td>
												    </tr>
												   <?php };?>
												   	<tr>
												      <th scope="row"></th>
												      <td>Total</td>
												    </tr>
												  </tbody>
											</table>
										</div>
			                        </div>
			                    </div>


			                    <div id="visit" class="tab-pane  ">
			                        <div class="white_back"></div>
			                    </div>        
		                	</div>
		                </div>
			        </div>
			    </div>       


                <div id="cala" >
                    <div class="form-group" style="float:right ;margin-top: -8px;" >
                        <form class="navbar-form">
                                <select class="form-control" id="doc">
                                    <?php foreach($doctor as $doc):?>
                                    <option value="<?php echo $doc->doctor_id;?>"><?php echo $doc->doc_name;?></option>
                                    <?php endforeach;?>
                                </select>
                        </form>
                    </div>
                    <div class="white_back">
                         <div id="calendar" class="col-centered"></div>
                     </div>
                     <!-- Modal -->
                     <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                       <div class="modal-dialog" role="document">
                         <div class="modal-content">
                         <!--form class="form-horizontal" method="POST" action="<!?php echo base_url()."Calendar/add_data";?>"-->
                           <?php 
                             $attri = array(
                                 'class'=>'form-horizontal'
                             );
                             echo form_open('NurseView/add_data',$attri);?>
                           <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                             <h4 class="modal-title" id="myModalLabel">Add Event</h4>
                           </div>
                           <div class="modal-body">

                               <div class="form-group">
                                 <label for="title" class="col-sm-2 control-label">Title</label>
                                 <div class="col-sm-10">
                                   <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                                 </div>
                               </div>
                               <div class="form-group">
                                 <label for="color" class="col-sm-2 control-label">Color</label>
                                 <div class="col-sm-10">
                                   <select name="color" class="form-control" id="color">
                                       <option value="" >Choose</option>
                                       <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                                       <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                                       <option style="color:#008000;" value="#008000">&#9724; Green</option>						  
                                       <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                                       <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                                       <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                                       <option style="color:#000;" value="#000">&#9724; Black</option>

                                     </select>
                                 </div>
                               </div>
                               <div class="form-group">
                                 <label for="start" class="col-sm-2 control-label">Start date</label>
                                 <div class="col-sm-10">
                                   <input type="text" name="start" class="form-control" id="start" readonly>
                                 </div>
                               </div>
                               <div class="form-group">
                                 <label for="end" class="col-sm-2 control-label">End date</label>
                                 <div class="col-sm-10">
                                   <input type="text" name="end" class="form-control" id="end" readonly>
                                 </div>
                               </div>
                                     <input type="hidden" id="doctor_val" name="doctorName" value="na123" />     
                           </div>
                           <div class="modal-footer">
                             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                             <button type="submit" name='save' class="btn btn-primary">Save changes</button>
                           </div>
                         <?php echo form_close();?>
                         </div>
                       </div>
                     </div>



                     <!-- Modal -->
                     <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                       <div class="modal-dialog" role="document">
                         <div class="modal-content">
                             <?php 
                             $attri = array(
                                 'class'=>'form-horizontal'
                             );
                             echo form_open('NurseView/edit_data',$attri);?>
                           <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                             <h4 class="modal-title" id="myModalLabel">Edit Event</h4>
                           </div>
                           <div class="modal-body">

                               <div class="form-group">
                                 <label for="title" class="col-sm-2 control-label">Title</label>
                                 <div class="col-sm-10">
                                   <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                                 </div>
                               </div>
                               <div class="form-group">
                                 <label for="color" class="col-sm-2 control-label">Color</label>
                                 <div class="col-sm-10">
                                   <select name="color" class="form-control" id="color">
                                       <option value="">Choose</option>
                                       <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                                       <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                                       <option style="color:#008000;" value="#008000">&#9724; Green</option>						  
                                       <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                                       <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                                       <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                                       <option style="color:#000;" value="#000">&#9724; Black</option>

                                     </select>
                                 </div>
                               </div>
                                 <div class="form-group"> 
                                     <div class="col-sm-offset-2 col-sm-10">
                                       <div class="checkbox">
                                         <label class="text-danger"><input type="checkbox"  name="delete"> Delete event</label>
                                       </div>
                                     </div>
                                 </div>

                               <input type="hidden" name="id" class="form-control" id="id">


                           </div>
                           <div class="modal-footer">
                             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                             <button type="submit" class="btn btn-primary">Save changes</button>
                           </div>
                         <!--/form-->
                         <?php echo form_close();?>
                         </div>
                       </div>
                     </div>
                </div>
                
                <!--References start-->
                <div id="references" style="display: none" >
                        
                                    <div class="col-md-12">
                                        <div class="white_back">
                                
                                            <h2 class="text-center">Reference form</h2><hr>
                                            <div class="row">
                                                <div class="col-sm-4">

                                                    <select  class="form-control"id="patientrefId" >
                                                        <?php foreach($patients as $pat):?>
                                                        <option   value="<?php echo $pat->patient_id;?>"><?php echo $pat->patient_name;?></option>
                                                        <?php endforeach;?>
                                                    </select>
                                                </div>
                                            </div>    
                                            <hr/>
                                            <form action="<?php echo site_url('Form2');?>" method="post" target="_blank">
                                                
                                                <div class="form-group col-sm-6">
                                                    <label for="date">Date:</label>
                                                    <input type="text" class="form-control" name="date" value="" placeholder="<?php echo date('Y-m-d');?>" readonly>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="clno">Clinic No:</label>
                                                    <input type="text" class="form-control" name="clinic" placeholder="Enter clinic number">
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="ref">Ref.Name:</label>
                                                    <input type="text" class="form-control" name="ref" id="refer" value="" placeholder="Enter Reference name">
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="age">Age:</label>
                                                    <input type="text" class="form-control" id="refAge" name="age" value="" placeholder="Enter Age">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="des">Description:</label>
                                                    <textarea class="form-control" rows="5" name="des"></textarea>
                                                </div>
                                                <div class="form-group">
                                                   <button type="submit" class="btn btn-info" >Submit</button>
                                                </div>
                                                <input type="hidden" name="patientid" id="id" value="" />
                                                <input type="hidden" name="doc_name" id="id" value="" />
                                                
                                            </form>
                                
                                        </div>
                                    </div>

                        
                    </div>
                
                <!--References end--> 
                <!--Cognitive start-->
                
                <div id="cognitiveTest" style="display: none" >
                    <div class="white_back container">
                        
                        <h3 class="text-center">Cognitive Test</h3><hr>
                        
                        <form name="myform" id="myform" action="<?php echo base_url() ?>CogTestQuiz/getTest/" method="post" target="_blank" >
                            <div class="form-group">
                                <label for="title" class="col-sm-4 control-label text-center">Select Test Type</label>
                                <div class="col-sm-2">
                                    <select name="testType" class="form-control" id="color" required>
                                        <option value="A">Test A</option>
                                        <option value="B">Test B</option>
                                    </select>
                                </div>
                                <input type="hidden"  value="" />
                                <div class="col-sm-4">
                                    <select   id="patientcogid" required name="patientid" class="form-control" >
                                        <?php foreach($patients as $pat):?>
                                        <option   value="<?php echo $pat->patient_id;?>"><?php echo $pat->patient_name?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="col-sm-2">
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
                </div>
                
                <!--Cognitive end-->
                <div id="register" class="white_back" style="display: none">
                   <div class="book-top-bar text-center">
                     <h3><i class="flaticon-notes hidden-xs"></i>Register Patient</h3>
                   </div>
                    </br>
                   <div class="book-form ">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11"><input type="text" class="form-control" id="pname" name="pname" placeholder="Patient Name" required></div></div>
                                </div>
                                <div class="form-group">
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11"><input type="text" class="form-control" id="age" name="age" placeholder="Patient Age" required></div></div>
                                </div>
                                <div class="form-group">
                                     <div id="checkage"></div>
                                </div>
                                <div class="form-group">
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11"><input type="text" class="form-control" id="dob" onfocus="(this.type='date')" name="dob"  placeholder="Date Of Birth" required></div></div>
                                </div>
                                <div class="form-group">
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11"><input type="text" class="form-control" id="tel" name="tel" placeholder="Phone Number" required></div></div>
                                </div>
                                <div class="form-group">
                                    <div id="checktel"></div>
                                </div>
                                <div class="form-group">
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11">
                                    <select id="lan" name="lan" class="form-control" >
                                            <option value="Sinhala" name="lan">Sinhala</option>
                                            <option value="Tamil" name="lan">Tamil</option>
                                            <option value="English" name="lan">English</option>
                                    </select>
                                    </div></div>
                                </div>
                                <div class="form-group select" required>
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11">
                                        <select name="gender" id="gender" class="form-control" >
                                            <option value="Female" name="gender">Female</option>
                                            <option value="Male" name="gender">Male</option>
                                        </select>
                                    </div></div>    
                                </div>
                                <br/>
                                <div class="form-group">
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11"><input type="text" class="form-control" id="sch" name="sch" placeholder="School" required></div></div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11"><input type="text" class="form-control" id="gur" name="gur" placeholder="Guardian Name" required></div></div>
                                </div>
                                <div class="form-group">
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11"><input type="text" list="gar" class="form-control" id="rel" name="rel" placeholder="Relationship" required>
                                      <datalist id="gar">
                                        <option value="Father">
                                        <option value="Mother">
                                      </datalist>
                                    </div></div>
                                </div>
                                <div class="form-group">
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11"><input type="text" class="form-control" id="ref" name="ref" placeholder="Referred By" required></div></div>
                                </div>
                                <div class="form-group">
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11"><input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required></div></div>
                                </div>
                                <div class="form-group">
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11"><input type="password" class="form-control" id="cpass" name="cpass" placeholder="Confirm Password" required></div></div>
                                </div>
                                <div class="form-group">
                                    <div id="checkpass"></div>
                                </div>
                                <div class="form-group">
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11"><input  type="text" class="form-control" id="div" name="div" placeholder="Divisional Secretariet" required value="Karapitiya"></div></div>
                                </div>
                                <div class="form-group" hidden="hidden">
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11"><input type="text" readonly class="form-control" id="date" name="date" placeholder=""  value="<?php echo date('Y-m-d');?>" required></div></div>
                                </div>
                                <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11"><textarea class="form-control" id="address" name="address" rows="2" placeholder="Address"></textarea></div></div>
                            </div>
                        </div>
                        </br>
                        <div class="text-center" id="messagereg"></div>
                        <div class="row"><button type="submit" style="float: right;margin-right: 50px;" id="register_btn" class="btn btn-primary">Register</button></div>
                    </div>
                </div>

                


              </div>
        
            <!--menu -->
              <div class="col-lg-4">
                <div class="col-sm-2 col-icon-box "  onclick="calendar()">
                    <img src="<?php echo base_url()."asserts/images/icons/calendar.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
                    <div class="overlay">
                        <div class="text">Calendar</div>
                    </div>
                </div>  
                <div class="col-sm-2 col-icon-box " onclick="registerPatients()" >
                    <img src="<?php echo base_url()."asserts/images/icons/patient.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
                    <div class="overlay">
                        <div class="text">Register</div>
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
                <div class="col-sm-2 col-icon-box " onclick="staticReport()">
                    <img src="<?php echo base_url()."asserts/images/icons/report_icon.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
                    <div class="overlay">
                        <div class="text">Static <br/> Reports</div>
                    </div>
                </div>
            </div>
                        
            
        </div>
        
    
    
        
    <script src="<?php echo base_url() ?>scripts/fullcalendar/lib/moment.min.js"></script>
    <script src="<?php echo base_url() ?>scripts/fullcalendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url() ?>scripts/fullcalendar/gcal.js"></script>
    
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- FullCalendar -->
	<script src='js/moment.min.js'></script>
	<script src='js/fullcalendar.min.js'></script>
	
	<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,listWeek' //listMonth
			},
            dayClick: function(date, jsEvent, view) {
                if(view.name == 'month') {
                    
                    $('#calendar').fullCalendar('changeView', 'agendaDay');
                    $('#calendar').fullCalendar('gotoDate', date);
                    
                }   
            },
            
			defaultDate: Date(),//'2016-01-12',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			selectable: true,
			selectHelper: true,
			select: function(start, end ) {
				        $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
				        $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
				        $('#ModalAdd').modal('show');
			},
			eventRender: function(event, element) {
				element.bind('dblclick', function() {
					$('#ModalEdit #id').val(event.id);
					$('#ModalEdit #title').val(event.title);
					$('#ModalEdit #color').val(event.color);
					$('#ModalEdit').modal('show');
				});
                                return ['all', event.doctor].indexOf($('#doc').val()) >= 0;
			},
            
			eventDrop: function(event, delta, revertFunc) { // si changement de position
                
                   
				edit(event);

			},
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur
                
				edit(event);

	},
			events: [
			<?php foreach($events as $event): 
                if (True){
			
				$start = explode(" ", $event->start);
				$end = explode(" ", $event->end);
				if($start[1] == '00:00:00'){
					$start = $start[0];
				}else{
					$start = $start;
				}
				if($end[1] == '00:00:00'){
					$end = $end[0];
				}else{
					$end = $end;
				}
			?>
				{
                                        doctor:'<?php echo $event->doctor_id; ?>',
					id: '<?php echo $event->id; ?>',
					title: '<?php echo $event->title; ?>',
					start: '<?php echo $event->start; ?>',
					end: '<?php echo $event->end; ?>',
					color: '<?php echo $event->color; ?>',
				},
			<?php 
                }
                    endforeach; ?>
			]
        });

		function edit(event){
			start = event.start.format('YYYY-MM-DD HH:mm:ss');
			if(event.end){
				end = event.end.format('YYYY-MM-DD HH:mm:ss');
			}else{
				end = start;
			}

			id =  event.id;
            title = event.title;
			$.ajax({
			 url: 'http://[::1]/project/Group-07/NiceAdmin/NurseView/edit_event',
			 type: "POST",
			 data: {id:id,end:end,start:start,title:title},
			 success: function(rep) {
					if(rep){
						swal('congratulations!', 'Event updated Successfully','success');
                        //alert('saved');
					}else{
						swal('Oops... sorry','Event update failed','error');
					}
				}
			});
		}
		

	});
        $('#doc').on('change',function(){
            $('#calendar').fullCalendar('rerenderEvents');
            $('#doctor_val').val($('#doc').val());
        });
        
    //knob
    $(function () {
        $(".knob").knob({
            'draw': function () {
                $(this.i).val(this.cv + '%');
            }
        });
    });

    //carousel
    $(document).ready(function () {
        $("#owl-slider").owlCarousel({
            navigation: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true

        });
    });

    //custom select box

    $(function () {
        $('select.styled').customSelect();
    });
    

    


</script>
            
            
          


       
    </div>
</section>
<script>
    function calendar(){
        $("#cala").show();  
        $("#references,#cognitiveTest,#register,#staicReport").hide();   
    }
    
    function references(){
        $("#references").show();  
        $("#cala,#cognitiveTest,#register,#staicReport").hide();   
        
    }
    function cognitiveTest(){
        $("#cognitiveTest").show();  
        $("#cala,#references,#register,#staicReport").hide();   
    }
    function registerPatients(){
        $("#register").show();  
        $("#cala,#cognitiveTest,#references,#staicReport").hide();   
    }
    function staticReport(){
        $("#staicReport").show();  
        $("#cala,#cognitiveTest,#references,#register").hide();   
    }
    
    
</script>
<script >
    function getMarksB(){
    $(document).ready(function(){
        var id = $( "#patientcogid option:selected" ).val();
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
        var id = $( "#patientcogid option:selected" ).val();
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
    $(document).ready(function (){
        setInterval(getMarksB, 100);
        setInterval(getMarksA, 100);
    });
    
    function setRefName(){
        $('#refer').val($( "#patientrefId option:selected" ).text());
    }

    $('#patientrefId').on('change',function(){
        setRefName();
        var p = $( "#patientrefId option:selected" ).text(); 
        $.ajax({
            type: "post",
            url: "http://[::1]/project/Group-07/NiceAdmin/NurseView/getAge/",
            cache: false,
            data: {pati:p},
            success: function (data) {
                $('#refAge').val(data.trim())
            }
        });
    });
    
</script>
<script type="text/javascript">
    $(document).ready(function (){

        //validate password and confirm password
        $('#cpass').keyup(function(){
            if($(this).val()== $('#pass').val()){
                $('#checkpass').html('Matching!!!').css('color', 'green');
            }else{
                document.getElementById('register_btn').disabled = true ;
                $('#checkpass').html('not matching with password!!!').css('color', 'red');
            }
        });

        //validate age;
        $('#age').keyup(function(){
            var reg = /^[1-9]{0,3}$/;
            if(!(reg.test($(this).val()))){
                document.getElementById('register_btn').disabled = true ;
                $('#checkage').html('Please Enter a Valid Age').css('color', 'red');
            }else{
                $('#checkage').html('');
            }
        });

        //validate phone number
        $('#tel').keyup(function(){
            var reg1 = /^[0-9]{10}$/;
            if((reg1.test($(this).val()))){
                $('#checktel').html('');
            }else if(reg1.test($(this).val()=== "")){
                $('#checktel').html('Please Enter a Contact Number');
                document.getElementById('register_btn').disabled = true ;
            }else{
                document.getElementById('register_btn').disabled = true ;
                $('#checktel').html('Please Enter a Valid Contact Number').css('color', 'red');
            }
        });
        $('#register_btn').click(function(){
            var pname =  $('#pname').val();
            var page =  $('#age').val();
            var pdob =  $('#dob').val();
            var ptel =  $('#tel').val();
            var plan =  $( "#lan option:selected" ).val();
            var psch =  $('#sch').val();
            var pgur =  $('#gur').val();
            var prel =  $('#rel').val();
            var pref =  $('#ref').val();
            var ppass =  $('#pass').val();
            var pdiv =  $('#div').val();
            var pdate =  $('#date').val();
            var paddre =  $('#address').val();
            var pgen =  $( "#gender option:selected" ).val();

            $.ajax({
                type: "post",
                url: "http://[::1]/project/Group-07/Healthy_life/Register/reg_patient/",
                cache: false,
                data: {regbtn: "regbtn",pname:pname,age:page,dob:pdob,tel:ptel,lan:plan,gender:pgen,sch:psch,address:paddre,gur:pgur,rel:prel,ref:pref,pass:ppass,div:pdiv,date:pdate},
                success: function (data) {
                    if(data){
                        $('#pname').val("");
                        $('#age').val("");
                        $('#dob').val("");
                        $('#tel').val("");
                        $('#lan').val("");
                        $('#sch').val("");
                        $('#gur').val("");
                        $('#rel').val("");
                        $('#ref').val("");
                        $('#pass').val("");
                        $('#div').val("");
                        $('#date').val("");
                        $('#address').val("");
                        $('#cpass').val("");
                        $('#messagereg').html('Successfully Registered!!!').css('color','green');
                        setTimeout(function() {
                            $("#messagereg").hide('blind', {}, 500)
                        }, 5000);
                        setTimeout(function() {
                            $("#checkpass").hide('blind', {}, 0)
                        }, 0);
                        location.reload();
                    }else{
                        $('#pname').val("");
                        $('#age').val("");
                        $('#dob').val("");
                        $('#tel').val("");
                        $('#lan').val("");
                        $('#sch').val("");
                        $('#gur').val("");
                        $('#rel').val("");
                        $('#ref').val("");
                        $('#pass').val("");
                        $('#div').val("");
                        $('#date').val("");
                        $('#address').val("");
                        $('#cpass').val("");
                        $('#messagereg').html('Error occuered while registering .Please Try Again!!!').css('color','red');
                        setTimeout(function() {
                            $("#messagereg").hide('blind', {}, 500)
                        }, 5000);
                        setTimeout(function() {
                            $("#checkpass").hide('blind', {}, 0);
                        }, 0);
                        location.reload();
                    }
                }

            });

        });

    });


</script>
<script>
    $(document).ready(function (){
        setInterval(req, 10);
    });
    
    function req(){
        if($('#pname').val()&& $('#age').val()&& $('#dob').val()&& $('#tel').val()&&$('#lan').val()&&$('#sch').val()&&$('#gur').val()&&$('#rel').val()&&$('#ref').val()&&$('#pass').val()&&$('#div').val()&&$('#date').val()&& $('#address').val()&& $('#cpass').val()){
            document.getElementById('register_btn').disabled = false ;
        }else{
            document.getElementById('register_btn').disabled = true ;
        }
    }
</script>
<!--/section-->