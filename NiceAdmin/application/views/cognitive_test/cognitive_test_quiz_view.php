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
                        <div class="col-md-1">
                            <div class="panel panel-info">
                                <div class="panel-heading">Questions</div>
                                <div class="panel-body">
                                    <?php 
                                        foreach($quiz as $question):
                                        $id = $question->question_id;
                                    ?>
                                        
                                    <form name="myform" id="myform" action="<?php echo base_url() ?>CogTestQuiz" method="post">
                                        <input type="hidden" name="id" id="id" value="<?php echo $id ?>" />
                                        <input type="submit" value="<?php echo $id ?>" />
                                    </form>
                                    
                                    <!--a href="<!?php echo base_url() ?>applications/views/cognitive_test/cognitive_test_quiz<!?php echo $id ?>"><!?php echo $id; ?> </a-->
                                    <?php
                                        endforeach;
                                    ?>
                                    

                                </div>
                            </div>
                        </div>

                        <div class="col-md-10">
                            <?php 
                                foreach($quiz as $question):
                                echo form_open_multipart('CognitiveTest/add_question');
                            ?>
                           <!-- <div class="panel panel-info">
                                <div class="panel-body">-->
                                    <div class="col-md-12 text-center">
                                        <div class="panel panel-info">
                                            <div class="panel-body">
                                                <img src="<?php echo base_url($question->question); ?>" class="img-thumbnail" width="380px" height="250px" />
                                       <!-- //echo htmlentities(print_r($first_key,true))s-->
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-info">
                                            <div class="panel-body">
                                               <!-- <img src="<!?php echo base_url($question->ans01); ?>" class="img-thumbnail" width="150px" height="150px" />
                                                <img src="<!?php echo base_url($question->ans02); ?>" class="img-thumbnail" width="150px" height="150px" />
                                                <img src="<!?php echo base_url($question->ans03); ?>" class="img-thumbnail" width="150px" height="150px" />
                                                <img src="<!?php echo base_url($question->ans04); ?>" class="img-thumbnail" width="150px" height="150px" />
                                                <img src="<!?php echo base_url($question->ans05); ?>" class="img-thumbnail" width="150px" height="150px" />
                                                <img src="<!?php echo base_url($question->ans06); ?>" class="img-thumbnail" width="150px" height="150px" />-->
                                                
                                                <input type="radio" name="answer" id="ans01" class="input-hidden" />
                                                <label for="ans01">
                                                    <img src="<?php echo base_url($question->ans01); ?>" class="img-thumbnail" width="150px" height="150px" />
                                                </label>
                                                <input type="radio" name="answer" id="ans02" class="input-hidden" />
                                                <label for="ans02">
                                                    <img src="<?php echo base_url($question->ans02); ?>" class="img-thumbnail" width="150px" height="150px" />
                                                </label>
                                                <input type="radio" name="answer" id="ans03" class="input-hidden" />
                                                <label for="ans03">
                                                    <img src="<?php echo base_url($question->ans03); ?>" class="img-thumbnail" width="150px" height="150px" />
                                                </label>
                                                <input type="radio" name="answer" id="ans04" class="input-hidden" />
                                                <label for="ans04">
                                                    <img src="<?php echo base_url($question->ans04); ?>" class="img-thumbnail" width="150px" height="150px" />
                                                </label>
                                                <input type="radio" name="answer" id="ans05" class="input-hidden" />
                                                <label for="ans05">
                                                    <img src="<?php echo base_url($question->ans05); ?>" class="img-thumbnail" width="150px" height="150px" />
                                                </label>
                                                <input type="radio" name="answer" id="ans06" class="input-hidden" />
                                                <label for="ans06">
                                                    <img src="<?php echo base_url($question->ans06); ?>" class="img-thumbnail" width="150px" height="150px" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                              <!--  </div>
                            </div>-->
                            <?php 
                            
                            echo form_close();
                            endforeach; 
                            ?>
                        </div>
                        <div class="col-md-1">
                            <div class="panel panel-info">
                                <div class="panel-heading">Answers</div>
                                <div class="panel-body">
                                    

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </body>
</html>



