<html>
    <header>
        <title>Cognitive Test</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="<?php echo base_url()."asserts/css/custom.css"?>" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </header>
    <body>
        <section id="main-content">
            <section class="wrapper">
                <div class="contentContainer">
                    <div class="row">
                        <!--div class="col-lg-12">
                            <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="<!?php echo base_url()."Index1"?>">Home</a></li>
                                <li><i class="fa fa-laptop"></i>Cognitive Tast /  Select Test</li>						  	
                            </ol>
                        </div-->
                        

                        <div class="col-md-12">
                            <?php 
    
                                $ques_id = $question_id;
                                //echo $ques_id;
              
                                foreach($questions as $question):
              
                                $quest = $question->question_id;
                                //echo $quest;
              
                                if($quest == $ques_id){
                                    echo form_open_multipart('CogTestQuiz/add_marks');
                            ?>
                           
                            <div class="col-md-12 text-center">
                                <div class="panel panel-info">
                                    <div class="panel-body">
                                        <img src="<?php echo base_url($question->question); ?>" class="img-thumbnail" width="380px" height="250px" />
                               <!-- //echo htmlentities(print_r($first_key,true))s-->
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12 text-center">            
                                <div class="panel panel-info">
                                    <div class="panel-body">

                                        <input type="radio" name="answer" value="<?php echo $question->ans01; ?>" id="ans01" class="input-hidden" onclick="javascript: submit()" />
                                        <label for="ans01">
                                            <img src="<?php echo base_url($question->ans01); ?>" class="img-thumbnail" width="150px" height="150px"  />
                                        </label>
                                        <input type="radio" name="answer" value="<?php echo $question->ans02; ?>" id="ans02" class="input-hidden" onclick="javascript: submit()" />
                                        <label for="ans02">
                                            <img src="<?php echo base_url($question->ans02); ?>" class="img-thumbnail" width="150px" height="150px" />
                                        </label>
                                        <input type="radio" name="answer" value="<?php echo $question->ans03; ?>" id="ans03" class="input-hidden" onclick="javascript: submit()" />
                                        <label for="ans03">
                                            <img src="<?php echo base_url($question->ans03); ?>" class="img-thumbnail" width="150px" height="150px" />
                                        </label>
                                        <input type="radio" name="answer" value="<?php echo $question->ans04; ?>" id="ans04" class="input-hidden" onclick="javascript: submit()" />
                                        <label for="ans04">
                                            <img src="<?php echo base_url($question->ans04); ?>" class="img-thumbnail" width="150px" height="150px" />
                                        </label>
                                        <input type="radio" name="answer" value="<?php echo $question->ans05; ?>" id="ans05" class="input-hidden" onclick="javascript: submit()" />
                                        <label for="ans05">
                                            <img src="<?php echo base_url($question->ans05); ?>" class="img-thumbnail" width="150px" height="150px" />
                                        </label>
                                        <input type="radio" name="answer" value="<?php echo $question->ans06; ?>" id="ans06" class="input-hidden" onclick="javascript: submit()"  />
                                        <label for="ans06">
                                            <img src="<?php echo base_url($question->ans06); ?>" class="img-thumbnail" width="150px" height="150px" />
                                        </label>
                                        <input type="hidden" name="correct" value="<?php echo $question->correct_answer; ?>" />
                                        <input type="hidden" name="question_id" value="<?php echo $question->question_id; ?>" />
                                    </div>
                                </div>
                            </div> 
                            
                            <?php 
                                }
                                echo form_close();
                                endforeach; 
                            ?>
                            
                        </div>
                        
                        
                        
                        
                    </div>
                </div>
            </section>
        </section>
    </body>
</html>



