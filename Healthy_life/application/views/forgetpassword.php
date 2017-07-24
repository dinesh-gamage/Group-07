
<!--a href="#top" ><i class="hl-float-top fa fa-arrow-circle-up" style="color: #397df7;" ></i></a-->
<div id="about" class="about-main-block">
    <div class="container">
        <div class="row" style="height: 300px;">
            <div class="col-md-3"></div>                
            <div class="col-md-6">
                <div class="section">
                    <h2 class="section-heading text-center"><span> Change  </span> Password </h2> <hr/>             
                </div> 
                <div>
                    <!--div class="book-top-bar text-center">
                        <span><i class="flaticon-notes hidden-xs"></i>Register Now</span>
                    </div-->
                    <form class="book-form" method="post" action="<?php echo base_url() ?>index.php/send_email/send">
                        
                        
                     


                        <!--div class="form-group">                   
                            <input type="text" class="form-control date-pick" id="appointmentdate" name="appointmentdate" placeholder="Appointment Date" required>
                        </div-->

                         
                        <div class="form-group">                   
                           <input type="text" class="form-control" id="email"  name="email"  placeholder="your recovery Email" required>

                        </div>                
                        <button type="submit" class="btn btn-default" id = "forget_btn"> send </button>
                        
                    </form>
                         
                    
                </div>
            </div>
        </div>     
        <hr/>       
    </div>
                    
</div>



