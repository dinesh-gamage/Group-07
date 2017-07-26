<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CogTestQuiz extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('cognitive_test_model');
    }
    
	public function index()
	{
        $data1['doc_data'] = $this->profilemodel->get_doc_data();
        $data['quizA'] = $this->cognitive_test_model->viewAQuestion();
        $data['quizB'] = $this->cognitive_test_model->viewBQuestion();
        $data['marks'] = $this->cognitive_test_model->viewMarks($patient_id);
        $this->load->view('main/header',$data1);
		$this->load->view('cognitive_test/cognitive_test_quiz',$data);
	}
    public function getMarksB(){
         $patient_id = $this->input->post('id');
         $marks = $this->cognitive_test_model->viewMarks($patient_id);
                                    
                                       foreach($marks as $patient_mark):
                                        $firstLetter = $patient_mark->question_id[0];
                                        if($firstLetter =='B'){
                                            $mrks = $patient_mark->marks;
                                            if($mrks == 1){
                                                echo 
                                                 '<div class="correct">
                                                 '.$patient_mark->question_id.'- Correct - '.$mrks.'
                                                 </div>';
                                            }else{
                                                echo
                                                 '<div class="incorrect">
                                                 '.$patient_mark->question_id.'- Incorrect -'.$mrks.'
                                                </div>';
                                            }
                                        }
                                        endforeach;
                                   
    }
    
    public function getMarksA(){
         $patient_id = $this->input->post('id');
         $marks = $this->cognitive_test_model->viewMarks($patient_id);
                                    
                                       foreach($marks as $patient_mark):
                                        $firstLetter = $patient_mark->question_id[0];
                                        if($firstLetter =='A'){
                                            $mrks = $patient_mark->marks;
                                            if($mrks == 1){
                                                echo 
                                                 '<div class="correct">
                                                 '.$patient_mark->question_id.'- Correct - '.$mrks.'
                                                 </div>';
                                            }else{
                                                echo
                                                 '<div class="incorrect">
                                                 '.$patient_mark->question_id.'- Incorrect -'.$mrks.'
                                                </div>';
                                            }
                                        }
                                        endforeach;
                                   
    }
    
    public function getTest(){
        $sequence = 0;
        $patient_id = $this->input->post('patientid');
        $type = $this->input->post('testType');
        $data['sequence'] = $sequence;
        $data['type'] = $type;
        $data['patient_id'] = $patient_id;
        $data['marks'] = $this->cognitive_test_model->viewMarks($patient_id);
        $data['questions'] = $this->cognitive_test_model->getTestByType($type);
        $marks = $this->cognitive_test_model->viewMarks($patient_id);
		$this->load->view('cognitive_test/cognitive_test_quiz_view',$data);
       
        
        
    }
    public function add_marks(){
        $patient_answer = $this->input->post('answer');
        $correct_answer = $this->input->post('correct');
        $sequence = $this->input->post('sequence');
        $sequence+=1;

        if($patient_answer == $correct_answer){
            $marks = 1;      
        }else{
            $marks=0;
        }
        
        $data = array(
            'question_id' => $this->input->post('question_id'),
            'patient_id' => $this->input->post('patient_id'),
            'patient_answer' => $patient_answer,
            'correct_answer' => $correct_answer,
            'marks' => $marks
        );
        
        $result = $this->cognitive_test_model->add_marks($data);
        if ($result == TRUE) {
            
            $patient_id = $this->input->post('patient_id');
            $type = $this->input->post('testType');
            $data['sequence'] = $sequence;
            $data['type'] = $type;
            $data['patient_id'] = $patient_id;
            $data['marks'] = $this->cognitive_test_model->viewMarks($patient_id);
            $data['questions'] = $this->cognitive_test_model->getTestByType($type);
            $data['marks'] = $this->cognitive_test_model->viewMarks($patient_id);
            $data['message_display'] = 'Mark added Successfully !';
            $this->load->view('cognitive_test/cognitive_test_quiz_view',$data);
            
        } else {
            
            $patient_id = $this->input->post('patient_id');
            $type = $this->input->post('testType');
            $data['sequence'] = $sequence;
            $data['type'] = $type;
            $data['patient_id'] = $patient_id;
            $data['marks'] = $this->cognitive_test_model->viewMarks($patient_id);
            $data['questions'] = $this->cognitive_test_model->getTestByType($type);
            $data['marks'] = $this->cognitive_test_model->viewMarks($patient_id);
            $data['message_display'] = 'Mark added failed!';
            $this->load->view('cognitive_test/cognitive_test_quiz_view',$data);
            
        }
        
        
        
    }
}
?>
    
 