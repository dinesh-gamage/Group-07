<!-- 
+===============================================================================================================================================+
                                                    **********************************************
                                                        HEALTHY LIFE - CLIIC MANAGEMENT SYSTEM 
                                                    **********************************************
|   Version     : 1.0
|   Year        : 2017
|   Author      : Dinesh Gamage , Kosala Peris, Tharindu Abeywickrama, Harsha Dhananjaya, Pasan Malith, Veena Nanayakkara
|   Copyright   : Alrights Received by Healthy Life developing team of UCSC (2013/2014)


+===============================================================================================================================================+
-->

<!DOCTYPE html >
<html lang="en-US">
<head>
    
    <?php
        if (isset($this->session->userdata['logged_in'])) 
        {
            $username = ($this->session->userdata['logged_in']['username']);
            $email = ($this->session->userdata['logged_in']['email']);
            $name = ($this->session->userdata['logged_in']['name']);
            $picture = ($this->session->userdata['logged_in']['picture']);
<<<<<<< HEAD
            $this->session->set_userdata('doc_sess',$name );
        } else{
            redirect('/Login');
=======
        } else{
            redirect('/Login');;
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
        }
    ?>
    <?php date_default_timezone_set("Asia/Colombo");?>
    <title> Healthy Life / Doctor </title>
    
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Healthy Life" />
    <meta name="keywords" content="Healthy Life, healthy life, HEALTHY LIFE, healthylife" />
    <meta name="author" content="Healthy Life developing team of UCSC (2013/2014)" />
    <meta name="MobileOptimized" content="320" />

<<<<<<< HEAD
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />-->
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
=======
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>scripts/fullcalendar/fullcalendar.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."asserts/css/custom.css"?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."asserts/css/sweetalert.css"?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."asserts/css/font-awesome.min.css"?>" /> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."asserts/css/owl.carousel.css"?>" />
	<!--<link rel="stylesheet" type="text/css" href="<1?php echo base_url()."asserts/css/widgets.css"?>" />-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."asserts/css/style.css"?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."asserts/css/style-responsive.css"?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."asserts/css/jquery-ui-1.10.4.min.css"?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."asserts/css/elegant-icons-style.css"?>" rel="stylesheet" />
    <!--<link rel="stylesheet" type="text/css" href="<1?php echo base_url()."asserts/css/xcharts.min.css"?>" />	
	<link rel="stylesheet" type="text/css" href="<1?php echo base_url()."asserts/css/jquery-jvectormap-1.2.2.css"?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<1?php echo base_url()."asserts/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css"?>" rel="stylesheet" type="text/css" media="screen"/>
-->
    <!--\link href="<-?php echo base_url()."asserts/css/bootstrap.min.css"?>" rel="stylesheet" /-->
    <!--link href="<-?php echo base_url()."asserts/css/bootstrap-theme.css"?>" rel="stylesheet" /-->
<<<<<<< HEAD
    <link rel="stylesheet" href="http://www.amcharts.com/lib/style.css" type="text/css">
