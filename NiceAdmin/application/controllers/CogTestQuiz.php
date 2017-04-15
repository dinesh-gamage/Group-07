<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CogTestQuiz extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('cognitive_test_model');
    }
    
	public function index()
	{
        $data['questions'] = $this->cognitive_test_model->all_ques();
        $this->load->view('header');
		$this->load->view('cognitive_test/cognitive_test_quiz',$data);
	}
    public function getQuestion(){
        $question_id = $this->uri->segment(3);
    }
}
?>
    
 