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
<div class="hl-float opasity50">
    <span class="vertical-text-box" >
        <h6 class="vertical-text">Home Page</h6>
    </span>
</div>
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
                        <span><i class="flaticon-notes hidden-xs"></i>Register Now</span>
                    </div>
                    <div class="book-form">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="pname" name="pname" placeholder="Patient Name" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="age" name="age" placeholder="Patient Age" required>
                                </div>
                                <div class="form-group">
                                    <div id="checkage"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="dob" onfocus="(this.type='date')" name="dob"  placeholder="Date Of Birth" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="tel" name="tel" placeholder="Phone Number" required>
                                </div>
                                <div class="form-group">
                                    <div id="checktel"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="lan" name="lan"  placeholder="Language" required>
                                </div>
                                <div class="form-group select" required>
                                    <select name="gender" id="gender">
                                        <option value="0" name="gender">Female</option>
                                        <option value="1" name="gender">Male</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="sch" name="sch" placeholder="School" required>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="gur" name="gur" placeholder="Guardian Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="rel" name="rel" placeholder="Relationship" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="ref" name="ref" placeholder="Referred By" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="cpass" name="cpass" placeholder="Confirm Password" required>
                                </div>
                                <div class="form-group">
                                    <div id="checkpass"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="div" name="div" placeholder="Divisional Secretariet" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" readonly class="form-control" id="date" name="date" placeholder=""  value="<?php echo date('Y-m-d');?>" required>
                                </div>
                                <!--div class="form-group">
                                    <input type="text" class="form-control date-pick" id="appointmentdate" name="appointmentdate" placeholder="Appointment Date" required>
                                </div-->
                            </div>
                        </div>
                        <textarea class="form-control" id="address" name="address" rows="2" placeholder="Address"></textarea>
                        <button type="submit" id="register_btn" class="btn btn-default">Send Your Request</button>
                    <div id="messagereg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
    
</div>
</div>
<script type="text/javascript">
    $(document).ready(function (){

        //validate password and confirm password
        $('#cpass').keyup(function(){
            if($(this).val()== $('#pass').val()){
                document.getElementById('register_btn').disabled = false ;
                $('#checkpass').html('matching!!!').css('color', 'green');
            }else{
                document.getElementById('register_btn').disabled = true ;
                $('#checkpass').html('not matching with password!!!').css('color', 'red');
            }
        });

        //validate age;
        $('#age').keyup(function(){
            var reg = /^[1-9]{0,3}$/;
            if(!(reg.test($(this).val()))){
                document.getElementById('register_btn').disabled = true ;
                $('#checkage').html('this is not valid').css('color', 'red');
            }else{
                document.getElementById('register_btn').disabled = false ;
                $('#checkage').html('');
            }
        });

        //validate phone number
        $('#tel').keyup(function(){
            var reg1 = /^[0-9]{10}$/;
            var reg2 = /^[0-9]{7}$/;
            if((reg1.test($(this).val())) || (reg2.test($(this).val()))){
                $('#checktel').html('');
                document.getElementById('register_btn').disabled = false ;
            }else{
                document.getElementById('register_btn').disabled = true ;
                $('#checktel').html('this is not valid').css('color', 'red');
            }
        });

        $('#register_btn').click(function(){
            var pname =  $('#pname').val();
            var page =  $('#age').val();
            var pdob =  $('#dob').val();
            var ptel =  $('#tel').val();
            var plan =  $('#lan').val();
            var psch =  $('#sch').val();
            var pgur =  $('#gur').val();
            var prel =  $('#rel').val();
            var pref =  $('#ref').val();
            var ppass =  $('#pass').val();
            var pdiv =  $('#div').val();
            var pdate =  $('#date').val();
            var paddre =  $('#address').val();
            var pgen =  $( "#gender option:selected" ).val();

            $.ajax({
                type: "post",
                url: "http://[::1]/Third_Year_Project/Healthy_life/index.php/Index1/reg_patient/",
                cache: false,
                data: {regbtn: "regbtn",pname:pname,age:page,dob:pdob,tel:ptel,lan:plan,gender:pgen,sch:psch,address:paddre,gur:pgur,rel:prel,ref:pref,pass:ppass,div:pdiv,date:pdate},
                success: function (data) {
                    if(data){
                        $('#pname').val("");
                        $('#age').val("");
                        $('#dob').val("");
                        $('#tel').val("");
                        $('#lan').val("");
                        $('#sch').val("");
                        $('#gur').val("");
                        $('#rel').val("");
                        $('#ref').val("");
                        $('#pass').val("");
                        $('#div').val("");
                        $('#date').val("");
                        $('#address').val("");
                        $('#cpass').val("");
                        $('#messagereg').html('Successfully Registered!!!').css('color','green');
                        setTimeout(function() {
                            $("#messagereg").hide('blind', {}, 500)
                        }, 5000);
                        setTimeout(function() {
                            $("#checkpass").hide('blind', {}, 0)
                        }, 0);
                    }else{
                        $('#pname').val("");
                        $('#age').val("");
                        $('#dob').val("");
                        $('#tel').val("");
                        $('#lan').val("");
                        $('#sch').val("");
                        $('#gur').val("");
                        $('#rel').val("");
                        $('#ref').val("");
                        $('#pass').val("");
                        $('#div').val("");
                        $('#date').val("");
                        $('#address').val("");
                        $('#cpass').val("");
                        $('#messagereg').html('Error occuered while registering .Please Try Again!!!').css('color','red');
                        setTimeout(function() {
                            $("#messagereg").hide('blind', {}, 500)
                        }, 5000);
                        setTimeout(function() {
                            $("#checkpass").hide('blind', {}, 0)
                        }, 0);
                    }
                }

            });

        });

    });



</script>
<!-- end about -->