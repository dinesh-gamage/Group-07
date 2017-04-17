<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?php echo base_url()."asserts/img/favicon.png"?>">

    <title>Creative - Bootstrap Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="<?php echo base_url()."asserts/css/bootstrap.min.css"?>" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url()."asserts/css/bootstrap-theme.css"?>" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url()."asserts/css/elegant-icons-style.css"?>" rel="stylesheet" />
    <link href="<?php echo base_url()."asserts/css/font-awesome.min.css"?>" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="<?php echo base_url()."asserts/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css"?>" rel="stylesheet" />
	<link href="<?php echo base_url()."asserts/assets/fullcalendar/fullcalendar/fullcalendar.css"?>" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="<?php echo base_url()."asserts/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css"?>" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?php echo base_url()."asserts/css/owl.carousel.css"?>" type="text/css">
	<link href="<?php echo base_url()."asserts/css/jquery-jvectormap-1.2.2.css"?>" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="<?php echo base_url()."asserts/css/fullcalendar.css"?>">
	<link href="<?php echo base_url()."asserts/css/widgets.css"?>" rel="stylesheet">
    <link href="<?php echo base_url()."asserts/css/style.css"?>" rel="stylesheet">
    <link href="<?php echo base_url()."asserts/css/style-responsive.css"?>" rel="stylesheet" />
	<link href="<?php echo base_url()."asserts/css/xcharts.min.css"?>" rel=" stylesheet">	
	<link href="<?php echo base_url()."asserts/css/jquery-ui-1.10.4.min.css"?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()."asserts/css/calender.css"?>">
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

    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     

      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="<?php echo base_url()."Index1"?>" class="logo">Nice<span class="lite">Admin</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
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
                                <!--content is load using ajax getnewpatient function .content is in Header controller and load data using index model'sget_new_patient function
                                    this content is loading continuously.....................
                                -->
                            </div>
                        </ul>
                    </li>
                    <!-- alert notification end-->
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
                                <a href="<?php base_url()?>Profile"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                            </li>
                            <li>
                                <a href="<?php base_url()?>Profile/logout" onclick="<?php base_url()?>Profile/logout"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                        </ul>
                    </li>
                    <?php endforeach;?>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="<?php echo base_url()."Index1"?>">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li><a class="" href="<?php echo base_url()."Calendar"?>">Calendar</a></li>
                  <li><a class="" href="<?php echo base_url()."CognitiveTest"?>">Add Questions</a></li>                          
                          <li><a class="" href="<?php echo base_url()."CogTestQuiz"?>">Start Quiz</a></li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Cognitive Test</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          
                      </ul>
                  </li>    

				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Forms</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?php echo base_url()."FormComponent"?>">Form Elements</a></li>                          
                          <li><a class="" href="<?php echo base_url()."FormValidation"?>">Form Validation</a></li>
                      </ul>
                  </li>       
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>UI Fitures</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?php echo base_url()."General"?>">Elements</a></li>
                          <li><a class="" href="<?php echo base_url()."Buttons"?>">Buttons</a></li>
                          <li><a class="" href="<?php echo base_url()."Grids"?>">Grids</a></li>
                      </ul>
                  </li>
                  <li>
                      <a class="" href="<?php echo base_url()."Widgets"?>">
                          <i class="icon_genius"></i>
                          <span>Widgets</span>
                      </a>
                  </li>
                  <li>                     
                      <a class="" href="<?php echo base_url()."Charts"?>">
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
                          <li><a class="" href="<?php echo base_url()."BasicTable"?>">Basic Table</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="<?php echo base_url()."Profile"?>">Profile</a></li>
                          <li><a class="" href="<?php echo base_url()."Login"?>"><span>Login Page</span></a></li>
                          <li><a class="" href="blank">Blank Page</a></li>
                          <li><a class="" href="404.html">404 Error</a></li>
                      </ul>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <script >
          function loadpatient(one) {
              var pid = one;
              alert(pid);
              $.ajax({
                  type: "post",
                  url: "http://[::1]/Third_Year_Project/NiceAdmin/Index1",
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
                  url: "http://[::1]/Third_Year_Project/NiceAdmin/Header/newpatient",
                  cache: false,
                  data: {pid: "one"},
                  success: function (data) {
                        $('#newpatient').html(data)
                  }
              });
          }
          function countnewpatient(){
              $.ajax({
                  type: "post",
                  url: "http://[::1]/Third_Year_Project/NiceAdmin/Header/count_new_patient",
                  cache: false,
                  data: {pid: "one"},
                  success: function (data) {
                      $('.countnewpatient').html(data)
                  }
              });
          }
      </script>