<section class="wrapper" >
    <div class="contentContainer">
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
	    	<div class="col-lg-2">
	    		<div class="col-sm-2 col-icon-box "  onclick="doctors()">
	                    <img src="<?php echo base_url()."asserts/images/icons/doctor.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
	                    <div class="overlay">
	                        <div class="text">Doctors</div>
	                    </div>
	                </div>
	                <div class="col-sm-2 col-icon-box "  onclick="nurse()">
	                    <img src="<?php echo base_url()."asserts/images/icons/nurse.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
	                    <div class="overlay">
	                        <div class="text">Nurse</div>
	                    </div>
	                </div>
	                <div class="col-sm-2 col-icon-box " onclick="register()">
	                    <img src="<?php echo base_url()."asserts/images/icons/register.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
	                    <div class="overlay">
	                        <div class="text">Register</div>
	                    </div>
	                </div>
	    	</div>
		    <div class="col-lg-6">
		    	<div id="viewDoctor"  >
                    <div class="white_back container" style="overflow-y:auto; height: 490px";>
                    	<h4 class="text-center">Doctors</h4><hr>
                    	
                    		<div class="table-responsive" >
				                <table class="table "  >
            						<thead>
            							<th></th>
            							<th>Name</th>
            							<th>Speciality</th>
            							<th>Email</th>
            							<th></th>
            						</thead>
            						<tbody>
		                 				<?php 
		                 					
		                 					$i = 0;
		                 					foreach ($doctors as $doc):
		                 				?>
		                 				<tr id="<?php echo $i;?>">
		                 				<td><input id="doc_id<?php echo $i;?>"   value="<?php echo $doc->doctor_id?>" hidden/></td>
		                 				<td><?php echo $doc->doc_name?></td>
		                 				<td><?php echo $doc->speciality?></td>
		                 				<td><?php echo $doc->email?></td>
		                 				<td>
		                 					<button class="btn btn-default" onclick="viewDoctor('<?php echo $doc->doctor_id;?>')">View</button>
		                 					<button class="btn btn-danger " onclick="delDoctor('<?php echo $i;?>')" id="deld">Delete</button>
		                 				</td>
		                 				</tr>
			               				<?php 
			               					$i++;
			               				endforeach; ?>
			               				
			               			</tbody>
			               		</table>	
			               	</div>
	                	
                    </div>
                </div>
                
                <div id="viewNurse" style="display: none" >
                     <div class="white_back container" style="overflow-y:auto; height: 490px";>
                     	<h4 class="text-center">Nurse</h4><hr>
                     	<div class="table-responsive" >
				                <table class="table "  >
            						<thead>
            							<th></th>
            							<th>Name</th>
            							<th>Email</th>
            							<th></th>
            						</thead>
            						<tbody>
		                 				<?php 
		                 					$j=0;
		                 					foreach ($nurse as $nur):
		                 					
		                 				?>
		                 				<tr id="u<?php echo $j;?>">
		                 				<td><input id="nur_id<?php echo $j;?>" value="<?php echo $nur->nurse_id?>" hidden/></td>
		                 				<td><?php echo $nur->nurse_name?></td>
		                 				<td><?php echo $nur->email?></td>
		                 				<td>
		                 					<button class="btn btn-default"onclick="viewNurse('<?php echo $nur->nurse_id;?>')">View</button>
		                 					<button class="btn btn-danger " onclick="delNurse('<?php echo $j;?>')" id="deln">Delete</button>
		                 				</td>
		                 				</tr>
			               				<?php 
			               					$j++;
			               				endforeach; ?>
			               				
			               			</tbody>
			               		</table>	
			               	</div>
                    </div>
                </div>   


                <div id="register" style="display: none" >
                    <div class="white_back container">
                    	<ul class="nav nav-tabs" role="tablist">
					    <li role="presentation" class="active"><a href="#doctor" aria-controls="doctor" role="tab" data-toggle="tab">Doctor </a></li>
					    <li role="presentation"><a href="#nurse" aria-controls="nurse" role="tab" data-toggle="tab">Nurse</a></li>
					  	</ul>
					  	<div class="tab-content">
  							<div role="tabpanel" class="tab-pane fade in active" id="doctor">
		                    	<div id="main">
						            <div id="login" style="height: 408px;">
						                <h4 class="text-center">Registration Form</h4>
						                <hr/>
						                <?php
						                  $name = array(
						                      'id'=>'myname',
						                      'class'=>'form-control text-center',
						                      'name'=>'myname',
						                      'required'=>'required',
						                      'placeholder'=>'Doctor name'
						                  );
						                  $spec = array(
						                      'id'=>'spec',
						                      'class'=>'form-control text-center',
						                      'name'=>'spec',
						                      'placeholder'=>'Speciality',
						                      'required'=>'required'
						                  );
						                  $contact = array(
						                      'id'=>'contact',
						                      'class'=>'form-control text-center',
						                      'placeholder'=>'Contact',
						                      'name'=>'contact',
						                      'required'=>'required'
						                  );$username = array(
						                      'id'=>'username',
						                      'class'=>'form-control text-center',
						                      'placeholder'=>'Username',
						                      'name'=>'username',
						                      'required'=>'required'
						                  );
						                  $password = array(
						                      'id'=>'password',
						                      'class'=>'form-control text-center' ,
						                      'placeholder'=>'Password',
						                      'name'=>'password',
						                      'required'=>'required'
						                  );
						                
						                    echo "<div class='error_msg'>";
						                    echo validation_errors();
						                    echo "</div>";
						                    echo form_open_multipart('user_authentication/new_user_registration');


						                    

						                    echo "<div class='col-lg-10 col-lg-offset-1'>";			                  
						                    echo form_input($name);
						                    echo "</div>";
						                    echo"<br/>";
						                    echo"<br/>";

						                    echo "<div class='col-lg-10 col-lg-offset-1'>";
											echo form_input($spec);
											echo "</div>";
						                   	echo"<br/>";
						                   	echo"<br/>";
						                   	echo "<div class='col-lg-10 col-lg-offset-1'>";
						                    echo form_input($contact);
						                    echo "</div>";
						                    echo"<br/>";
						                    echo"<br/>";
						                    echo "<div id='checktel' class='text-center'></div>";
						                    
						                    echo "<div class='col-lg-10 col-lg-offset-1'>";
						                    echo form_input($username);
						                    echo "</div>";
						                     
						                
						                    echo"<br/>";
						                    echo"<br/>";
						                    echo "<div id='err' class='text-center'></div>";  
						                    $data = array(
						                        'type' => 'email',
						                        'class'=>'form-control text-center',
						                        'name' => 'email_value',
						                        'placeholder'=>'Email',
						                        'required'=>'required'
						                    );
						                    $btn = array(
						                        'type' => 'submit',
						                        'class'=>'btn btn-info',
						                        'value'=>'Register',
						                        'style'=>'float:right;'
						                    );

						                    echo "<div class='col-lg-10 col-lg-offset-1'>";
						                    echo form_input($data);
						                    echo "</div>";
						                    echo"<br/>";	
						                    echo"<br/>";
						                    echo "<div class='col-lg-10 col-lg-offset-1'>";			                  
						                    echo form_password($password);
						                    echo "</div>";
						                    echo"<br/>";
						                    echo "<div class='col-lg-10 col-lg-offset-1'>";
						                    echo form_label('Image : ');
						                    echo"<br/>";
						                    $data = array(
						                        'type' => 'file',
						                        'name' => 'picture'
						                    );
						                    echo form_input($data);
						                   echo "</div>";
						                    //echo $error; // Error Message will show up here -->
						                    echo"<br/>";
						                    echo"<br/>";
						                    echo "<div class='col-lg-10 col-lg-offset-1'>";
						                    echo form_submit($btn);
						                    echo "</div>";
						                    echo form_close();
						                ?>
						               <!--  <a href="<?php echo base_url() ?> ">For Login Click Here</a> -->
						            </div>
						        </div>
				        	</div>
				        	 <div role="tabpanel" class="tab-pane fade" id="nurse">
				        	 	<div id="login" style="height: 408px;" >
				        	 		<h4 class="text-center">Registration Form</h4>
						                <hr/>
						                <?php
						                 
						                  $name = array(
						                      'id'=>'myname',
						                      'class'=>'form-control text-center',
						                      'name'=>'nurname',
						                      'required'=>'required',
						                      'placeholder'=>'Nurse name'
						                  );
						                 
						                  $contact = array(
						                      'id'=>'nurcontact',
						                      'class'=>'form-control text-center',
						                      'placeholder'=>'Contact',
						                      'name'=>'nurcontact',
						                      'required'=>'required'
						                  );$username = array(
						                      'id'=>'nurusername',
						                      'class'=>'form-control text-center',
						                      'placeholder'=>'Username',
						                      'name'=>'nurusername',
						                      'required'=>'required'
						                  );
						                  $password = array(
						                      'id'=>'password',
						                      'class'=>'form-control text-center' ,
						                      'placeholder'=>'Password',
						                      'name'=>'nurpassword',
						                      'required'=>'required'
						                  );
						                
						                    echo "<div class='error_msg'>";
						                    echo validation_errors();
						                    echo "</div>";
						                    echo form_open_multipart('user_authentication/new_nur_registration');


						                    

						                    echo "<div class='col-lg-10 col-lg-offset-1'>";			                  
						                    echo form_input($name);
						                    echo "</div>";
						                    echo"<br/>";
						                    echo"<br/>";

						                   	echo "<div class='col-lg-10 col-lg-offset-1'>";
						                    echo form_input($contact);
						                    echo "</div>";
						                    echo"<br/>";
						                    echo"<br/>";
						                    echo "<div id='checktelnur' class='text-center'></div>";
						                    
						                    echo "<div class='col-lg-10 col-lg-offset-1'>";
						                    echo form_input($username);
						                    echo "</div>";
						                     
						                
						                    echo"<br/>";
						                    echo"<br/>";
						                    echo "<div id='errnur' class='text-center'></div>";  
						                    $data = array(
						                        'type' => 'email',
						                        'class'=>'form-control text-center',
						                        'name' => 'nuremail_value',
						                        'placeholder'=>'Email',
						                        'required'=>'required'
						                    );
						                    $btn = array(
						                        'type' => 'submit',
						                        'class'=>'btn btn-info',
						                        'value'=>'Register',
						                        'style'=>'float:right;'
						                    );

						                    echo "<div class='col-lg-10 col-lg-offset-1'>";
						                    echo form_input($data);
						                    echo "</div>";
						                    echo"<br/>";	
						                    echo"<br/>";
						                    echo "<div class='col-lg-10 col-lg-offset-1'>";			                  
						                    echo form_password($password);
						                    echo "</div>";
						                    echo"<br/>";
						                    echo "<div class='col-lg-10 col-lg-offset-1'>";
						                    echo form_label('Image : ');
						                    echo"<br/>";
						                    $data = array(
						                        'type' => 'file',
						                        'name' => 'nurpicture'
						                    );
						                    echo form_input($data);
						                   echo "</div>";
						                    //echo $error; // Error Message will show up here -->
						                    echo"<br/>";
						                    echo"<br/>";
						                    echo "<div class='col-lg-10 col-lg-offset-1'>";
						                    echo form_submit($btn);
						                    echo "</div>";
						                    echo form_close();
						                ?>

						            </div>
				        	 </div>

				        </div>
                    </div>
                </div>   

		    </div>



		    <div class="clo-lg-4">
		    	<div class="row">
			    	
	                <div id="docdetails" class="col-sm-4" >
	                <div style="padding-top: 10px;">
                    <div class="panel " style="height:490px; ">
                        <div class="panel-heading">
                          <h3 class="panel-title" id="dtitle"></h3>
                        </div>
                        <div class="panel-body" style="height:450px;">
                          <div class="row">
                            
                            <div class=" col-md-12 col-lg-12 "> 
                            <div class="" style="height: 150px;" align="center"> <img alt="User Pic" style="height: 150px;" id="docimage" src="" class=" img-responsive"> </div>
                            <br/>
                              <table class="table table-user-information">
                                <tbody>
                                  <tr>
                                    <td >Username:  <span id="duser"></span></td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <td>Speciality:  <span id="dsep"></span></td>
                                    <td>'</td>
                                  </tr>
                                  <tr>
                                    <td>Contact Number:  <span id="dcon"></span></td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    
                                    <td>Email: <a href=""> <span id="demail"></span></a></td>
                                  </tr>
                                 		
                                </tbody>
                              </table>
                              
                              
                            </div>
                          </div>
                    	</div>   
	                   </div>

	                  </div>
	                </div>
	                <div id="nurdetails" style="display: none;" class="col-sm-4">
	                	<div style="padding-top: 10px;">
                    <div class="panel " style="height:490px; ">
                        <div class="panel-heading">
                          <h3 class="panel-title" id="ntitle"></h3>
                        </div>
                        <div class="panel-body" style="height:450px;">
                          <div class="row">
                            
                            <div class=" col-md-12 col-lg-12 "> 
                            <div class="" style="height: 150px;" align="center"> <img alt="User Pic" style="height: 150px;" id="nurimage" src="" class=" img-responsive"> </div>
                            <br/>
                              <table class="table table-user-information">
                                <tbody>
                                  <tr>
                                    <td >Username:  <span id="nuser"></span></td>
                                    <td></td>
                                  </tr>
                                 
                                  <tr>
                                    <td>Contact Number:  <span id="ncon"></span></td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    
                                    <td>Email: <a href=""> <span id="nemail"></span></a></td>
                                  </tr>
                                 		
                                </tbody>
                              </table>
                              
                              
                            </div>
                          </div>
                    	</div>   
	                   </div>

	                  </div>

	             

	                </div>
	               </div> 
                </div>
               
		 </div>


	    
    </div>
