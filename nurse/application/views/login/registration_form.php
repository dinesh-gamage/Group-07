<html>
    <?php
        if (isset($this->session->userdata['logged_in'])) {
            header("location: http://localhost/Third_Year_Project/Admin/user_authentication/user_login_process");
        }
    ?>
    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asserts/css/style_login.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
    </head>
    <body style='background-image: url("<?php echo base_url();?>asserts/img/back.png");'>
        <div id="main">
            <div id="login" style="width: 450">
                <h2>Registration Form</h2>
                <hr/>
                <?php
                    echo "<div class='error_msg'>";
                    echo validation_errors();
                    echo "</div>";
                    echo form_open_multipart('user_authentication/new_user_registration');

                    echo form_label('Doctor Id : ');
                    echo"<br/>";
                    echo form_input('userid');
                    echo"<br/>";
                    echo"<br/>";

                    echo form_label('Doctor name : ');
                    echo"<br/>";
                    echo form_input('myname');
                    echo"<br/>";
                    echo"<br/>";

                    echo form_label('Speciality : ');
                    echo"<br/>";
                    echo form_input('spec');
                    echo"<br/>";
                    echo"<br/>";

                    echo form_label('Contact : ');
                    echo"<br/>";
                    echo form_input('contact');
                    echo"<br/>";
                    echo"<br/>";

                    echo form_label('Create Username : ');
                    echo"<br/>";
                    echo form_input('username');
                    echo "<div class='error_msg'>";
                        if (isset($message_display)) {
                            echo $message_display;
                        }
                    echo "</div>";
                    echo"<br/>";
                    echo form_label('Email : ');
                    echo"<br/>";
                    $data = array(
                        'type' => 'email',
                        'name' => 'email_value'
                    );
                    echo form_input($data);
                    echo"<br/>";
                    echo"<br/>";
                    echo form_label('Password : ');
                    echo"<br/>";
                    echo form_password('password');
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
    </body>
</html>