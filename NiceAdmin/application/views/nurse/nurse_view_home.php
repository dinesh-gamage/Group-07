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
                    <div class="form-group" style="float:right ;margin-top: -8px;" >
                        <li >
                            <select class="form-control" id="doc">
                                <?php foreach($doctor as $doc):?>
                                <option value="<?php echo $doc->doctor_id;?>"><?php echo $doc->doc_name;?></option>
                                <?php endforeach;?>
                            </select>
                        </li> 
                    </div>
                </ol>
            </div>
        </div>

        <div class="row">
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


        </div>

    <script src="<?php echo base_url() ?>scripts/fullcalendar/lib/moment.min.js"></script>
    <script src="<?php echo base_url() ?>scripts/fullcalendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url() ?>scripts/fullcalendar/gcal.js"></script>
    
    <!-- jQuery Version 1.11.1 -->
<!--    <script src="js/jquery.js"></script>

     Bootstrap Core JavaScript 
    <script src="js/bootstrap.min.js"></script>-->
	
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
			 url: 'http://[::1]/project/Group-07/nurse/NurseView/edit_event',
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
    
    
   
    $(document).ready(function (){
        $('#doc').on('change',function(){
            var i = $( "#doc option:selected" ).attr('value');
            alert(i);
            
            $.ajax({
                url: 'http://[::1]/new4/NiceAdmin/NurseView/index',
                type: "POST",
                data: {'user':i},
                success: function(data) {
                    alert(data);
                                    
                                        
                                        
                }
            });
            
        });
    });
    


</script>
            
            
           
    </div>
</section>

<script>
    
    function viewNewPatients() {
        $("#newPatientList").show();  
        $("#proPatientList").hide();   
    }
    function viewProPatients() {
        $("#proPatientList").show();
        $("#newPatientList").hide(); 
    }
</script>
<!--/section-->