</section>  
<script type="text/javascript">
	function doctors() {
        $("#viewDoctor, #docdetails").show();  
        $("#viewNurse,#register, #nurdetails").hide();   
    }
    function nurse() {
        $("#viewNurse,#nurdetails").show();
        $("#viewDoctor,#register,#docdetails").hide(); 
    }
    function register() {
        $("#register").show();
        $("#viewDoctor,#viewNurse,#docdetails,#nurdetails").hide();  
    }

    $('#contact').keyup(function(){
        var reg1 = /^[0-9]{10}$/;
        if((reg1.test($(this).val()))){
            $('#checktel').html('');
        }else{
            if($(this).val()!==""){
                $('#checktel').html('Please Enter a Valid Contact Number').css('color', 'red');
            }else{
                $('#checktel').html('');
            }
        }
    });

     $('#username').keyup(function(){
        var user = $('#username').val();
        $.ajax({
            type: "post",
            url: "http://[::1]/project/Group-07/NiceAdmin/Login/checkUsername/",
            cache: false,
            data: {cuser:user},
            success: function (data) {
                if(data){
                    $('#err').html('Username Exsist').css('color','red');
                }else{
                    $('#err').html('');
                }
            }
        });
     });

     function delDoctor(id){
     	if(confirm("Are you sure you want to delete these items")){
     		var doc = $('#doc_id'+id).val();
     		$.ajax({
            type: "post",
            url: "http://[::1]/project/Group-07/NiceAdmin/DoctorView/deleteDoctor/",
            cache: false,
            data: {deld:doc},
            success: function (data) {
                if(data){
                     $('tr#'+id+'').fadeOut('slow');
                }else{
                    
                }
            }
        });
     		
     	}
     }


      function delNurse(id){
     	if(confirm("Are you sure you want to delete these items")){
     		var nur = $('#nur_id'+id).val();
     		$.ajax({
	            type: "post",
	            url: "http://[::1]/project/Group-07/NiceAdmin/DoctorView/deleteNurse/",
	            cache: false,
	            data: {deln:nur},
	            success: function (data) {
	            	// alert(data);
	                if(data){
	                     $('tr#'+'u'+id+'').fadeOut('slow');
	                }else{
	                    
	             	}
            	}
        	});
     		
     }
     }
     function viewDoctor(docId){
     	one = [];
     	$.ajax({
	            type: "post",
	            url: "http://[::1]/project/Group-07/NiceAdmin/DoctorView/viewDoc/",
	            cache: false,
	            data: {viewd:docId},
	            success: function (data) {
	            	var array = [];
	            	var two = [];
                    var x = data.split(']');
                    for(var i=0 ; i<x.length-1;i++){
                        two[i] = JSON.parse(x[i]+']');
                    }
                    for(var z = 0;z<two.length;z++){
                       	for(var i =0;i<two[z].length;i++) {
                       		array[i] =  two[z][i].doc_name;
                       		array[i+1] =  two[z][i].user_name;
                       		array[i+2] =  two[z][i].speciality;
                       		array[i+3] =  two[z][i].email;
                       		array[i+4] =  two[z][i].telephone;
                       		array[i+5] =  two[z][i].doc_img;
                       	}
                    }	
                    $('#dtitle').html(array[0]);
                   	$('#duser').html(array[1]);
                   	$('#dsep').html(array[2]);
                   	$('#demail').html(array[3]);
                   	$('#dcon').html(array[4]);
                  
                   	$('#docimage').attr('src','http://[::1]/project/Group-07/NiceAdmin/'+array[5]+'');
	            	// one = data;
	            	// for(i=0;i<one.length;i++){
	            	// 		alert(one[i]);
	            	// }
	            	// $('#docdetails').html('');
	            	// $('#docdetails').html(data);
            	}
        	});
     }
     function viewNurse(nurId){
     	$.ajax({
	            type: "post",
	            url: "http://[::1]/project/Group-07/NiceAdmin/DoctorView/viewNur/",
	            cache: false,
	            data: {viewn:nurId},
	            success: function (data) {
	            	var array = [];
	            	var two = [];
                    var x = data.split(']');
                    for(var i=0 ; i<x.length-1;i++){
                        two[i] = JSON.parse(x[i]+']');
                    }
                    for(var z = 0;z<two.length;z++){
                       	for(var i =0;i<two[z].length;i++) {
                       		array[i] =  two[z][i].nurse_name;
                       		array[i+1] =  two[z][i].user_name;
                       		array[i+2] =  two[z][i].email;
                       		array[i+3] =  two[z][i].telephone;
                       		array[i+4] =  two[z][i].nur_image;
                       	}
                    }	
                    $('#ntitle').html(array[0]);
                   	$('#nuser').html(array[1]);
                   	$('#nemail').html(array[2]);
                   	$('#ncon').html(array[3]);
                   	$('#nurimage').attr('src','http://[::1]/project/Group-07/NiceAdmin/'+array[4]+'');
            	}
        	});
     }
     $('#nurcontact').keyup(function(){
        var reg1 = /^[0-9]{10}$/;
        if((reg1.test($(this).val()))){
            $('#checktel').html('');
        }else{
            if($(this).val()!==""){
                $('#checktelnur').html('Please Enter a Valid Contact Number').css('color', 'red');
            }else{
                $('#checktelnur').html('');
            }
        }
    });

     $('#nurusername').keyup(function(){
        var nur = $('#nurusername').val();
        $.ajax({
            type: "post",
            url: "http://[::1]/project/Group-07/NiceAdmin/Login/checkUsernamenur/",
            cache: false,
            data: {cnur:nur},
            success: function (data) {
                if(data){
                    $('#errnur').html('Username Exsist').css('color','red');
                }else{
                    $('#errnur').html('');
                }
            }
        });
     });


</script>  
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>