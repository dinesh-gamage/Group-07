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
            if(isset($this->session->userdata['logged_in'])){
                redirect('/DoctorView/');
            }else{
                $this->load->view('login/login_form');
            }
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $result = $this->login_database->login($data);
            if ($result == TRUE) {

                $username = $this->input->post('username');
                $result = $this->login_database->read_user_information($username);
                if($result[0]->is_admin == 1){
                    $status = 'Admin';
                }else if($result[0]->is_admin == 2){
                    $status = 'Nurse';
                }else{
                    $status = 'Doctor';
                }
                if ($result != false) {
                    $session_data = array(
                        'username' => $result[0]->user_name,
                        'email' => $result[0]->email,
                        'status' => $status,
                        'name' => $result[0]->doc_name,
                        'picture' => $result[0]->doc_img,
                        'doctorId' => $result[0]->doctor_id,

                    );

                    
                    // Add user data in session
                    $this->session->set_userdata('logged_in', $session_data);
                    if($status==="Doctor"){
                        $data1['doc_data'] = $this->profilemodel->get_doc_data();                    
                        redirect('/DoctorView/');
                    }else if($status==="Doctor"){
                        $data1['doc_data'] = $this->profilemodel->get_doc_data();                    
                        redirect('/NurseView/');
                    }else{
                        $data1['doc_data'] = $this->profilemodel->get_doc_data();                    
                        redirect('/AdminView/');
                    }
                    
                }
            } else {
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
        //$data['message_display'] = 'Successfully Logout';
        $this->load->view('login/login_form');//, $data);
    }

}

?>