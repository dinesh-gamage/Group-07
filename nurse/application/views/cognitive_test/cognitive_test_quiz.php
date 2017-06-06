<section id="main-content">
    <section class="wrapper">
        <div class="contentContainer">
            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="<?php echo base_url()."Index1"?>">Home</a></li>
                        <li><i class="fa fa-laptop"></i>Cognitive Tast /  Select Test</li>						  	
                    </ol>
                </div>
                
                <div class="col-md-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">Select Question (A)</div>
                        <div class="panel-body">
                            <?php 
                                foreach($quizA as $ques):
                                    //echo $ques->question_id;
                                    $id = $ques->question_id;
                            ?>
                            
                            <li>
                            <a href="<?php echo base_url() ?>CogTestQuiz/getQuestion/<?php echo $id ?>"><?php echo $id; ?> </a>
                            </li>
                            <?php
                                endforeach;
                            ?>
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">Select Question (B)</div>
                        <div class="panel-body">
                            <?php 
                                foreach($quizB as $ques):
                                    //echo $ques->question_id;
                                    $id = $ques->question_id;
                            ?>
                            
                            <li>
                            <a href="<?php echo base_url() ?>CogTestQuiz/getQuestion/<?php echo $id ?>"><?php echo $id; ?> </a>
                            </li>
                            <?php
                                endforeach;
                            ?>
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">Patient Answers</div>
                        <div class="panel-body">
                            <h3>Test - A</h3>
                            
                            
                            <h3>Test - B</h3>
                            <?php
                                foreach($marks as $patient_mark):
                                $firstLetter = $patient_mark->question_id[0];
                                if($firstLetter =='B'){
                                    $mrks = $patient_mark->marks;
                                    if($mrks == 1){
                                        $status = "Correct";
                                        echo "<div class='correct'>";
                                        echo $patient_mark->question_id."-".$status." (".$mrks.")";
                                        echo "</div>";
                                    }else{
                                        $status = "Incorrect";
                                        echo "<div class='incorrect'>";
                                        echo $patient_mark->question_id."-".$status." (".$mrks.")";
                                        echo "</div>";
                                    }
                                }
                                endforeach;
                            ?>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</section>


