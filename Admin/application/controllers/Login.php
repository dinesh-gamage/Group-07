<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->library('form_validation');
        // Load database
		$this->load->model('login_database');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login(){

	 	//$this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
		//$this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');

		
			/*if(isset($this->session->userdata['logged_in'])){
				$this->load->view('index1');
			}else{
				$this->load->view('login');
			}*/
     	
			$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
			);
			$result = $this->login_database->login($data);
			if ($result == true) {

				$username = $this->input->post('username');
				$result = $this->login_database->read_user_information($username);
				if ($result != false) {
					$session_data = array(
					'username' => $result[0]->user_name,
					'email' => $result[0]->email,
					);
				// Add user data in session
				$this->session->set_userdata('logged_in', $session_data);
				$this->load->view('header', $data);
				$this->load->view('index1');
				}
			} else {
				$data = array(
				'error_message' => 'Invalid Username or Password'
				);
				$this->load->view('login', $data);
			}
		
	}
}