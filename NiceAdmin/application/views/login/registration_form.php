<html>
    <?php
        if (isset($this->session->userdata['logged_in'])) {
            // header("location: http://localhost/Third_Year_Project/Admin/user_authentication/user_login_process");
        }
    ?>
    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asserts/css/style_login.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    </head>
    <body style='background-image: url("<?php echo base_url();?>asserts/img/back.png");'>
        <div id="main">
            <div id="login" style="width: 450">
                <h2>Registration Form</h2>
                <hr/>
                <?php

                  $id = array(
                      'id'=>'userid',
                      'class'=>'form-control',
                      'name'=>'userid',
                      'required'=>'required'
                  );
                  $name = array(
                      'id'=>'myname',
                      'class'=>'form-control',
                      'name'=>'myname',
                      'required'=>'required'
                  );
                  $spec = array(
                      'id'=>'spec',
                      'class'=>'form-control',
                      'name'=>'spec',
                      'required'=>'required'
                  );
                  $contact = array(
                      'id'=>'contact',
                      'class'=>'form-control',
                      'name'=>'contact',
                      'required'=>'required'
                  );$username = array(
                      'id'=>'username',
                      'class'=>'form-control',
                      'name'=>'username',
                      'required'=>'required'
                  );
                  $password = array(
                      'id'=>'password',
                      'class'=>'form-control',
                      'name'=>'password',
                      'required'=>'required'
                  );
                
                    echo "<div class='error_msg'>";
                    echo validation_errors();
                    echo "</div>";
                    echo form_open_multipart('user_authentication/new_user_registration');

                    echo form_label('Doctor Id : ');
                    echo"<br/>";
                    echo form_input($id);
                    echo"<br/>";
                    echo"<br/>";

                    echo form_label('Doctor name : ');
                    echo"<br/>";
                    echo form_input($name);
                    echo"<br/>";
                    echo"<br/>";

                    echo form_label('Speciality : ');
                    echo"<br/>";
                    echo form_input($spec);
                    echo"<br/>";
                    echo"<br/>";

                    echo form_label('Contact : ');
                    echo"<br/>";
                    echo form_input($contact);
                    echo"<br/>";
                    echo "<div id='checktel'></div>";
                    echo"<br/>";

                    echo form_label('Create Username : ');
                    echo"<br/>";
                    echo form_input($username);
                    echo "<div id='err'>";
                        
                    echo "</div>";
                    echo"<br/>";
                    echo form_label('Email : ');
                    echo"<br/>";
                    $data = array(
                        'type' => 'email',
                        'name' => 'email_value',
                        'required'=>'required'
                    );
                    echo form_input($data);
                    echo"<br/>";
                    echo"<br/>";
                    echo form_label('Password : ');
                    echo"<br/>";
                    echo form_password($password);
                    echo"<br/>";
                    echo"<br/>";

                    echo form_label('Image : ');
                    echo"<br/>";
                    $data = array(
                        'type' => 'file',
                        'name' => 'picture'
                    );
                    echo form_input($data);
                    echo"<br/>";
                    echo"<br/>";
                    //echo $error; // Error Message will show up here -->

                    echo form_submit('submit', 'Sign Up');
                    echo form_close();
                ?>
                <a href="<?php echo base_url() ?> ">For Login Click Here</a>
            </div>
        </div>


        <script type="text/javascript">
             $('#contact').keyup(function(){
                var reg1 = /^[0-9]{10}$/;
                if((reg1.test($(this).val()))){
                    $('#checktel').html('');
                }else{
                    if($(this).val()!==""){
                        $('#checktel').html('Please Enter a Valid Contact Number').css('color', 'red');
                    }else{
                        $('#checktel').html('');
                    }
                }
            });

             $('#username').keyup(function(){
                var user = $('#username').val();
                $.ajax({
                    type: "post",
                    url: "http://[::1]/project/Group-07/NiceAdmin/Login/checkUsername/",
                    cache: false,
                    data: {cuser:user},
                    success: function (data) {
                        if(data){
                            $('#err').html('Username Exsist').css('color','red');
                        }else{
                            $('#err').html('');
                        }
                    }
                });
             });

        </script>
    </body>
</html>