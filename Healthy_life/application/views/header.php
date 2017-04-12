<!-- 
+==========================================================================================================================+
                                        **********************************************
                                            HEALTHY LIFE - CLIIC MANAGEMENT SYSTEM 
                                        **********************************************
|   Version     : 1.0
|   Year        : 2017
|   Author      : Dinesh Gamage , Kosala Peris, Tharindu Abeywickrama, Harsha Dhananjaya, Pasan Malith, Veena Nanayakkara
|   Copyright   : Alrights Received by Healthy Life developing team of UCSC (2013/2014)


|   Template : Lamadic - Health and Medical HTML Template | Version : 1.0.0 | Author : 

+==========================================================================================================================+
-->

<!DOCTYPE html >
<html lang="en-US">
<head>
    
    <title> Healthy Life </title>
    
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Healthy Life" />
    <meta name="keywords" content="Healthy Life, healthy life, HEALTHY LIFE, healthylife">
    <meta name="author" content="Healthy Life developing team of UCSC (2013/2014)" />
    <meta name="MobileOptimized" content="320" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/bootstrap.min.css"?>" /> <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/font-awesome.min.css"?>" /> <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/menumaker.css"?>"> <!-- menu css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/style.css"?>" /> <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/custom.css"?>" /> <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/owl.carousel.css"?>" /> <!-- owl carousel css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/datepicker.css"?>" /> <!-- date picker css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/linearicons.css"?>" /> <!-- linearicons css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/medical-icon.css"?>" /> <!-- medical-icons css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/et-line-icon.css"?>" /> <!-- et line icon css -->
    <link rel="stylesheet" type="text/css"href="<?php echo base_url()."assets/css/flaticon.css"?>" /> <!-- flat icons css -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700" /> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400i,700" /> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:600,600i,700i" /> <!-- google fonts -->
    <link rel="icon" type="image/icon" href="<?php echo base_url()."asserts/images/favicon/favicon.ico"?>"> <!-- favicon-icon -->

    
</head>

    
<body>
    <a name="top"></a>
    <!-- preloader -->
      <div class="preloader">
          <div class="status">
              <img class="logo-preloader" src="<?php echo base_url()."assets/images/hl_img/logo_transparent.png" ?>" />
          </div>
      </div>
    <!-- end preloader --> 
    
    <!--  top bar -
      <div class="top-bar hidden-xs">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="helth-dtl">
                  <p><span><b> Healthy Life </b></span>  &nbsp; - We will take care of you</p>  
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-top">
                <p><i class="lnr lnr-smartphone"></i> <span>Emergency Line - </span> (011) 2 152 152</p>
              </div>
            </div>
          </div>
        </div>
      </div> 
    <!--  end top bar -->

    <!--  navigation -->
        <div class="nav-bar header-line">
        <div class="header-back">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <img class="logo-box" src="<?php echo base_url()."assets/images/hl_img/logo_transparent.png"?>" alt="Healthy Life">
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-11">
                        <div class="navigation">
                            <div id="cssmenu">
                                <ul>
                                    <li> <a href="<?php echo base_url()."Index1"?>">Home</a> </li>
                                    <li> <a href="<?php echo base_url()."About"?>">About Us</a> </li>
                                    <li> <a href="<?php echo base_url()."DoctorStyle1"?>">Doctors</a> </li>
                                    <li> <a href="<?php echo base_url()."Register"?>">Register</a> </li>
                                    <!--li> <a href="#">Pages</a>
                                        <ul>    
                                            <li><a href="<?php echo base_url()."DoctorStyle1"?>">Doctor Style 1</a></li>
                                            <li><a href="<?php echo base_url()."DoctorSingle"?>">Doctor Single</a></li>   
                                            <li><a href="<?php echo base_url()."DepartmentsTwo"?>">Departments Two</a></li>
                                            <li><a href="<?php echo base_url()."Services"?>">Services</a></li>
                                            <li><a href="<?php echo base_url()."ServicesDetails"?>">Services Details</a></li>
                                            <li><a href="<?php echo base_url()."PricingPlans"?>">Pricing Plans</a></li>
                                            <li><a href="<?php echo base_url()."Career"?>">Career</a></li>
                                            
                                            <li><a href="<?php echo base_url()."Appointment"?>">Appointment</a></li>
                                        </ul>
                                    </li-->                
                                    <!--li><a href="<?php echo base_url()."PortfolioWithTitle"?>">Gallery</a></li-->
                                    <li><a href="<?php echo base_url()."BlogLeftSidebar"?>">Blog</a></li>
                                    <!--li><a href="<?php echo base_url()."Faq"?>">Faq</a></li-->
                                    <li><a href="<?php echo base_url()."ContactStyle2"?>">Contact</a></li>
                                    <!--li></li>
                                    <span class="btn btn-info"><a href="<?php echo base_url()."ContactStyle2"?>"><h3>Log in</h3></a></span-->
                                      <li><a href="<?php echo base_url()."gotopatientregistration"?>">Patient registration</a></li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    <!--div class="col-md-2 col-sm-1 hidden-xs">
             
                    </div-->
              </div>
        </div>
    </div> 
    </div> 
    
    <a href="<?php echo base_url()."Login"?>"><div class="hl-float-login" >Log in <!--hr style="color:white; height:3px;"> Register--></div></a>

<!--  end navigation -->