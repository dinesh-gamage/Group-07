<div id="about" class="about-main-block">
    <div class="container">
        <div class = "col-lg-9">
            <p> you are loggined as </p>
        </div>


        <div class="col-lg-3 col-sm-12">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a data-toggle="pill" href="#makeAppointment">Make Appointment</a></li>
                <li><a data-toggle="pill" href="#cancelAppointment">Cancel Appointment</a></li>
                <li><a data-toggle="pill" href="#viewHistory">View History</a></li>
                
            </ul>
        </div>
        <div class="col-lg-9 col-sm-12 ">

            <div class="tab-content">
                <div id="makeAppointment" class="tab-pane fade in active">
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
                <div id="cancelAppointment" class="tab-pane fade">
                    <form class="book-form" method="post" action="http://thegenius.co/lamadic-html/version1/index-appointment.php">
                                
                                
                                


                                <!--div class="form-group">                   
                                    <input type="text" class="form-control date-pick" id="appointmentdate" name="appointmentdate" placeholder="Appointment Date" required>
                                </div-->

                                
                                <div class="form-group">                   
                                    <input type="text" class="form-control" id="timeslot" name="timeslot" placeholder="appointment number" required>
                                </div>                
                                
                                <button  type="submit " class="btn btn-default"> Delete  </button>
                                
                    </form> 
                </div>
                <div id="viewHistory" class="tab-pane fade">
                    <div class="col-md-6">
                             
                    </div>
                </div>
                
            </div>
        </div>


    </div>
</div>


  