<!-- 
+==========================================================================================================================+
                                        **********************************************
                                            HEALTHY LIFE - CLIIC MANAGEMENT SYSTEM 
                                        **********************************************
|   Version     : 1.0
|   Year        : 2017
|   Author      : Dinesh Gamage , Kosala Peris, Tharindu Abeywickrama, Harsha Dhananjaya, Pasan Malith, Veena Nanayakkara
|   Copyright   : Alrights Received by Healthy Life developing team of UCSC (2013/2014)


+==========================================================================================================================+
-->

<!DOCTYPE html >
<html lang="en-US">
<head>
    
    <?php
        if (isset($this->session->userdata['logged_in'])) 
        {           
            $username = ($this->session->userdata['logged_in']['username']);
            $email = ($this->session->userdata['logged_in']['email']);
        } 
        else
        {
            header("location: http://localhost/project/Group-07/NiceAdmin/user_authentication/user_login_process");
        }
    ?>
    
    <title> Healthy Life / Dashboard </title>
    
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Healthy Life" />
    <meta name="keywords" content="Healthy Life, healthy life, HEALTHY LIFE, healthylife">
    <meta name="author" content="Healthy Life developing team of UCSC (2013/2014)" />
    <meta name="MobileOptimized" content="320" />