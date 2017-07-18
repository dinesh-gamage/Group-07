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
        <div class="row">
            <div class="col-md-6">
                <div class="section">
                    <h3 class="section-heading">Welcome to Healthy Life</h3>
                </div>
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
            <div class="col-md-6">
                <div class="book-appointment">
                    <div class="book-top-bar text-center">
                        <span><i class="flaticon-notes hidden-xs"></i>Log In here</span>
                    </div>

                    <!-- <div class="book-form" >
                          <div class="book-form" >
                                <div class="form-group">                   
                                    <input type="text" class="form-control" id="uname" name="uname" placeholder="Enter Your User Name/ID" required>
                                </div>
                                <div class="form-group">                   
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" required>
                                </div>
                                                  
                                <button type="submit" id="loginbtn" class="btn btn-default">Log In</button>
                                <li> <a href="<?php echo base_url()."gotopatientregistration"?>"> signup </a> </li>
                                <li> <a href="<?php echo base_url()."forgetpassword"?>"> forget password </a> </li>
                            </div>


                    </div> -->

                    <?php
                    if (isset($logout_message)) {
                    echo "<div class='message'>";
                    echo $logout_message;
                    echo "</div>";
                    }
                    ?>
                    <?php
                    if (isset($message_display)) {
                    echo "<div class='message'>";
                    echo $message_display;
                    echo "</div>";
                    }
                    ?>

                    <div id="main">
                        <div id="login">
                            <h2>Login Here</h2>
                            <hr/>
                            <?php echo form_open('user_authentication/user_login_process'); ?>
                            <?php
                            echo "<div class='error_msg'>";
                            if (isset($error_message)) {
                            echo $error_message;
                            }
                            echo validation_errors();
                            echo "</div>";
                            ?>
                            
                            <input type="text" name="username" id="name" placeholder="username"/><br /><br />
                            
                            <input type="password" name="password" id="password" placeholder="password"/><br/><br />
                            <input type="submit" value=" Login " name="submit"/><br />
                             <a href="<?php echo base_url() ?>index.php/user_authentication/user_registration_show">To SignUp Click Here</a> <br>
                             <a href="<?php echo base_url() ?>index.php/user_authentication/forget_password_show">forget password</a> 

                            <?php echo form_close(); ?>

                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <div>
    
</div>
</div>
    <script>
        $(document).ready(function (){
            $('#loginbtn').click(function(){
                var username = $('#uname').val();
                var pass = $('#password').val();
                $.ajax({
                    type:"post",
                    url:"http://[::1]/Third_Year_Project/Healthy_life/Login/check_patient",
                    data:{uname:username,password:pass},
                    success:function(data){
                        if(data=="true"){
                            window.location.href = "<?php echo base_url('Index1');?>";
                        }else{
                            $('#messagelog').html('Invalid username or password!');
                            $('#uname').val("");
                            $('#password').val("");
                        }
                    }
                });

            });


        });
    </script>
