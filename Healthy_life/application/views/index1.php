<!--  banner -->
<!--div class="container">
    <div class="row">
        <div class="col-m-12 col-sm-12">
            <div class="hl-location">
                Home
            </div>
        </div>
    </div>
</div-->
<div class="hl-float opasity50">
    <span class="vertical-text-box" >
        <h6 class="vertical-text">Home Page</h6>
    </span>
</div>
<!--a href="#top" ><i class="hl-float-top fa fa-arrow-circle-up" style="color: #397df7;" ></i></a-->

<div id="home-banner" class="home-banner-main">
    <div class="item" style="background-image: url('<?php echo base_url().'assets/images/bg/home-banner-bg.jpg'?>')">      
        <div class="overlay-home"></div>    
        <div class="banner-text text-center">
            <h1 class="banner-heading"><span>24 Hours</span> Medical Services <span>Emergency Case</span></h1>
        </div>      
    </div>
<div class="item" style="background-image: url('<?php echo base_url().'assets/images/bg/home-banner-bg-2.jpg'?>')">     
    <div class="overlay-home"></div>    
    <div class="banner-text text-center">
        <h1 class="banner-heading"><span>24 Hours</span> Medical Services <span>Emergency Case</span></h1>
    </div>       
</div>
<div class="item" style="background-image: url('<?php echo base_url().'assets/images/bg/home-banner-bg-3.jpg'?>')">     
    <div class="overlay-home"></div>    
    <div class="banner-text text-center">
        <h1 class="banner-heading"><span>24 Hours</span> Medical Services <span>Emergency Case</span></h1>
    </div>       
    </div>
</div>
<!--  end banner -->

<!--  about -->
<div id="about" class="about-main-block">
    <div class="container">
        <div class="section">
            <h2 class="section-heading">Welcome to Healthy Life</h2>              
        </div> 
        <div class="row">
            <div class="col-md-8">
                <div class="about-block">              
                    <p class="text_justify">Molestias voluptatem odit, vitae, ratione quam quisquam doloremque, quaerat aliquid tempore laborum voluptas nemo aperiam culpa dignissimos dolores placeat ipsam eligendi! Adipisci atque neque veniam excepturi, in ipsam ipsum similique commodi dolor dolore asperiores! Nihil pariatur quis ducimus sequi illum eum, inventore recusandae obcaecati ipsam, tempora repellendus consequuntur eius sed deserunt voluptatum omnis nulla culpa quidem magni facilis asperiores ullam!</p>
            
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="about-features">
                                <li><i class="fa fa-stop"></i>Molestias voluptatem odit, vitae, ratione ,</li>
                                <li><i class="fa fa-stop"></i>Quam quisquam doloremque, quaerat</li>
                            </ul> 
                        </div>
                        <div class="col-sm-6">
                            <ul class="about-features">                 
                                <li><i class="fa fa-stop"></i>Culpa dignissimos dolores placeat ,</li>                
                                <li><i class="fa fa-stop"></i>Facilis asperiores ullam! Cum dicta</li>
                            </ul> 
                        </div>
                        <div class="row">
                            <div class="col-m-12 col-sm-12">
                                <a class="text-right" href="<?php echo base_url()."About"?>"> Read more... </a>
                            </div>
                        </div>
                        
                    </div>
                </div>            
            </div>
            <div class="col-md-4">
                <div class="book-appointment">
                    <div class="book-top-bar text-center">
                        <span><i class="flaticon-notes hidden-xs"></i>Register Now</span>
                    </div>
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
                        </div-->
                        
                        <textarea class="form-control" name="description" rows="2" placeholder="Description"></textarea>                  
                        <button type="submit" class="btn btn-default">Send Your Request</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
    <div>
    
</div>
</div>

<!-- end about -->