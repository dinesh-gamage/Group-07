<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormComponent extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('speechcase');

    }
    public function set_casehistory(){
        $reg = $this->input->post('reg');
//        $name = $this->input->post('name');
//        $dob = $this->input->post('dob');
//        $date = $this->input->post('date');
//        $lan = $this->input->post('lan');
//        $tele = $this->input->post('tel');
//        $age = $this->input->post('age');
//        $gen = $this->input->post('gender');
        $father = $this->input->post('father');
        $mother = $this->input->post('mother');
        $sib = $this->input->post('sibl');
        $family = $this->input->post('homes');
        $mob = $this->input->post('mob');
        $add = $this->input->post('address');
        $success_doc_insert = $this->speechcase->set_data($reg,$father,$mother,$sib,$family,$mob,$add);
        if($success_doc_insert){
            $this->session->set_flashdata('msgsuccess', '<script> alert("Successfully Inserted!!!")</script>');
            redirect('formComponent/index');
        }else{
            $this->session->set_flashdata('msgsuccess', '<div class="alert alert-danger text-center">Problem Occured While Inserting!!! </div>');
            redirect('formComponent/index');
        }

    }
	public function index()
	{
        $data1['newpatient'] = $this->indexmodel->get_new_patients();
        $data['speechpatient'] = $this->speechcase->get_patient_data();
        $data1['doc_data'] = $this->profilemodel->get_doc_data();
		$this->load->view('main/header',$data1);
		$this->load->view('form_component',$data);
	}
}
