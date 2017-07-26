<div id="about" class="about-main-block">
    <div class="container">
        <div class = "col-lg-9">
<<<<<<< HEAD
            <p> you are loggined as <?php echo $this->session->userdata['logged_in']['username']?> </p>
            <a href="<?php echo base_url()."user_authentication/logout" ?>"><img src='<?php echo base_url().'asserts/images/logout.jpg'?>'</a>
=======
<<<<<<< HEAD
            <p> you are loggined as <?php echo $this->session->userdata['logged_in']['username']?> </p>
            <a href="<?php echo base_url()."user_authentication/logout" ?>"><img src='<?php echo base_url().'asserts/images/logout.jpg'?>'</a>
=======
            <p> you are loggined as </p>
>>>>>>> 9cfd15dd57bf5b772d31f405ec96ee960ed1dd60
>>>>>>> ed316ac20ffec01f5e72e08ab142d0ffbfb2f6ef
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
<<<<<<< HEAD
                    <form class="book-form" method="post" action="<?php echo base_url()?>patient/index">
                     
                        <div class="form-group select" required>
                            <select name="clinic">
=======
<<<<<<< HEAD
                    <form class="book-form" method="post" action="<?php echo base_url()?>patient/index">
                     
                        <div class="form-group select" required>
                            <select name="clinic">
=======
                    <form class="book-form" method="post" action="http://thegenius.co/lamadic-html/version1/index-appointment.php">
                     
                        <div class="form-group select" required>
                            <select>
>>>>>>> 9cfd15dd57bf5b772d31f405ec96ee960ed1dd60
>>>>>>> ed316ac20ffec01f5e72e08ab142d0ffbfb2f6ef
                                <option value="" name="clinic">Select a clinic </option>
                                <option value="doc1" name="clinic">clinic 2</option>
                                <option value="doc1" name="clinic">clinic 3</option>
                                <option value="doc1" name="clinic">clinic 4</option>
                                <option value="doc1" name="clinic">clinic 5</option>
                                <option value="doc1" name="clinic">clinic 6</option>
                            </select>
                        </div>
                        <div class="form-group select" required>
<<<<<<< HEAD
                            <select name="doctor">
                                <option value="" name="doctor">Select a doctor </option>
                                <option value="doc1" name="doctor">Prasad Samaradiwakara</option>
                                <option value="doc1" name="doctor">Ranmini Shakya</option>
                                <option value="doc1" name="doctor">Udaya Ranawaka</option>
                                \
=======
<<<<<<< HEAD
                            <select name="doctor">
                                <option value="" name="doctor">Select a doctor </option>
                                <option value="doc1" name="doctor">Prasad Samaradiwakara</option>
                                <option value="doc1" name="doctor">Ranmini Shakya</option>
                                <option value="doc1" name="doctor">Udaya Ranawaka</option>
                                \
=======
                            <select>
                                <option value="" name="doctor">Select a doctor </option>
                                <option value="doc1" name="doctor">doctor 2</option>
                                <option value="doc1" name="doctor">doctor 3</option>
                                <option value="doc1" name="doctor">doctor 4</option>
                                <option value="doc1" name="doctor">doctor 5</option>
                                <option value="doc1" name="doctor">doctor 6</option>
>>>>>>> 9cfd15dd57bf5b772d31f405ec96ee960ed1dd60
>>>>>>> ed316ac20ffec01f5e72e08ab142d0ffbfb2f6ef
                            </select>
                        </div>


                        <!--div class="form-group">                   
                            <input type="text" class="form-control date-pick" id="appointmentdate" name="appointmentdate" placeholder="Appointment Date" required>
                        </div-->

<<<<<<< HEAD
                       
                                     
=======
<<<<<<< HEAD
                       
                                     
=======
                        <textarea class="form-control" name="available" rows="2" placeholder="available time slot"></textarea>  
                        <div class="form-group">                   
                            <input type="text" class="form-control" id="timeslot" name="timeslot" placeholder="your time slot" required>
                        </div>                
>>>>>>> 9cfd15dd57bf5b772d31f405ec96ee960ed1dd60
>>>>>>> ed316ac20ffec01f5e72e08ab142d0ffbfb2f6ef
                        <button type="submit" class="btn btn-default"><a href="<?php echo base_url()."patient"?>"></a>Make appointment</button>
                        
                    </form>
                </div>
                <div id="cancelAppointment" class="tab-pane fade">
<<<<<<< HEAD
                    <form class="book-form" method="post" action="<?php echo base_url()?>patient/delete">
=======
<<<<<<< HEAD
                    <form class="book-form" method="post" action="<?php echo base_url()?>patient/delete">
=======
                    <form class="book-form" method="post" action="http://thegenius.co/lamadic-html/version1/index-appointment.php">
>>>>>>> 9cfd15dd57bf5b772d31f405ec96ee960ed1dd60
>>>>>>> ed316ac20ffec01f5e72e08ab142d0ffbfb2f6ef
                                
                                
                                


                                <!--div class="form-group">                   
                                    <input type="text" class="form-control date-pick" id="appointmentdate" name="appointmentdate" placeholder="Appointment Date" required>
                                </div-->

                                
                                <div class="form-group">                   
<<<<<<< HEAD
                                    <input type="text" class="form-control" id="num" name="num" placeholder="appointment number" required>
=======
<<<<<<< HEAD
                                    <input type="text" class="form-control" id="num" name="num" placeholder="appointment number" required>
=======
                                    <input type="text" class="form-control" id="timeslot" name="timeslot" placeholder="appointment number" required>
>>>>>>> 9cfd15dd57bf5b772d31f405ec96ee960ed1dd60
>>>>>>> ed316ac20ffec01f5e72e08ab142d0ffbfb2f6ef
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


  