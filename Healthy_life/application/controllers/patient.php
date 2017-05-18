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
<<<<<<< HEAD
		$timeslot = $this->input->post('timeslot');
		
        $data = array('clinic'=>$clinic,'doctor'=>$doctor,'timeslot'=>$timeslot);

        
        $this->appointment->add($data);
	}
}
=======
		$name = $this->session->userdata['logged_in']['username'];
		
		
        $data = array('clinic'=>$clinic,'doctor'=>$doctor,'name'=>$name);

        
        $this->appointment->add($data);
        $this->load->view('header');
        $this->load->view('patient');
        $this->load->view('footer');

	}
	public function delete (){
		$this->load->model('appointment');
		$id = $this->input->post('num');
		$this->appointment->delete($id);
	}

	public function show (){
		$this->load->model ('appointment');
		$uname = $this->session->userdata['logged_in']['username'];
		$result =$this->appointment-> get_by_name ( $uname  );
		if (!empty($result)) {
			$data['patients'] = $result;
			$this->load->view('header');
			$this->load->view('patient',$data);
			$this->load->view('footer');
		}
		
       
 
	}

} 
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
