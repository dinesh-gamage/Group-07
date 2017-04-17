<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buttons extends CI_Controller {

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
    public function __construct(){
        parent::__construct();

    }
	public function index()
	{
        $data1['newpatient'] = $this->indexmodel->get_new_patients();
        $data1['doc_data'] = $this->profilemodel->get_doc_data();
		$this->load->view('header',$data1);
		$this->load->view('buttons');
	}
}
