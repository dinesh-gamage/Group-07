<div class="col-lg-3 col-sm-12">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a data-toggle="pill" href="#home">Make appointment</a></li>
        <li><a data-toggle="pill" href="#menu1">Cancel appointment</a></li>
        <li><a data-toggle="pill" href="#menu2">View History</a></li>
        <li><a data-toggle="pill" href="#menu3">View Prescriptions</a></li>
      </ul>
</div>
<div class="col-md-9 col-sm-12">  
      <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
          <div class="container">
    
    <div class="col-md-3"></div>                
                        <div class="col-md-6">
                            <div class="section">
                                <h2 class="section-heading text-center"><span>your </span> profile</h2> <hr/>             
                            </div> 
                        </div>
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
        </div>
        <div id="menu1" class="tab-pane fade">
          <h3>Menu 1</h3>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div id="menu2" class="tab-pane fade">
          <h3>Menu 2</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
        </div>
        <div id="menu3" class="tab-pane fade">
          <h3>Menu 3</h3>
          <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
      </div>
  </div>
<div id="about" class="about-main-block">

                 <script src="js/jquery.js"></script>

                         <!-- Bootstrap Core JavaScript -->
                         <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
                         <script>
                              $("#menu-toggle").click(function(e) {
                                    e.preventDefault();
                                  $("#wrapper").toggleClass("toggled");
                                   });
                          </script>

                <!--div class="col-md-6">
                    <ul>
                        <li> <a href="<?php echo base_url()."delappointment"?>">Delete appointment</a> </li>
                        <li> <a href="<?php echo base_url()."history"?>">view history</a> </li>
                    </ul>
                </div>!-->
            </div>

