<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CognitiveTest extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('cognitive_test_model');
    }
    
	public function index()
	{
        $data['questions'] = $this->cognitive_test_model->all_ques();
		$this->load->view('header');
		$this->load->view('cognitive_test/add_ques',$data);
	}
    
    public function add_question(){
        //validation for question
        if(!empty($_FILES['question']['name'])){
            $config = array(
                'upload_path' => "./uploads/cognitiveTest/",
                'allowed_types' => "jpg|png|jpeg",
                'file_name' => $_FILES['question']['name'],
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "768",
                'max_width' => "1024"
            );
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('question')) {
                $uploadData = $this->upload->data();
                $question = $uploadData['file_name'];
            }else{
                $question = '';
            }
        }else{
            $question = '';
        }
        
        
        //validation for answer01
        if(!empty($_FILES['ans01']['name'])){
            $config = array(
                'upload_path' => "./uploads/cognitiveTest/",
                'allowed_types' => "jpg|png|jpeg",
                'file_name' => $_FILES['ans01']['name'],
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "768",
                'max_width' => "1024"
            );
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('ans01')) {
                $uploadData = $this->upload->data();
                $ans01 = $uploadData['file_name'];
            }else{
                $ans01 = '';
            }
        }else{
            $ans01 = '';
        }
        
        //validation for answer02
        if(!empty($_FILES['ans02']['name'])){
            $config = array(
                'upload_path' => "./uploads/cognitiveTest/",
                'allowed_types' => "jpg|png|jpeg",
                'file_name' => $_FILES['ans02']['name'],
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "768",
                'max_width' => "1024"
            );
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('ans02')) {
                $uploadData = $this->upload->data();
                $ans02 = $uploadData['file_name'];
            }else{
                $ans02 = '';
            }
        }else{
            $ans02 = '';
        }

        
        //validation for answer01
        if(!empty($_FILES['ans03']['name'])){
            $config = array(
                'upload_path' => "./uploads/cognitiveTest/",
                'allowed_types' => "jpg|png|jpeg",
                'file_name' => $_FILES['ans03']['name'],
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "768",
                'max_width' => "1024"
            );
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('ans03')) {
                $uploadData = $this->upload->data();
                $ans03 = $uploadData['file_name'];
            }else{
                $ans03 = '';
            }
        }else{
            $ans03 = '';
        }
        
        
        //validation for answer01
        if(!empty($_FILES['ans04']['name'])){
            $config = array(
                'upload_path' => "./uploads/cognitiveTest/",
                'allowed_types' => "jpg|png|jpeg",
                'file_name' => $_FILES['ans04']['name'],
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "768",
                'max_width' => "1024"
            );
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('ans04')) {
                $uploadData = $this->upload->data();
                $ans04 = $uploadData['file_name'];
            }else{
                $ans04 = '';
            }
        }else{
            $ans04 = '';
        }
        
        
        //validation for answer01
        if(!empty($_FILES['ans05']['name'])){
            $config = array(
                'upload_path' => "./uploads/cognitiveTest/",
                'allowed_types' => "jpg|png|jpeg",
                'file_name' => $_FILES['ans05']['name'],
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "768",
                'max_width' => "1024"
            );
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('ans05')) {
                $uploadData = $this->upload->data();
                $ans05 = $uploadData['file_name'];
            }else{
                $ans05 = '';
            }
        }else{
            $ans05 = '';
        }
        
        
        //validation for answer01
        if(!empty($_FILES['ans06']['name'])){
            $config = array(
                'upload_path' => "./uploads/cognitiveTest/",
                'allowed_types' => "jpg|png|jpeg",
                'file_name' => $_FILES['ans06']['name'],
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "768",
                'max_width' => "1024"
            );
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('ans06')) {
                $uploadData = $this->upload->data();
                $ans06 = $uploadData['file_name'];
            }else{
                $ans06 = '';
            }
        }else{
            $ans06 = '';
        }
        
        //validation for answer01
        if(!empty($_FILES['correct']['name'])){
            $config = array(
                'upload_path' => "./uploads/cognitiveTest/",
                'allowed_types' => "jpg|png|jpeg",
                'file_name' => $_FILES['correct']['name'],
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "768",
                'max_width' => "1024"
            );
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('correct')) {
                $uploadData = $this->upload->data();
                $correct = $uploadData['file_name'];
            }else{
                $correct = '';
            }
        }else{
            $correct = '';
        }
        
        $data = array(
            'question_id' => $this->input->post('ques_id'),
            'question' => 'uploads/cognitiveTest/'.$question,
            'ans01' => 'uploads/cognitiveTest/'.$ans01,
            'ans02' => 'uploads/cognitiveTest/'.$ans02,
            'ans03' => 'uploads/cognitiveTest/'.$ans03,
            'ans04' => 'uploads/cognitiveTest/'.$ans04,
            'ans05' => 'uploads/cognitiveTest/'.$ans05,
            'ans06' => 'uploads/cognitiveTest/'.$ans06,
            'correct_answer' => 'uploads/cognitiveTest/'.$correct,
            'type' => $this->input->post('test_type')        

        );

        $result = $this->cognitive_test_model->add_questions($data);
        if ($result == TRUE) {
            //$data['message_display'] = 'Question added Successfully !';
            $this->load->view('cognitive_test/add_ques');//, $data);
        } else {
            //$data['message_display'] = 'question added failed!';
            $this->load->view('cognitive_test/add_ques');//, $data);
        }

    }
}
    
    
?>