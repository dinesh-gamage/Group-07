
<!--a href="#top" ><i class="hl-float-top fa fa-arrow-circle-up" style="color: #397df7;" ></i></a-->
<div id="about" class="about-main-block">
<div class="container">
    
    <div class="col-md-3"></div>                
                        <div class="col-md-6">
                            <div class="section">
                                <h2 class="section-heading text-center"><span> Change  </span> Password </h2> <hr/>             
                            </div> 
                        <div>
                            <!--div class="book-top-bar text-center">
                                <span><i class="flaticon-notes hidden-xs"></i>Register Now</span>
                            </div-->
<<<<<<< HEAD
                            <form class="book-form" method="post" action="http://thegenius.co/lamadic-html/version1/index-appointment.php">
=======
                            <form class="book-form" method="post" action="<?php echo base_url() ?>index.php/forgetpassword/forget">
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
                                
                                
                             


                                <!--div class="form-group">                   
                                    <input type="text" class="form-control date-pick" id="appointmentdate" name="appointmentdate" placeholder="Appointment Date" required>
                                </div-->

                                 
                                <div class="form-group">                   
<<<<<<< HEAD
                                    <input type="text" class="form-control" id="recovery_email" name="recovery_email" placeholder="your recovery email" required>
                                </div>                
                                <button type="submit" class="btn btn-default"> send </button>
=======
                                    <input type="text" class="form-control" id="uname" name="uname" placeholder="username" required>
                                    <input type="password" class="form-control" id="psswrd" name="psswrd" placeholder="password" required>
                                    <input type="password" class="form-control" id="repswrd" name="repswrd" placeholder="retype password" required>  

                                </div>                
                                <button type="submit" class="btn btn-default" id = "forget_btn"> send </button>
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
                                
                            </form>
                                 
                            
                        </div>
                    </div>
                
                </div>
                
            </div>

<<<<<<< HEAD
=======
<script type="text/javascript">
    $(document).ready(function (){

        //validate password and confirm password
        $('#repswrd').keyup(function(){
            if($(this).val()== $('#psswrd').val()){
                document.getElementById('forget_btn').disabled = false ;
                $('#checkpass').html('matching!!!').css('color', 'green');
            }else{
                document.getElementById('forget_btn').disabled = true ;
                $('#checkpass').html('not matching with password!!!').css('color', 'red');
            }
        });

        //validate age;
        
        //validate phone number
       

        

    });



</script>

>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
