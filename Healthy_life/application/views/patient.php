<?php 

if (isset($this->session->userdata['logged_in'])) {
    $username = ($this->session->userdata['logged_in']['username']);
}


?>
<div id="about" class="about-main-block">
    <div class="container">
        <div class = "col-lg-9">
            <p> you are loggined as <?php echo $username; ?></p>
            <br>
            <a href="<?php echo base_url()."user_authentication/logout" ?>">logout</a>
        </div>
        <div>
            <?php 
                if ($patients) {
                    foreach ($patients as $row) {
                        echo $row->id;
                        echo "  ";
                        echo $row->clinic;
                        echo "<br/>";
                    }
                }

            ?>
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
                    <form class="book-form" method="post" action="<?php echo base_url() ?>index.php/patient/index">
                     
                        <!-- <div class="form-group select" required>
                            <select name="clinic">
                                <option value="">Select a clinic </option>
                                <option value="cl2">clinic 2</option>
                                <option value="cl3">clinic 3</option>
                                <option value="cl4">clinic 4</option>
                                <option value="cl5">clinic 5</option>
                                <option value="cl6">clinic 6</option>
                            </select>
                            <select name="doctor">
                                <option value="">Select a doctor </option>
                                <option value="doc2">doctor 2</option>
                                <option value="doc3">doctor 3</option>
                                <option value="doc4">doctor 4</option>
                                <option value="doc5">doctor 5</option>
                                <option value="doc6">doctor 6</option>
                            </select>
                        </div> -->

                        <div class="form-group">
                        <label>clinic</label>
                        <input type="text" name="clinic" list="clinic">
                        <datalist id="clinic">
                            <option value="clinic 2">
                            <option value="clinic 3">
                            <option value="clinic 4">
                            <option value="clinic 5">
                            <option value="clinic 6">
                        </datalist>

                        <label>doctor</label>
                        <input type="text" name="doctor" list="doctor">
                        <datalist id="doctor">
                            <option value="doctor 2">
                            <option value="doctor 3">
                            <option value="doctor 4">
                            <option value="doctor 5">
                            <option value="doctor 6">
                        </datalist>
                        </div>



                        <!--div class="form-group">                   
                            <input type="text" class="form-control date-pick" id="appointmentdate" name="appointmentdate" placeholder="Appointment Date" required>
                        </div-->

                                      
                        <button type="submit" class="btn btn-default">Make appointment</button>
                        
                    </form>
                </div>
                <div id="cancelAppointment" class="tab-pane fade">
                    <form class="book-form" method="post" action="<?php echo base_url() ?>index.php/patient/delete">
                                                            
                                


                            


                                
                                <div class="form-group">
                                    

                                                      
                                    <input type="text" class="form-control" id="num" name="num" placeholder="appointment number" required>
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


  