=======
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
    
    <style type="text/css">
        #regiration_form fieldset:not(:first-of-type) {
          display: none;
        }
        #searchid {
          width: 130px;
          -webkit-transition: width 0.4s ease-in-out;
          transition: width 0.4s ease-in-out;
        }
        #searchid:focus {
          width: 100%;
        }
    </style>
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<<<<<<< HEAD
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
=======
    
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
    <script type="text/javascript" src="<?php echo base_url() ?>scripts/fullcalendar/lib/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>scripts/fullcalendar/fullcalendar.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>scripts/fullcalendar/gcal.js"></script>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/jquery.js" ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/sweetalert.min.js" ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/jquery-ui-1.10.4.min.js" ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/jquery-1.8.3.min.js" ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/jquery-ui-1.9.2.custom.min.js" ?>"></script>
    <!-- bootstrap -->
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/bootstrap.min.js" ?>"></script>
    <!-- nice scroll -->
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/jquery.scrollTo.min.js" ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/jquery.nicescroll.js" ?>" type="text/javascript"></script>
    <!-- charts scripts -->
    <script type="text/javascript" src="<?php echo base_url() . "asserts/assets/jquery-knob/js/jquery.knob.js" ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/jquery.sparkline.js" ?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url() . "asserts/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js" ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/owl.carousel.js" ?>" ></script>
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/jquery.rateit.min.js" ?>"></script>
    <!-- custom select -->
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/jquery.customSelect.min.js" ?>" ></script>
    <script type="text/javascript" src="<?php echo base_url() . "asserts/assets/chart-master/Chart.js" ?>"></script>

    <!--custome script for all page-->
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/scripts.js" ?>"></script>
    <!-- custom script for this page-->
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/sparkline-chart.js" ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/easy-pie-chart.js" ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/jquery-jvectormap-1.2.2.min.js" ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/jquery-jvectormap-world-mill-en.js" ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/xcharts.min.js" ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/jquery.autosize.min.js" ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/jquery.placeholder.min.js" ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/gdp-data.js" ?>"></script>	
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/morris.min.js" ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/sparklines.js" ?>"></script>	
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/charts.js" ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/jquery.slimscroll.min.js" ?>"></script>
    
<<<<<<< HEAD
    
