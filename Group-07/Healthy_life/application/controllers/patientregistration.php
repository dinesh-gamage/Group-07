<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class patientregistration extends CI_Controller {

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
		$this->load->model('patient_registration');
		$patient_id = $this->input->post('pid');
		$password = $this->input->post('password');
		$patien_name = $this->input->post('uname');
		$registration_date = $this->input->post('meeting');
		$address = $this->input->post('address');
		$gender = $this->input->post('gender');
		$age = $this->input->post('age');
		$dob = $this->input->post('meeting');
		$guardian_name = $this->input->post('Guardian name');
		$telephone= $this->input->post('Telephone number');
		$relatonship = $this->input->post('relationship');
		$language = $this->input->post('language');
		$refered_by = $this->input->post('referedby');
		$school = $this->input->post('school');
		$division = $this->input->post('division');
        
        $data = array('patient_id'=>$patient_id,'password'=>$password,'patien_name'=>$patien_name,'registration_date'=>$registration_date,'address'=>$address,'gender'=>$gender,'age'=>$age,'dob'=>$dob,'guardian_name'=>$guardian_name,'telephone'=>$telephone,'relationship'=>$relationship,'language'=>$language,'refered_by'=>$refered_by,'school'=>$school,'division'->$division);

        
        $this->patient_registration->add($data)


        	




	}
}