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
                        <div class="panel-heading">Select Test</div>
                        <div class="panel-body">
                            <?php 
                                foreach($questions as $ques):
                                    //echo $ques->question_id;
                                    $id = $ques->question_id;
                            ?>
                            
                            <li>
                            <a href="<?php echo base_url() ?>CogTestQuiz/getQuestion<?php echo $id ?>"><?php echo $id; ?> </a>
                            </li>
                            <?php
                                endforeach;
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>


