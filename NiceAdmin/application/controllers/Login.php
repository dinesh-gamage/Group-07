<?php

Class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // Load form helper library
        $this->load->helper('form');

        // Load form validation library
        $this->load->library('form_validation');

        // Load session library
        $this->load->library('session');

        // Load database
        $this->load->model('login_database');
    }


    
    // Show login page
    public function index() {
        $this->load->view('login/login_form');
    }

    // Show registration page
    public function user_registration_show() {
        $this->load->view('login/registration_form');
    }

    // Validate and store registration data in database
    public function new_user_registration() {

        // Check validation for user input in SignUp form
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('email_value', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login/registration_form');
        } else {

            //image upload
            if(!empty($_FILES['picture']['name'])){
                $config = array(
                    'upload_path' => "./uploads/",
                    'allowed_types' => "gif|jpg|png|jpeg|pdf",
                    'file_name' => $_FILES['picture']['name'],
                    'overwrite' => TRUE,
                    'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                    'max_height' => "768",
                    'max_width' => "1024"
                );
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('picture')) {
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }

            $data = array(
                'doctor_id' => $this->input->post('userid'),
                'doc_name' => $this->input->post('myname'),
                'user_name' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'speciality' => $this->input->post('spec'),
                'email' => $this->input->post('email_value'),
                'telephone' => $this->input->post('contact'),
                'profile_pic' => 'uploads/'.$picture

            );

            $result = $this->login_database->registration_insert($data);
            if ($result == TRUE) {
                $data['message_display'] = 'Registration Successfully !';
                $this->load->view('login/login_form', $data);
            } else {
                $data['message_display'] = 'Username already exist!';
                $this->load->view('login/registration_form', $data);
            }

        }
    }

    // Check for user login process
    public function user_login_process() {

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
//            if(isset($this->session->userdata['logged_in'])){
//                redirect('/DoctorView/');
//            }else{
//                $this->load->view('login/login_form');
//            }
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $result = $this->login_database->login($data);
            $result2 = $this->login_database->nurse_login($data);
            if ($result) {
                $username = $this->input->post('username');
                $result = $this->login_database->read_user_information($username);
                if($result[0]->is_admin == 1){
                    $status = 'Admin';
                }else{
                    $status = 'Doctor';
                }
                if ($result != false) {
                   

                    
                    // Add user data in session
                    
                    if($status==="Doctor"){
                         $session_data = array(
                            'username' => $result[0]->user_name,
                            'email' => $result[0]->email,
                            'status' => $status,
                            'name' => $result[0]->doc_name,
                            'picture' => $result[0]->doc_img,
                            'doctorId' => $result[0]->doctor_id,

                        );
                        $this->session->set_userdata('logged_in', $session_data);
                        $data1['doc_data'] = $this->profilemodel->get_doc_data();                    
                        redirect('/DoctorView/');
                    }else{
                        $session_data = array(
                            'username' => $result[0]->user_name,
                            'email' => $result[0]->email,
                            'status' => $status,
                            'name' => $result[0]->doc_name,
                            'picture' => $result[0]->doc_img,
                            'doctorId' => $result[0]->doctor_id,
                            
                            

                        );
                        $this->session->set_userdata('logged_in', $session_data);
                        $data1['doc_data'] = $this->profilemodel->get_doc_data();                    
                        redirect('/DoctorView/');
                    }
                    
                }
            } else if($result2){
                $username = $this->input->post('username');
                $result3 = $this->login_database->read_nurse_information($username);
                if($result3[0]->is_director == 1){
                    $status = 'Director';
                }else{
                    $status = 'Nurse';
                }
                if ($result3 != false) {
                        $this->session->set_userdata('nur_username',  $result3[0]->user_name);
                        $this->session->set_userdata('nur_name',  $result3[0]->nurse_name);
                        $this->session->set_userdata('nurseId',  $result3[0]->nurse_id);
                        $this->session->set_userdata('status',  $status);
                        if($status==="Nurse"){
                            $data1['nur_data'] = $this->profilemodel->get_nur_data();                    
                            redirect('/NurseView/');
                        }else{
                            $data1['nur_data'] = $this->profilemodel->get_nur_data();                    
                            redirect('/DirectorView/');
                        }
                        
                    }
                
            }else{
                $data = array(
                    'error_message' => 'Invalid Username or Password'
                );
                $this->load->view('login/login_form', $data);
            }
        }
    }

    // Logout from admin page
    public function logout() {

        // Removing session data
        $sess_array = array(
            'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $this->session->unset_userdata('nur_username');
        $this->session->unset_userdata('nur_name');
        $this->session->unset_userdata('nurseId');
        //$data['message_display'] = 'Successfully Logout';
        
        $this->load->view('login/login_form');//, $data);
    }
    public function checkUsername(){
        if(isset($_POST['cuser'])){
            $cuser = $this->login_database->cUsername($_POST['cuser']);
            echo $cuser;
        }
    }
    public function checkUsernamenur(){
        if(isset($_POST['cnur'])){
            $cuser = $this->login_database->cnurUsername($_POST['cnur']);
            echo $cuser;
        }

    }

}

?>