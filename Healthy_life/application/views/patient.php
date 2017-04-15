<div class="hl-float opasity50">
    <span class="vertical-text-box" >
        <h6 class="vertical-text">Patient </h6>
    </span>
</div>
<!--a href="#top" ><i class="hl-float-top fa fa-arrow-circle-up" style="color: #397df7;" ></i></a-->
<div id="about" class="about-main-block">
<div class="container">
    
    <div class="col-md-3"></div>                
                        <div class="col-md-6">
                            <div class="section">
                                <h2 class="section-heading text-center"><span>your </span> profile</h2> <hr/>             
                            </div> 
                        <div>
                            <!--div class="book-top-bar text-center">
                                <span><i class="flaticon-notes hidden-xs"></i>Register Now</span>
                            </div-->
                            <form class="book-form" method="post" action="http://thegenius.co/lamadic-html/version1/index-appointment.php">
                                
                                
                                <div class="form-group select" required>
                                    <select>
                                        <option value="" name="clinic">Select a clinic </option>
                                        <option value="doc1" name="clinic">clinic 2</option>
                                        <option value="doc1" name="clinic">clinic 3</option>
                                        <option value="doc1" name="clinic">clinic 4</option>
                                        <option value="doc1" name="clinic">clinic 5</option>
                                        <option value="doc1" name="clinic">clinic 6</option>
                                    </select>
                                </div>
                                <div class="form-group select" required>
                                    <select>
                                        <option value="" name="doctor">Select a doctor </option>
                                        <option value="doc1" name="doctor">doctor 2</option>
                                        <option value="doc1" name="doctor">doctor 3</option>
                                        <option value="doc1" name="doctor">doctor 4</option>
                                        <option value="doc1" name="doctor">doctor 5</option>
                                        <option value="doc1" name="doctor">doctor 6</option>
                                    </select>
                                </div>


                                <!--div class="form-group">                   
                                    <input type="text" class="form-control date-pick" id="appointmentdate" name="appointmentdate" placeholder="Appointment Date" required>
                                </div-->

                                <textarea class="form-control" name="available" rows="2" placeholder="available time slot"></textarea>  
                                <div class="form-group">                   
                                    <input type="text" class="form-control" id="timeslot" name="timeslot" placeholder="your time slot" required>
                                </div>                
                                <button type="submit" class="btn btn-default"><a href="<?php echo base_url()."patient"?>"></a>Make appointment</button>
                                
                            </form>
                            
                        </div>
                    </div>
                
                </div>
                <div class="col-md-6">
                    <ul>
                        <li> <a href="<?php echo base_url()."delappointment"?>">Delete appointment</a> </li>
                        <li> <a href="<?php echo base_url()."history"?>">view history</a> </li>
                    </ul>
                </div>
            </div>

