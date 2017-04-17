<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index1 extends CI_Controller {

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
    var $pid =49 ;
    public function __construct(){
        parent::__construct();
        $this->load->model('registerpatient');
    }
    public function reg_patient(){
        if(isset($_POST['regbtn'])) {
            $name = $this->input->post('pname');
            $age = $this->input->post('age');
            $dob = $this->input->post('dob');
            $tel = $this->input->post('tel');
            $lan = $this->input->post('lan');
            $gen = $this->input->post('gender');
            $sch = $this->input->post('sch');
            $addr = $this->input->post('address');
            $gur = $this->input->post('gur');
            $rel = $this->input->post('rel');
            $ref = $this->input->post('ref');
            $pass = $this->input->post('pass');
            $div = $this->input->post('div');
            $date = $this->input->post('date');
            $success_doc_insert = $this->registerpatient->register_patient($this->pid, $name, $age, $dob, $tel, $lan, $gen, $sch, $addr, $gur, $rel, $ref, $pass, $div, $date);
            if ($success_doc_insert) {
                echo "true";
            } else {
                echo "false";
            }
            $this->pid++;
        }
    }
	public function index()
	{
		$this->load->view('header');
		$this->load->view('index1');
		$this->load->view('footer');
	}
}