<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sendsms extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function send()
	{
		
	
	
		echo "Your message is sucsesfuly";
		$this->load->model('sendsms');
	
	// Authorisation details.
		$username = "pasanrox01@gmail.com";
		$hash  = "e19e25ab956677fed62d89e9be8c0aa3f11fc75a754c1cf58de3b27e17789eba";

	// Config variables. Consult http://api.txtlocal.com/docs for more info.
		$test = "0";

	// Data for text message. This is the text message data.
		$user   = $this->session->userdata['logged_in']['username'];
		$sender = "Healthy Life"; // This is who the message appears to be from.
		$numbers = "94"+ $this->sendsms->get_receiver($user);// A single number or a comma-seperated list of numbers
		$message = $this->sendsms->get_message($user);
	
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
		$message = urlencode($message);
		$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
		$ch = curl_init('http://api.txtlocal.com/send/?');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch); // This is the result from the API
		  curl_close($ch);

		


	}
}