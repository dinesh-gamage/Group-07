<?php
        if (isset($this->session->userdata['logged_in'])) 
        {
            $username = ($this->session->userdata['logged_in']['username']);
            $email = ($this->session->userdata['logged_in']['email']);
            $name = ($this->session->userdata['logged_in']['name']);
            $picture = ($this->session->userdata['logged_in']['picture']);
            $status = ($this->session->userdata['logged_in']['status']);
            $doctorID = ($this->session->userdata['logged_in']['doctorId']);
            
            if($status != 'Doctor' && $status != 'Admin' ){
                redirect('/Login');
            }
        } else{
            redirect('/Login');
        }
    ?>



<section class="wrapper">
    <div class="contentContainer">
    <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
<!--                    <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>-->
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="<?php echo base_url() . "DoctorView" ?>">Home</a></li>
                    <li><i class="fa fa-laptop"></i>All Patients</li>	
                    
                </ol>
                
            </div>  
        </div>
        <div class="row">
          <div class="col-lg-4 col-lg-offset-8">
              <div class="searchDiv">
                <div class="input-group">
                    <input type="text" class="form-control col-sm-11" placeholder="Enter Patient ID" name="patientSearch" id="patientSearch" />
                    <div class="input-group-btn">
                        <button class="btn btn-default" id="searchButton" type="submit" >
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
                
            </div>  
          </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <div class="col-sm-2 col-icon-box " onclick="viewNewPatients()" >
                    <img src="<?php echo base_url()."asserts/images/icons/new_patient.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
                    <div class="overlay">
                        <div class="text">New Patient</div>
                    </div>
                </div>
                <div class="col-sm-2 col-icon-box "  onclick="viewProPatients()">
                    <img src="<?php echo base_url()."asserts/images/icons/progressing_patient.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
                    <div class="overlay">
                        <div class="text">Progressing<br> Patients</div>
                    </div>
                </div>
                <div class="col-sm-2 col-icon-box "  onclick="viewDisPatients()">
                    <img src="<?php echo base_url()."asserts/images/icons/dischargd_patients.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
                    <div class="overlay">
                        <div class="text">Discharged<br> Patients</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="white_back container" style="overflow-y:auto; height: 527px;">
                    <div id="searchResults">
                        <div class="text-center"><span style="color: red" id="searchNoResults"></span> </div>
                    </div>
                    <br/>
                    <hr/>
                    <div id="newPatientList">
                        <h4 class="text-center">New Patients</h4><hr>
                         <?php
                            foreach($patients as $patient):
                                if ($patient->status == '0'){
                        ?>

                            <form name="myform" id="myform" action="<?php echo base_url() ?>/DoctorView/getPatient/" method="post">
                                <input type="hidden" name="patientstatus"  value="<?php echo $patient->status; ?>" />
                                <input type="hidden" name="patientid" id="id" value="<?php echo $patient->patient_id; ?>" />
                                <div class="patient">
                                    <div class="col-lg-9">
                                        <?php 
                                            echo "<div class=\"col-sm-7 padding10top\">";
                                                echo $patient->patient_name;
                                            echo "</div>";
                                            //echo str_repeat("&nbsp;", 6); 
                                            echo "<div class=\"col-sm-5 padding10top\">";
                                                echo $patient->regitration_date;
                                            echo "</div>";
                                        ?>
                                    </div>
                                    <div class="col-lg-3">
                                        <button type="button" class="btn btn-info" onclick="javascript: submit()" >View</button>
                                    </div>
                                </div>                                    
                            </form>

                        <?php
                                }
                            endforeach;
                        ?>
                    </div>   
                    <div id="proPatientList" style="display: none" >
                        <h4 class="text-center">Progressing Patients</h4><hr>
                        <?php
                            foreach($patients as $patient):
                                if ($patient->status == '1'){
                        ?>

                            <form name="myform" id="myform" action="<?php echo base_url() ?>/DoctorView/getPatient/" method="post">
                                <input type="hidden" name="patientid" id="id" value="<?php echo $patient->patient_id; ?>" />
                                <div class="patient">
                                    <div class="col-lg-9">
                                        <?php 
                                            echo "<div class=\"col-sm-7 padding10top\">";
                                                echo $patient->patient_name;
                                            echo "</div>";
                                            //echo str_repeat("&nbsp;", 6); 
                                            echo "<div class=\"col-sm-5 padding10top\">";
                                                echo $patient->regitration_date;
                                            echo "</div>";
                                        ?>
                                    </div>
                                    <div class="col-lg-3">
                                        <button type="button" class="btn btn-success" onclick="javascript: submit()" >View</button>
                                    </div>
                                </div>                                    
                            </form>

                        <?php
                                }
                            endforeach;
                        ?>
                    </div>
                    
                    <div id="disPatientList" style="display: none" >
                        <h4 class="text-center">Discharged Patients</h4><hr>
                        <?php
                            foreach($patients as $patient):
                                if ($patient->status == '2'){
                        ?>

                            <form name="myform" id="myform" action="<?php echo base_url() ?>/DoctorView/getPatient/" method="post">
                                <input type="hidden" name="patientid" id="id" value="<?php echo $patient->patient_id; ?>" />
                                <div class="patient">
                                    <div class="col-lg-9">
                                        <?php 
                                            echo "<div class=\"col-sm-7 padding10top\">";
                                                echo $patient->patient_name;
                                            echo "</div>";
                                            //echo str_repeat("&nbsp;", 6); 
                                            echo "<div class=\"col-sm-5 padding10top\">";
                                                echo $patient->regitration_date;
                                            echo "</div>";
                                        ?>
                                    </div>
                                    <div class="col-lg-3">
                                        <button type="button" class="btn btn-default" onclick="javascript: submit()" >View</button>
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
<!-- paging -->
           
            
<!-- calendar -->
            
            
<!-- patients -->
            
            
            
            <!--calender -->
            <div class="col-lg-6">
               
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
                        echo form_open('DoctorView/add_data',$attri);?>
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
                                <input type="hidden" name="doctorName" value="<?php echo $doctorID; ?>" />
                          
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
                        echo form_open('DoctorView/edit_data',$attri);?>
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
            </div>
    <script src="<?php echo base_url() ?>scripts/fullcalendar/lib/moment.min.js"></script>
    <script src="<?php echo base_url() ?>scripts/fullcalendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url() ?>scripts/fullcalendar/gcal.js"></script>
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/bootstrap.min.js" ?>"></script>
	
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
			},
            
			eventDrop: function(event, delta, revertFunc) { // si changement de position
                
                   
				edit(event);

			},
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur
                
				edit(event);

	},
			events: [
			<?php foreach($events as $event): 
                if ($event->doctor_id == $doctorID){
			
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
			 url: 'http://[::1]/project/Group-07/NiceAdmin/DoctorView/edit_event',
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
    //knob
    $(function () {
        $(".knob").knob({
            'draw': function () {
                $(this.i).val(this.cv + '%')
            }
        })
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
    function viewNewPatients() {
        $("#newPatientList").show();  
        $("#proPatientList,#disPatientList").hide();   
    }
    function viewProPatients() {
        $("#proPatientList").show();
        $("#newPatientList,#disPatientList").hide(); 
    }
    function viewDisPatients() {
        $("#disPatientList").show();
        $("#newPatientList,#proPatientList").hide(); 
    }
    
</script>

<script type="text/javascript">
  $('#searchButton').click(function(){
      var search = $('#patientSearch').val();
      $.ajax({
         url: 'http://[::1]/project/Group-07/NiceAdmin/DoctorView/search',
         type: "POST",
         data: {searchitem:search},
         success: function(data) {
            if(data.trim() != "false"){
                $('#searchResults').html(data);
            }else{
                $('#searchNoResults').html("There are no patients with "+ search +" PatientId");
            }
         }
      });


  });

  
</script>
<!--/section-->