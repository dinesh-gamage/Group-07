<section id="main-content">
    <section class="wrapper">
        <div class="contentContainer">
            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="<?php echo base_url()."Index1"?>">Home</a></li>
                        <li><i class="fa fa-laptop"></i>Cognitive Tast /  Add Questions</li>						  	
                    </ol>
                </div>
                
                <div class="col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">Add Question</div>
                        <div class="panel-body">
                            <?php
                            echo "<div class='error_msg'>";
                            echo validation_errors();
                            echo "</div>";
                            echo "<div class='error_msg'>";
                            if (isset($message_display)) {
                                echo $message_display;
                            }
                            echo "</div>";

                            $attri = array('class'=>'form-horizontal');
                            echo form_open_multipart('CognitiveTest/add_question',$attri);
                            
                                                         


                            //Quewstion ID
                            echo"<div class='form-group'>";
                            echo"<div class='col-sm-4'>";
                            echo form_label('Question ID : ','class="control-label"');
                            echo"</div>";
                            //Question input
                            echo"<div class='ccol-sm-push-12'>";
                            echo form_input('ques_id');
                            echo"</div>";
                            echo"</div>";
                                    
                            //Quewstion lable
                            echo"<div class='form-group'>";
                            echo"<div class='col-sm-4'>";
                            echo form_label('Question : ','class="control-label"');
                            echo"</div>";
                            //Question input
                            echo"<div class='ccol-sm-push-12'>";
                                $data = array(
                                    'type' => 'file',
                                    'name' => 'question',
                                    'required'=>'required'
                                );
                            echo form_input($data,'class="form-control"');
                            echo"</div>";
                            echo"</div>";

                            //Answer 01 lable
                            echo"<div class='form-group'>";
                            echo"<div class='col-sm-4'>";
                            echo form_label('Answer 01 : ','class="control-label"');
                            echo"</div>";
                             
                            //Answer 01 input
                            echo"<div class='col-sm-push-12'>";
                                $data = array(
                                    'type' => 'file',
                                    'name' => 'ans01',
                                    'required'=>'required'
                                );
                            echo form_input($data,'class="form-control"');
                            echo "</div>";
                            echo "</div>";
                                
                            //Answer02 lble                                                         
                            echo"<div class='form-group'>";
                            echo"<div class='col-sm-4'>";
                            echo form_label('Answer 02 : ','class="control-label"');
                            echo "</div>";
                                                        
                            //answer02 input
                            echo"<div class='col-sm-push-12'>";
                                $data = array(
                                    'type' => 'file',
                                    'name' => 'ans02',
                                    'required'=>'required'
                                );
                            echo form_input($data,'class="form-control"');
                            echo"</div>";
                            echo"</div>";

                            //Answer03 lable
                            echo"<div class='form-group'>";
                            echo"<div class='col-sm-4'>";
                            echo form_label('Answer 03 : ','class="control-label"');
                            echo "</div>";
                                    
                            //answer03 input
                            echo"<div class='col-sm-push-12'>";
                                $data = array(
                                    'type' => 'file',
                                    'name' => 'ans03',
                                    'required'=>'required'
                                );
                            echo form_input($data,'class="form-control"');
                            echo"</div>";
                            echo"</div>";

                            //Answer04 lable
                            echo"<div class='form-group'>";
                            echo"<div class='col-sm-4'>";
                            echo form_label('Answer 04 : ','class="control-label"');
                            echo "</div>";
                                                         
                            //answer 04 input
                            echo"<div class='col-sm-push-12'>";
                                $data = array(
                                    'type' => 'file',
                                    'name' => 'ans04',
                                    'required'=>'required'
                                );
                            echo form_input($data,'class="form-control"');
                            echo"</div>";
                            echo"</div>";

                            //answer05 lable
                            echo"<div class='form-group'>";
                            echo"<div class='col-sm-4'>";
                            echo form_label('Answer 05 : ','class="control-label"');
                            echo "</div>";
                                                         
                            //answer05 input
                            echo"<div class='col-sm-push-12'>";
                                $data = array(
                                    'type' => 'file',
                                    'name' => 'ans05',
                                    'required'=>'required'
                                );
                            echo form_input($data,'class="form-control"');
                            echo"</div>";
                            echo"</div>";

                            //answer 06 lable
                            echo"<div class='form-group'>";
                            echo"<div class='col-sm-4'>";
                            echo form_label('Answer 06 : ','class="control-label"');
                            echo "</div>";
                                                         
                            //answer06 input
                            echo"<div class='col-sm-push-12'>";
                                $data = array(
                                    'type' => 'file',
                                    'name' => 'ans06',
                                    'required'=>'required'
                                );
                            echo form_input($data,'class="form-control"');
                            echo"</div>";
                            echo"</div>";

                            //correct answer lable
                            echo"<div class='form-group'>";
                            echo"<div class='col-sm-4'>";
                            echo form_label('Correct Answer : ','class="control-label"');
                            echo "</div>";
                                                         
                            //correct answer input
                            echo"<div class='col-sm-push-12'>";
                                $data = array(
                                    'type' => 'file',
                                    'name' => 'correct',
                                    'required'=>'required'
                                );
                            echo form_input($data,'class="form-control"');
                            echo"</div>";
                            echo"</div>";

                            //test tyoe lable
                            echo"<div class='form-group'>";
                            echo"<div class='col-sm-4'>";
                            echo form_label('Test type : ','class="control-label"');
                            echo "</div>";
                                                         
                            //test type input
                            echo"<div class='col-sm-push-12'>";
                            $options = array(
                                'A' => 'A',
                                'B' => 'B',
                            );
                                                    
                            echo form_dropdown('test_type', $options,'class="dropdown_box1"');
                            echo"</div>";
                            echo"</div>";


                            //button
                            echo"<div class='form-group'>";
                            echo"<div class='col-sm-4'>";
                            echo "</div>";
                            echo"<div class='col-sm-push-12'>";
                            echo form_submit('submit', 'Save');
                            echo "</div>";
                            echo "</div>";
                            echo form_close();
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Cognitive Test - Type A - Questions</a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <?php 
                                        foreach($questions as $ques):
                                        if($ques->type == "A"){
                                        ?>

                                        <img src="<?php echo base_url($ques->question); ?>" class="img-thumbnail" width="100px" height="100px" />
                                    
                                        
                                    <?php
                                        }
                                        endforeach;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Cognitive Test - Type B - Questions</a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php 
                                        foreach($questions as $ques):
                                        if($ques->type == "B"){
                                    ?>
                                    <a href="#" id="pop">
                                        
                                        <img src="<?php echo base_url($ques->question); ?>" class="img-thumbnail" width="100px" height="100px" />
                                         <!--span class="centertext"><!?php echo $ques->question_id; ?></span-->   
                                        
                                    </a>
                                        
                                    <?php
                                        }
                                        endforeach;
                                    ?>
                                </div>
                            
                            </div>
                        </div>
                        
                        <!-- Creates the bootstrap modal where the image will appear ->
                        <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Question preview</h4>
                                    </div>
                                    <div class="modal-body">
                                        <img src="" id="imagepreview" style="width: 400px; height: 264px;" >
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
</body>

<script>
    $("#pop").on("click", function() {
        $('#imagepreview').attr('src', $('#imageresource').attr('src')); // here asign the image to the modal when the user click the enlarge link
        $('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
});
</script>
<script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});

  </script>
</html>