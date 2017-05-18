<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('cognitive_test_model');
    }
    
	public function index(){}
    
    public function search_doc_view(){
         $patient_id = $this->input->post('search')          
    }
   
}
?>
    
 