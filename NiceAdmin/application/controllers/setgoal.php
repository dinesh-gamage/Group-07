<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class setgoal extends CI_Controller {

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
		$this->load->model('setgoal1');
		$patient_id = $this->input->post('pid');
		$goal = $this->input->post('level');
		$status= $this->input->post('status');
		$duration= $this->input->post('duration');
		$marks= $this->input->post('marks');
		$feedback= $this->input->post('feedback');
		
        $data = array('patient_id'=>$patient_id,'goal'=>$goal,'status'=>$status,'duration'=>$duration,'marks'=>$marks,'feedback'=>$feedback);

        
        $this->setgoal->add($data);
	}
}
