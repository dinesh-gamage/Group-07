<div class="hl-float opasity50">
    <span class="vertical-text-box" >
        <h6 class="vertical-text">Login page</h6>
    </span>
</div>
<!--a href="#top" ><i class="hl-float-top fa fa-arrow-circle-up" style="color: #397df7;" ></i></a-->
<div id="about" class="about-main-block">
<div class="container">
<div class="col-md-12">
    
    <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="section">
                                <h2 class="section-heading text-center"><span>Log In</span> Here</h2>    <hr>            
                            </div> 
                        <div>
                            <!--div class="book-top-bar text-center">
                                <span><i class="flaticon-notes hidden-xs"></i>Register Now</span>
                            </div-->
                            <div class="book-form" >
                                <div class="form-group">                   
                                    <input type="text" class="form-control" id="uname" name="uname" placeholder="Enter Your User Name/ID" required>
                                </div>
                                <div class="form-group">                   
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" required>
                                </div>
                                                  
                                <button type="submit" id="loginbtn" class="btn btn-default">Log In</button>
                            </div>
                            <div id="messagelog" class="alert alert-danger text-center"></div>
                          <br>
                          <br>
                            
                        </div>
                    </div>
               
                        
                
                </div>

                <!--div class="col-md-12">

                    <div class="col-md-3"></div>                
                        <div class="col-md-6">
                            <div class="section">
                                <h2 class="section-heading text-center">Register</h2> <hr/>             
                            </div> 
                        <div>
                            <!--div class="book-top-bar text-center">
                                <span><i class="flaticon-notes hidden-xs"></i>Register Now</span>
                            </div->
                            <form class="book-form" method="post" action="http://thegenius.co/lamadic-html/version1/index-appointment.php">
                                <div class="form-group">                   
                                    <input type="text" class="form-control" id="pname" name="pname" placeholder="Patient Name" required>
                                </div>
                                <div class="form-group">                   
                                    <input type="text" class="form-control" id="age" name="age" placeholder="Patient Age" required>
                                </div>
                                <div class="form-group">                   
                                    <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Phone Number" required>
                                </div>
                                <div class="form-group">                   
                                    <input type="email" class="form-control" id="email" name="email"c placeholder="E-mail" required>
                                </div>
                                <div class="form-group select" required>
                                    <select>
                                        <option value="" name="doctor">Select A Doctor</option>
                                        <option value="doc1" name="doctor">Doctor 2</option>
                                        <option value="doc1" name="doctor">Doctor 3</option>
                                        <option value="doc1" name="doctor">Doctor 4</option>
                                        <option value="doc1" name="doctor">Doctor 5</option>
                                        <option value="doc1" name="doctor">Doctor 6</option>
                                    </select>
                                </div>

                                <!--div class="form-group">                   
                                    <input type="text" class="form-control date-pick" id="appointmentdate" name="appointmentdate" placeholder="Appointment Date" required>
                                </div->

                                <textarea class="form-control" name="description" rows="2" placeholder="Description"></textarea>                  
                                <button type="submit" class="btn btn-default">Submit Application</button>
                            </form> 
                        </div>
                    </div>
                
                </div-->
            </div>
    <script>
        $(document).ready(function (){
            $('#loginbtn').click(function(){
                var username = $('#uname').val();
                var pass = $('#password').val();
                $.ajax({
                    type:"post",
                    url:"http://[::1]/Third_Year_Project/Healthy_life/Login/check_patient",
                    data:{uname:username,password:pass},
                    success:function(data){
                        if(data=="true"){
                            window.location.href = "<?php echo base_url('Index1');?>";
                        }else{
                            $('#messagelog').html('Invalid username or password!');
                            $('#uname').val("");
                            $('#password').val("");
                        }
                    }
                });

            });


        });
    </script>
</div>

