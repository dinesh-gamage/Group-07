<div class="container">
    
    <div class="col-md-3"></div>                
                        <div class="col-md-6">
                            <div class="section">
                                <h2 class="section-heading text-center"><span> reset </span> Password </h2> <hr/>             
                            </div> 
                        <div>
                            <!--div class="book-top-bar text-center">
                                <span><i class="flaticon-notes hidden-xs"></i>Register Now</span>
                            </div-->
                            <form class="book-form" method="post" action="<?php echo base_url() ?>index.php/forgetpassword/forget">
                                
                                
                             


                                <!--div class="form-group">                   
                                    <input type="text" class="form-control date-pick" id="appointmentdate" name="appointmentdate" placeholder="Appointment Date" required>
                                </div-->

                                 
                                <div class="form-group">                   
                                   <input type="text" class="form-control" id="uname"  name="uname"  placeholder="User name" required>
                                   <input type="password"  class="form-control" id="pwd" name ="pwd" placeholder="password"  required>
                                   <input type="password" class="form-control" id="confpwd" name="confpwd" placeholder="confirm password" required>

                                </div>                
                                <button type="submit" class="btn btn-default" id = "forget_btn"> Reset </button>
                                
                            </form>
                                 
                            
                        </div>
                    </div>
                
                </div>

