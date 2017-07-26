<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buttons extends CI_Controller {

    public function __construct(){
        parent::__construct();

    }
	public function index()
	{
        $data1['newpatient'] = $this->indexmodel->get_new_patients();
        $data1['doc_data'] = $this->profilemodel->get_doc_data();
		$this->load->view('main/header',$data1);
		$this->load->view('buttons');
		$this->load->view('main/footer');
	}
}