=======
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
    <script>
          //knob
          $(function() {
            $(".knob").knob({
              'draw' : function () { 
                $(this.i).val(this.cv + '%')
              }
            })
          });

          //carousel
          $(document).ready(function() {
              $("#owl-slider").owlCarousel({
                  navigation : true,
                  slideSpeed : 300,
                  paginationSpeed : 400,
                  singleItem : true

              });
          });

          //custom select box

          $(function(){
              $('select.styled').customSelect();
          });

          /* ---------- Map ---------- */
        $(function(){
          $('#map').vectorMap({
            map: 'world_mill_en',
            series: {
              regions: [{
                values: gdpData,
                scale: ['#000', '#000'],
                normalizeFunction: 'polynomial'
              }]
            },
            backgroundColor: '#eef3f7',
            onLabelShow: function(e, el, code){
              el.html(el.html()+' (GDP - '+gdpData[code]+')');
            }
          });
        });

        function loadpatient(one) {
                var pid = one;
                alert(pid);
                $.ajax({
                    type: "post",
                    url: "http://[::1]/project/Group-07/NiceAdmin/Index1",
                    cache: false,
                    data: {pid: pid},
                    success: function (data) {
                        window.location.href = "<?php echo base_url('FormComponent');?>";
                    }
                });
            }

            $(document).ready(function (){
                setInterval(getnewpatient, 1000);
            });
            $(document).ready(function (){
                setInterval(countnewpatient, 10);
            });

            function getnewpatient(){
                $.ajax({
                    type: "post",
<<<<<<< HEAD
                    url: "http://[::1]/new4/NiceAdmin/Header/newpatient",
                    cache: false,
                    data: {pid: "one"},
                    success: function (data) {
                        $('#newpatient').html(data);
=======
                    url: "http://[::1]/project/Group-07/NiceAdmin/Header/newpatient",
                    cache: false,
                    data: {pid: "one"},
                    success: function (data) {
                        $('#newpatient').html(data)
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
                    }
                });
            }

            function countnewpatient(){
                $.ajax({
                    type: "post",
<<<<<<< HEAD
                    url: "http://[::1]/new4/NiceAdmin/Header/count_new_patient",
                    cache: false,
                    data: {pid: "one"},
                    success: function (data) {
                        $('.countnewpatient').html(data);
=======
                    url: "http://[::1]/project/Group-07/NiceAdmin/Header/count_new_patient",
                    cache: false,
                    data: {pid: "one"},
                    success: function (data) {
                        $('.countnewpatient').html(data)
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
                    }
                });
            }

  </script>
    
    


  </head>
<body>
    <!-- container section start -->
    <section id="container" class="">
        <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="<?php echo base_url()."Index1"?>" class="logo">Healthy<span class="lite">Life</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
<<<<<<< HEAD
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
=======

>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu" >
                    <!-- alert notification start-->
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important"><div class="countnewpatient"></div></span>
                        </a>
                        <ul class="dropdown-menu extended notification" >
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have <span class="countnewpatient"></span> new notifications</p>
                            </li>
                            <div style="height:250px;overflow-y: scroll;" id="newpatient">
                                <!--content is load using ajax getnewpatient function .content is in Header controller and load data using index model'sget_new_patient function this content is loading continuously.....................-->
                            </div>
                        </ul>
                    </li>
                    <!-- alert notification end-->
<<<<<<< HEAD
                    <!-- user login dropdown start-->
                    <?php foreach($doc_data as $doc_row):?>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="<?php echo $doc_row->doc_img?>" class="img-responsive" style="height:40px;width: 40px;">
                            </span>
                            <span class="username"><?php echo $doc_row->doc_name?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="<?php echo base_url()."Profile"?>"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()."user_authentication/logout"?>"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <?php endforeach;?>
                    <!-- user login dropdown end -->
                    
                    
                    
                    
<!--                    <li class="dropdown">
=======
                    
                    <!-- user login dropdown start-->                  
                    
                    <li class="dropdown">
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="<?php echo base_url().$picture?>" class="profile_sm">
                            </span>
                            <span class="username"><?php echo $name; ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
<<<<<<< HEAD
                                <a href="<?php echo base_url()."Profile"?>"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()."user_authentication/logout"?>"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li> -->
=======
<!--
                                <div  class="profile_drop">
                                    <div class="col-sm-6">
                                        <img alt="" src="</?php echo base_url().$picture?>" class="profile_md">
                                    </div>
                                    <div class="col-sm-6">
                                        </?php echo $name; ?>
                                    </div>                                
                                </div>
-->
                                
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            
                            <li>
                                <a href="<?php base_url()?>Profile/logout" onclick="<?php base_url()?>Profile/logout"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                            
                        </ul>
                    </li> 
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
                    
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
        </header>      
        <!--header end-->

<<<<<<< HEAD
        <!--sidebar start-->
        <!--aside>
            <div id="sidebar"  class="nav-collapse ">
                <!-- sidebar menu start-->
                <!--ul class="sidebar-menu">                
                    <li class="active">
                        <a class="" href="<-?php echo base_url()."Index1"?>">
                            <i class="icon_house_alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li><a class="" href="<-?php echo base_url()."Calendar"?>">Calendar</a></li>
                    <li><a class="" href="<-?php echo base_url()."CognitiveTest"?>">Add Questions</a></li>                          
                    <li><a class="" href="<-?php echo base_url()."CogTestQuiz"?>">Start Quiz</a></li> 
                    <li><a class="" href="<-?php echo base_url()."FormComponent"?>">Form Elements</a></li>                          
                    <li><a class="" href="<-?php echo base_url()."FormValidation"?>">Form Validation</a></li>

                         
                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon_desktop"></i>
                            <span>UI Fitures</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="<-?-php echo base_url()."General"?>">Elements</a></li>
                            <li><a class="" href="<-?php echo base_url()."Buttons"?>">Buttons</a></li>
                            <li><a class="" href="<--?php echo base_url()."Grids"?>">Grids</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="" href="<-?php echo base_url()."Widgets"?>">
                            <i class="icon_genius"></i>
                            <span>Widgets</span>
                        </a>
                    </li>
                    <li>                     
                        <a class="" href="<-?php echo base_url()."Charts"?>">
                            <i class="icon_piechart"></i>
                            <span>Charts</span>

                        </a>

                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon_table"></i>
                            <span>Tables</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="<-?php echo base_url()."BasicTable"?>">Basic Table</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon_documents_alt"></i>
                            <span>Pages</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
                        <ul class="sub">                          
                            <li><a class="" href="<-?php echo base_url()."Profile"?>">Profile</a></li>
                            <li><a class="" href="<-?php echo base_url()."Login"?>"><span>Login Page</span></a></li>
                            <li><a class="" href="blank">Blank Page</a></li>
                            <li><a class="" href="404.html">404 Error</a></li>
                        </ul>
                    </li>

                </ul>
                <!-- sidebar menu end-->
            <!--/div>
        </aside-->
        <!--sidebar end-->
=======
        
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
