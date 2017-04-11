<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz_questions_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');                    /***** LOADING HELPER TO AVOID PHP ERROR ****/
        $this->load->model('upload_model'); /* LOADING MODEL * Welcome_model as welcome */
    }

    public function index()
    {
        $this->load->view('quiz_question_view');
    }

    public function file_upload(){
        
              $files = $_FILES;
        
                $_FILES['name']= time().$files['name'];
                $_FILES['type']= $files['type'];
                $_FILES['tmp_name']= $files['tmp_name'];
                $_FILES['error']= $files['error'];
                $_FILES['size']= $files['size'];
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = '2000000';
                $config['remove_spaces'] = true;
                $config['overwrite'] = false;
                $config['max_width'] = '';
                $config['max_height'] = '';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload();
                $fileName = $_FILES['name'];
                $images[] = $fileName;
                $path = 

                  $fileName = implode(',',$images);
                  $this->upload_model->upload_image($fileName);//$this->input->post()
                  redirect('Quiz_questions_controller');
                }

//        public function view(){
//            $this->data['view_data']= $this->welcome->view_data();
//            $this->load->view('view', $this->data, FALSE);
//                }
//
//        public function edit($edit_id){
//            $this->data['edit_data']= $this->welcome->edit_data($edit_id);
//            $this->data['edit_data_image']= $this->welcome->edit_data_image($edit_id);
//            $this->load->view('edit', $this->data, FALSE);
//                }
//
//        public function deleteimage(){
//            $deleteid  = $this->input->post('image_id');
//            $this->db->delete('photos', array('id' => $deleteid)); 
//            $verify = $this->db->affected_rows();
//            echo $verify;
//
//        }
//
//
//       public function edit_file_upload(){
//              $files = $_FILES;
//              if(!empty($files['userfile']['name'][0])){
//              $count = count($_FILES['userfile']['name']);
//              $user_id = $this->input->post('user_id');
//              for($i=0; $i<$count; $i++)
//                {
//                $_FILES['userfile']['name']= time().$files['userfile']['name'][$i];
//                $_FILES['userfile']['type']= $files['userfile']['type'][$i];
//                $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
//                $_FILES['userfile']['error']= $files['userfile']['error'][$i];
//                $_FILES['userfile']['size']= $files['userfile']['size'][$i];
//                $config['upload_path'] = './uploads/';
//                $config['allowed_types'] = 'gif|jpg|png|jpeg';
//                $config['max_size'] = '2000000';
//                $config['remove_spaces'] = true;
//                $config['overwrite'] = false;
//                $config['max_width'] = '';
//                $config['max_height'] = '';
//                $this->load->library('upload', $config);
//                $this->upload->initialize($config);
//                $this->upload->do_upload();
//                $fileName = $_FILES['userfile']['name'];
//                $images[] = $fileName;
//                }
//                  $fileName = implode(',',$images);
//                  $this->welcome->edit_upload_image($user_id,$this->input->post(),$fileName);
//                }else
//                {
//              $user_id = $this->input->post('user_id');
//              $this->welcome->edit_upload_image($user_id,$this->input->post());
//                }
//                redirect('welcome/view');
//                }
    }