<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class patient extends CI_Controller {

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
	public function index()
	{
		$this->load->model('appointment');
		$clinic = $this->input->post('clinic');
		$doctor = $this->input->post('doctor');
		$timeslot = $this->input->post('timeslot');
		
		echo $clinic;
		echo $doctor;
        $data = array('clinic'=>$clinic,'doctor'=>$doctor,'timeslot'=>$timeslot);

        
        $this->appointment->add($data);
	}
}