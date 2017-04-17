<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?php echo base_url()."asserts/img/favicon.png"?>">

    <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="<?php echo base_url()."asserts/css/bootstrap.min.css"?>" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url()."asserts/css/bootstrap-theme.css"?>" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url()."asserts/css/elegant-icons-style.css"?>" rel="stylesheet" />
    <link href="<?php echo base_url()."asserts/css/font-awesome.css"?>" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?php echo base_url()."asserts/css/style.css"?>" rel="stylesheet">
    <link href="<?php echo base_url()."asserts/css/style-responsive.css"?>" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="" onload="javascript:window.history.forward(1);">
     
    <div class="container">
        
        <form class="login-form" method="post">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="username" placeholder="Username" required="required" autofocus >
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <?php echo $this->session->flashdata('msg'); ?>
            <input class="btn btn-primary btn-lg btn-block" name="login" value="Login" type="submit"/>
            
        </div>
      </form>
        
    </div>

    <script type="text/javascript" language="javascript">
        function disableBackButton()
        {
            window.history.forward()
        }
        disableBackButton();
        window.onload=disableBackButton();
        window.onpageshow=function(evt) { if(evt.persisted) disableBackButton() }
        window.onunload=function() { void(0) }
    </script>
  </body>
</html>
