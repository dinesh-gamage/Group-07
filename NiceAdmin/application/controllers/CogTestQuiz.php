<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CogTestQuiz extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('cognitive_test_model');
    }
    
	public function index()
	{
        $data['quizA'] = $this->cognitive_test_model->viewAQuestion();
        $data['quizB'] = $this->cognitive_test_model->viewBQuestion();
        $data['marks'] = $this->cognitive_test_model->viewMarks();
        $this->load->view('header');
		$this->load->view('cognitive_test/cognitive_test_quiz',$data);
	}
    public function getQuestion(){
        $data['questions'] = $this->cognitive_test_model->all_ques();
        $data['question_id'] = $this->uri->segment(3);
        //$this->load->view('header');
		$this->load->view('cognitive_test/cognitive_test_quiz_view',$data);
        
    }
    public function add_marks(){
        $patient_answer = $this->input->post('answer');
        $correct_answer = $this->input->post('correct');

        if($patient_answer == $correct_answer){
            $marks = 1;      
        }else{
            $marks=0;
        }
        
        $data = array(
            'question_id' => $this->input->post('question_id'),
            'patient_answer' => $patient_answer,
            'correct_answer' => $correct_answer,
            'marks' => $marks
        );
        
        $result = $this->cognitive_test_model->add_marks($data);
        if ($result == TRUE) {
            $data['message_display'] = 'Question added Successfully !';
            $data['quizA'] = $this->cognitive_test_model->viewAQuestion();
            $data['quizB'] = $this->cognitive_test_model->viewBQuestion();
            $data['marks'] = $this->cognitive_test_model->viewMarks();
            $this->load->view('header');
            $this->load->view('cognitive_test/cognitive_test_quiz', $data);
        } else {
            $data['message_display'] = 'Mark added failed!';
            $data['quizA'] = $this->cognitive_test_model->viewAQuestion();
            $data['quizB'] = $this->cognitive_test_model->viewBQuestion();
            $data['marks'] = $this->cognitive_test_model->viewMarks();
            $this->load->view('header');
            $this->load->view('cognitive_test/cognitive_test_quiz', $data);
        }
    }
}
?>
    
 