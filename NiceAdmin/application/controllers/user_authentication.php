<?php

//session_start(); //we need to start session in order to access it through CI

Class User_Authentication extends CI_Controller {

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
$this->load->view('login_form');
}

// Show registration page
public function user_registration_show() {
$this->load->view('registration_form');
}

// Validate and store registration data in database
public function new_user_registration() {

// Check validation for user input in SignUp form
$this->form_validation->set_rules('username', 'Username', 'trim|required');
$this->form_validation->set_rules('email_value', 'Email', 'trim|required');
$this->form_validation->set_rules('password', 'Password', 'trim|required');
if ($this->form_validation->run() == FALSE) {
	$data['nurse'] = $this->profilemodel->getNurse();
	$data['doctors'] = $this->profilemodel->getDoctors();
	$data1['doc_data'] = $this->profilemodel->get_admin_data();	
	$this->load->view('main/admin_header',$data1);
	$this->load->view('admin/admin_view_admin', $data);
} else {

//image upload
if(!empty($_FILES['picture']['name'])){
	$config = array(
	'upload_path' => "./asserts/images/doc_img/",
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
'doc_name' => $this->input->post('myname'),
'user_name' => $this->input->post('username'),
'password' => sha1($this->input->post('password')),
'speciality' => $this->input->post('spec'),
'email' => $this->input->post('email_value'),
'telephone' => $this->input->post('contact'),
<<<<<<< HEAD
//'profile_pic' => 'uploads/'.$picture
=======
'doc_img' => 'asserts/images/doc_img/'.$picture,
'is_admin' =>0
>>>>>>> 9cfd15dd57bf5b772d31f405ec96ee960ed1dd60

);

$result = $this->login_database->registration_insert($data);
if ($result == TRUE) {
	$data['nurse'] = $this->profilemodel->getNurse();
	$data['doctors'] = $this->profilemodel->getDoctors();
	$data1['doc_data'] = $this->profilemodel->get_admin_data();
	$data['message_display'] = 'Registration Successfully !';
    $this->load->view('main/admin_header',$data1);
	$this->load->view('admin/admin_view_admin', $data);
} else {
	$data['doctors'] = $this->profilemodel->getDoctors();
	$data['nurse'] = $this->profilemodel->getNurse();
	$data1['doc_data'] = $this->profilemodel->get_admin_data();	
	$data['message_display'] = 'Username already exist!';
	$this->load->view('main/admin_header',$data1);
	$this->load->view('admin/admin_view_admin', $data);
}

}
}

public function new_nur_registration() {

// Check validation for user input in SignUp form
$this->form_validation->set_rules('nurusername', 'Username', 'trim|required');
$this->form_validation->set_rules('nuremail_value', 'Email', 'trim|required');
$this->form_validation->set_rules('nurpassword', 'Password', 'trim|required');
if ($this->form_validation->run() == FALSE) {
	$data['nurse'] = $this->profilemodel->getNurse();
	$data['doctors'] = $this->profilemodel->getDoctors();
	$data1['doc_data'] = $this->profilemodel->get_admin_data();	
	$this->load->view('main/admin_header',$data1);
	$this->load->view('admin/admin_view_admin', $data);
} else {

//image upload
if(!empty($_FILES['nurpicture']['name'])){
	$config = array(
	'upload_path' => "./asserts/images/nur_img/",
	'allowed_types' => "gif|jpg|png|jpeg|pdf",
	'file_name' => $_FILES['nurpicture']['name'],
	'overwrite' => TRUE,
	'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
	'max_height' => "768",
	'max_width' => "1024"
	);
	$this->load->library('upload', $config);
	$this->upload->initialize($config);

	if ($this->upload->do_upload('nurpicture')) {
		$uploadData = $this->upload->data();
		$picture = $uploadData['file_name'];
	}else{
		$picture = '';
	}
}else{
	$picture = '';
}

$data = array(
'nurse_name' => $this->input->post('nurname'),
'user_name' => $this->input->post('nurusername'),
'password' => sha1($this->input->post('nurpassword')),
'email' => $this->input->post('nuremail_value'),
'telephone' => $this->input->post('nurcontact'),
'nur_image' => 'asserts/images/nur_img/'.$picture,
'is_director' =>0

);

$result = $this->login_database->nurregistration_insert($data);
if ($result == TRUE) {
	$data['nurse'] = $this->profilemodel->getNurse();
	$data['doctors'] = $this->profilemodel->getDoctors();
	$data1['doc_data'] = $this->profilemodel->get_admin_data();
	$data['message_display'] = 'Registration Successfully !';
    $this->load->view('main/admin_header',$data1);
	$this->load->view('admin/admin_view_admin', $data);
} else {
	$data['nurse'] = $this->profilemodel->getNurse();
	$data['doctors'] = $this->profilemodel->getDoctors();
	$data1['doc_data'] = $this->profilemodel->get_admin_data();	
	$data['message_display'] = 'Username already exist!';
	$this->load->view('main/admin_header',$data1);
	$this->load->view('admin/admin_view_admin', $data);
}

}
}

// Check for user login process
public function user_login_process() {

$this->form_validation->set_rules('username', 'Username', 'trim|required');
$this->form_validation->set_rules('password', 'Password', 'trim|required');

if ($this->form_validation->run() == FALSE) {
if(isset($this->session->userdata['logged_in'])){
$this->load->view('header');
$this->load->view('index1');
}else{
$this->load->view('login_form');
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
if ($result != false) {
$session_data = array(
'username' => $result[0]->user_name,
'email' => $result[0]->email,

);
<<<<<<< HEAD

//$pic = array('picture' => $result[0]->profile_pic );
=======
$pic = array('picture' => $result[0]->profile_pic );
>>>>>>> 9cfd15dd57bf5b772d31f405ec96ee960ed1dd60
// Add user data in session
$this->session->set_userdata('logged_in', $session_data);
$this->load->view('header');
$this->load->view('index1');
}
} else {
$data = array(
'error_message' => 'Invalid Username or Password'
);
$this->load->view('login_form', $data);
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
$data['message_display'] = 'Successfully Logout';
$this->load->view('login/login_form', $data);
}

}

?>  