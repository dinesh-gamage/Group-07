<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CogTestQuizView extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('cognitive_test_view_model');
    }
    
	public function index()
	{
        $data['quiz'] = $this->cognitive_test_view_model->viewBQuestion();
        //$this->load->view('header');
		$this->load->view('cognitive_test/cognitive_test_quiz_view',$data);
	}
}
?>
    
 