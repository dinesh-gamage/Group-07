 <div class="row">
     <div class="col-lg-2"></div>
     <div class="col-lg-8" style="margin-top: 10px;">
                    <div class="center-block">
                    <div class="book-top-bar text-center">
                        <span><i class="flaticon-notes hidden-xs"></i>Register Now</span>
                    </div>
                    <div class="book-form">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group" >
                                    <input type="text" class="form-control" id="pname" name="pname" placeholder="Patient Name" >
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
                                    <select id="lan" name="lan" class="form-control" >
                                            <option value="Sinhala" name="lan">Sinhala</option>
                                            <option value="Tamil" name="lan">Tamil</option>
                                            <option value="English" name="lan">English</option>
                                    </select>
                                </div>
                                <div class="form-group select" required>
                                    <select name="gender" id="gender">
                                        <option value="Female" name="gender">Female</option>
                                        <option value="Male" name="gender">Male</option>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="gur" name="gur" placeholder="Guardian Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" list="gar" class="form-control" id="rel" name="rel" placeholder="Relationship" required>
                                      <datalist id="gar">
                                        <option value="Father">
                                        <option value="Mother">
                                      </datalist>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="sch" name="sch" placeholder="School" required>
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
                                <div class="form-group" hidden>
                                    <input  type="text" class="form-control" id="div" value="Karapitiya" name="div" placeholder="Divisional Secretariet" >
                                </div>
                                <div class="form-group" hidden>
                                    <input type="text"  class="form-control" id="date" name="date" placeholder=""  value="<?php echo date('Y-m-d');?>" >
                                </div>
                                <!--div class="form-group">
                                    <input type="text" class="form-control date-pick" id="appointmentdate" name="appointmentdate" placeholder="Appointment Date" required>
                                </div-->
                            </div>
                        </div>
                        <textarea class="form-control" id="address" name="address" rows="2" placeholder="Address"></textarea>
                        <button type="submit" id="register_btn" class="btn btn-default">Send Your Request</button>
                    <div class="text-center" id="messagereg"></div>
                    </div>
                </div>
                </div>
            </div>

<script type="text/javascript">
    $(document).ready(function (){

        //validate password and confirm password
        $('#cpass').keyup(function(){
            if($(this).val()== $('#pass').val()){
                document.getElementById('register_btn').disabled = false ;
                $('#checkpass').html('Matching!!!').css('color', 'green');
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
                $('#checkage').html('Please Enter Valid Age').css('color', 'red');
            }else{
                document.getElementById('register_btn').disabled = false ;
                $('#checkage').html('');
            }
        });

        //validate phone number
        $('#tel').keyup(function(){
            var reg1 = /^[0-9]{10}$/;
            if((reg1.test($(this).val()))){
                $('#checktel').html('');
                document.getElementById('register_btn').disabled = false ;
            }else if(reg1.test($(this).val()=== "")){
                $('#checktel').html('Please Enter a Contact Number');
                document.getElementById('register_btn').disabled = true ;
            }else{
                document.getElementById('register_btn').disabled = true ;
                $('#checktel').html('Please Enter a Valid Contact Number').css('color', 'red');
            }
        });

        $('#register_btn').click(function(){

            var pname =  $('#pname').val();
            var page =  $('#age').val();
            var pdob =  $('#dob').val();
            var ptel =  $('#tel').val();
            var plan =  $( "#lan option:selected" ).val();
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
                url: "http://[::1]/project/Group-07/Healthy_life/Register/reg_patient/",
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
                            $("#checkpass").hide('blind', {}, 0);
                        }, 0);

                    }
                }

            });
            

        });

    });



</script>
<!-- end abou