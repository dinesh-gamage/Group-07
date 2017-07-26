<!-- 
+                                                            ===+
                                                    **********************************************
                                                        HEALTHY LIFE - CLIIC MANAGEMENT SYSTEM 
                                                    **********************************************
|   Version     : 1.0
|   Year        : 2017
|   Author      : Dinesh Gamage , Kosala Peris, Tharindu Abeywickrama, Harsha Dhananjaya, Pasan Malith, Veena Nanayakkara
|   Copyright   : Alrights Received by Healthy Life developing team of UCSC (2013/2014)


+                                                            ===+
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
            $this->session->set_userdata('doc_sess',$name );
        } else{
            redirect('/Login');
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

<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />-->
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
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
    <link rel="stylesheet" href="http://www.amcharts.com/lib/style.css" type="text/css">
    
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
    
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
<!--    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<!--    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>-->

<!--    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<!--    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>-->
    
 
    <script type="text/javascript" src="<?php echo base_url() ?>scripts/fullcalendar/lib/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>scripts/fullcalendar/fullcalendar.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>scripts/fullcalendar/gcal.js"></script>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/jquery.js" ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/sweetalert.min.js" ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/jquery-ui-1.10.4.min.js" ?>"></script>
    <!-- charts scripts -->
    <script type="text/javascript" src="<?php echo base_url() . "asserts/assets/jquery-knob/js/jquery.knob.js" ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/owl.carousel.js" ?>" ></script>
    <!-- custom select -->
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/jquery.customSelect.min.js" ?>" ></script>
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/jquery-jvectormap-1.2.2.min.js" ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/jquery-jvectormap-world-mill-en.js" ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . "asserts/js/gdp-data.js" ?>"></script>	
    
    
    
    
    
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
                    url: "http://[::1]/project/Group-07/NiceAdmin/Header/newpatient",
                    cache: false,
                    data: {pid: "one"},
                    success: function (data) {
                        $('#newpatient').html(data);
                    }
                });
            }

            function countnewpatient(){
                $.ajax({
                    type: "post",
                    url: "http://[::1]/project/Group-07/NiceAdmin/Header/count_new_patient",
                    cache: false,
                    data: {pid: "one"},
                    success: function (data) {
                        $('.countnewpatient').html(data);
                    }
                });
            }
            function countnewSessions(){
                $.ajax({
                    type: "post",
                    url: "http://[::1]/project/Group-07/NiceAdmin/Header/countSessions",
                    cache: false,
                    data: {daysess: "daysess"},
                    success: function (data) {
                        $('.countsess').html(data);
                    }
                });
            }
            function getSessions(){
                $.ajax({
                    type: "post",
                    url: "http://[::1]/project/Group-07/NiceAdmin/Header/getSessions",
                    cache: false,
                    data: {daysess: "daysess"},
                    success: function (data) {
                        $('#sessions').html(data);
                    }
                });
            }
             $(document).ready(function (){
                setInterval(getSessions, 1000);
            });
            $(document).ready(function (){
                setInterval(countnewSessions, 10);
            });

  </script>
    
    


  </head>
<body>
    <!-- container section start -->
    <section id="container" class="">
        <header class="header dark-bg">
    

            <!--logo start-->
            <a href="<?php echo base_url()."DoctorView"?>" class="logo">Healthy<span class="lite">Life</span></a>
            <!--logo end-->

<!--            <div class="nav search-row" id="top_menu">-->
                <!--  search form start -->
<!--
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
-->
                <!--  search form end -->                
<!--            </div>-->

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
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important"><div class="countsess"></div></span>
                        </a>
                        <ul class="dropdown-menu extended notification" >
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have <span class="countsess"></span> new notifications</p>
                            </li>
                            <div style="height:250px;overflow-y: scroll;" id="sessions">
                                <!--content is load using ajax getSessions function .content is in Header controller and load data using index model's get_new_patient function this content is loading continuously.....................-->
                            </div>
                        </ul>
                    </li>
                    <!-- user login dropdown start-->
                    <?php foreach($doc_data as $doc_row):?>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="<?php echo base_url($doc_row->doc_img)?>"S class="img-responsive" style="height:40px;width: 40px;">
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
  
   
                   
 
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
        </header>      
  
        
   
       
 
