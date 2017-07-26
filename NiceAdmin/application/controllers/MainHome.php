<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainHome extends CI_Controller {
    
    var $page_number;
    var $tmpl;
    var $usr;
    
    public function __construct() {
        parent::__construct();
        $this->load->model('doc_model');
        $this->load->model('indexmodel');
        $this->load->model('calendarmodel');
        $this->session->userdata('doc_session');
    }
    
    
	public function index(){

        $data1['doc_data'] = $this->profilemodel->get_doc_data();
        $this->load->view('main/doc_header',$data1);
        $this->load->view('admin/admin_home');


    }
}
?>