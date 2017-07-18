<?php

require 'PHPMailerAutoload.php';

class send_email extends CI_Controller {

    public function send() {

        $receipient = $this->input->post('email');
        $subject = "Reset your password";
        $message =  anchor('user_authentication/reset_password_show', 'Link', 'class="link-class"') ;

        $mail = new PHPMailer;
        $mail->SMTPDebug = 0;                  
        $mail->isSMTP();                                   
        $mail->Host = 'smtp.gmail.com;';  
        $mail->SMTPAuth = true;                             
        $mail->Username = 'pasanrathnayaka01@gmail.com';              
        $mail->Password = 'p$m$r$11';                       
        $mail->SMTPSecure = 'tls';                        
        $mail->Port = 587;

        $mail->setFrom('pasanrathnayaka01@gmail.com', 'Medi+Care');
        $mail->addAddress($receipient);   
        $mail->isHTML(true);

        $mail->Subject= $subject;
        $mail->Body= $message;

        if ($mail->send()) {
            $this->load->view('header');
            $this->load->view('confirmed');
            $this->load->view('footer');
        } else {
            echo "Trouble in sending email";
        }
    }

}
