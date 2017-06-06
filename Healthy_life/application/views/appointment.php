<!--  page banner -->    
  <div id="page-banner" class="page-banner-main" style="background-image: url('<?php echo base_url().'asserts/images/bg/page-banner.jpg'?>')">
    <div class="container">
      <div class="section">
        <h3 class="page-heading">Appointment</h3>
      </div>
      <ol class="breadcrumb">
        <li><a href="index-2.html">Home</a></li>
        <li><a href="#">Page</a></li>
        <li class="active"><a>Appointment</a></li>
      </ol>
    </div>
  </div>     
<!--  end banner -->
<!-- portfolio -->        
  <div id="appointment-page" class="appointment-main-block">
    <div class="container">
      <div class="section text-center">
        <h2 class="section-heading">Book Your <span>Appointment</span></h2>
        <p>Duis non condimentum nunc. Nunc quis turpis eu est tincidunt rutrum. Cras a purus quis sem tincidunt egestas vel id lacus.</p>
      </div>  
      <form class="contact-form appointment-form" method="post" action="http://thegenius.co/lamadic-html/version1/appointment.php">
      <h4><i class="lnr lnr-user"></i>Your Personal Details</h4>
            <div class="row personal-info">    
              <div class="col-sm-4">
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name" required>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name" required>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Age</label>
                  <input type="text" class="form-control" id="age" name="age" maxlength="3"  placeholder="Enter Age" required>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>sex</label>
                  <select class="form-control" id="sex" name="sex">
                    <option selected disabled>Select Sex</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>              
                </div>
              </div>
              <div class="col-sm-8">
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Country</label>
                  <select class="form-control" id="country" name="country">
                    <option selected disabled>Select Country</option>
                    <option value="Country 1">Country 1</option>
                    <option value="Country 2">Country 2</option>
                    <option value="Country 3">Country 3</option>
                    <option>Country 4</option>
                  </select>
                </div>
              </div> 
              <div class="col-sm-4">
                <div class="form-group">
                  <label>State</label>
                  <select class="form-control" id="state" name="state">
                    <option selected disabled>Select State</option>
                    <option value="State 1">State 1</option>
                    <option value="State 2">State 2</option>
                    <option value="State 3">State 3</option>
                    <option value="State 4">State 4</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>City</label>
                   <select class="form-control" id="city" name="city">
                    <option selected disabled>Select City</option>
                    <option value="City 1">City 1</option>
                    <option value="City 2">City 2</option>
                    <option value="City 3">City 3</option>
                    <option value="City 4">City 4</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Phone</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone no" required>
                </div>
              </div>   
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Mobile</label>
                  <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile no" required>
                </div>
              </div> 
              <div class="col-sm-4">
                <div class="form-group">
                  <label>E-Mail</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter E-mail" required>
                </div>
              </div>        
            </div>
          <h4><i class="lnr lnr-calendar-full"></i>Appointment Schedule</h4>
            <div class="row">    
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Department</label>
                  <select class="form-control" id="department" name="department">
                    <option selected disabled>Select Department</option>
                    <option value="Department 1">Department 1</option>
                    <option value="Department 2">Department 2</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Specialist</label>
                  <select class="form-control" id="specialist" name="specialist">
                    <option selected disabled>Select Specialist</option>
                    <option value="Specialist 1">Specialist 1</option>
                    <option value="Specialist 2">Specialist 2</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Appointment Date</label>
                  <input type="text" class="form-control date-pick" id="appointmentdate" name="appointmentdate" placeholder="Appointment Date">
                </div>
              </div>   
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Your Problem</label>
                  <textarea name="problem" id="problem" placeholder="Enter Problem"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Message</label>
                  <textarea id="message" name="message" placeholder="Enter Descriptive Message"></textarea>
                </div>
              </div>            
            </div>
            <button id="submit" name="submit" class="btn btn-default">Book Appointment</button>
          </form>     
    </div>
  </div>
<!--end portfolio col 3 -->          
