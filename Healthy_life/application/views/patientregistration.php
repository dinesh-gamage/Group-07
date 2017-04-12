<div class="hl-float opasity50">
    <span class="vertical-text-box" >
        <h6 class="vertical-text">Patient registration</h6>
    </span>
</div>
<!--a href="#top" ><i class="hl-float-top fa fa-arrow-circle-up" style="color: #397df7;" ></i></a-->
<div id="about" class="about-main-block">
<div class="container">

    
    <div class="col-md-3"></div>                
                        <div class="col-md-6">
                            <div class="section">
                                <h2 class="section-heading text-center"><span>Patient </span> Registration</h2> <hr/>             
                            </div> 
                        <div>
                            <!--div class="book-top-bar text-center">
                                <span><i class="flaticon-notes hidden-xs"></i>Register Now</span>
                            </div-->
                            <form class="book-form" method="post" action="http://thegenius.co/lamadic-html/version1/index-appointment.php">
                                <div class="form-group">                   
                                    <input type="text" class="form-control" id="uname" name="uname" placeholder="Enter Your User Name/ID" required>
                                </div>
                                <div class="form-group">                   
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" required>
                                </div>
                                <div class="form-group">                   
                                    <input type="password" class="form-control" id="password1" name="password1" placeholder="Retype your Password" required>
                                </div>
                                
                                <div class = "form-group">
                                   <label for="meeting">Registration Date : </label><input id="meeting" name = "meeting" type="date" />
                                </div>
                                <textarea class="form-control" name="address" rows="2" placeholder="Address"></textarea>
                                 <div class="form-group">                   
                                    <input type="text" class="form-control" id="age" name="age" placeholder="Age" required>
                                </div>  

                                <div class="form-group select" required>
                                    <select>
                                        <option value="" name="Gender">Gender</option>
                                        <option value="doc1" name="Gender">Male</option>
                                        <option value="doc1" name="Gender">Female</option>
                                        
                                    </select>
                                </div>
                               
                                 <div class = "form-group">
                                   <label for="meeting">Date of birth</label><input id="meeting" name="meeting" type="date" />
                                </div>
                                <div class="form-group">                   
                                    <input type="text" class="form-control" id="Guardian name" name="Guardian name" placeholder="Guardian name" required>
                                </div>
                               
                                <div class="form-group select" required>
                                    <select>
                                        <option value="" name="Guardian ">Guardian</option>
                                        <option value="cli1" name="Guardian">Mother</option>
                                        <option value="cli2" name="Guardian">Father</option>
                                        <option value="cli3" name="Guardian">Guardian</option>
                                        
                                    </select>
                                </div>
                                 <div class="form-group">                   
                                    <input type="text" class="form-control" id="Telephone number" name="Telephone number" placeholder="Telephone number" required>
                                </div>
                                <div class="form-group">                   
                                    <input type="text" class="form-control" id="language" name="language" placeholder="language" required>
                                </div>
                                <div class="form-group select" required>
                                    <select>
                                        <option value="" name="referedby ">refered by</option>
                                        <option value="cli1" name="referedby">Doctor1</option>
                                        <option value="cli2" name="referedby">Doctor2</option>
                                        <option value="cli3" name="referedby">Doctor3</option>
                                        
                                    </select>
                                </div>
                                 <div class="form-group">                   
                                    <input type="text" class="form-control" id="school" name="school" placeholder="school" required>
                                </div>
                                 <div class="form-group">                   
                                    <input type="text" class="form-control" id="division" name="division" placeholder="division" required>
                                </div>


                                
                                

                                <!--div class="form-group">                   
                                    <input type="text" class="form-control date-pick" id="appointmentdate" name="appointmentdate" placeholder="Appointment Date" required>
                                </div-->

                                                
                                <button type="submit" class="btn btn-default"> <a href="<?php echo base_url()."patientregistration"?>"></a>Register</button>
                               

                            </form> 
                        </div>
                    </div>
                
                </div>
            </div>

