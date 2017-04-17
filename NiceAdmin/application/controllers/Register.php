<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    var $success_doc_insert;
    var $data ;
    public function __construct(){
        parent::__construct();
        $this->load->model('indexmodel');

    }
    function index(){
        $data1['newpatient'] = $this->indexmodel->get_new_patients();
        $data1['doc_data'] = $this->profilemodel->get_doc_data();
        $this->load->model('register_doctor_model');
        $this->form_validation->set_rules('doc_name','Username','trim|required');
        $this->form_validation->set_rules('email','Email','trim|valid_email|required');
        $this->form_validation->set_rules('email','Email','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required');
        if($this->form_validation->run()=== TRUE){
            
            if($this->input->post('register_doc')){
                $doc_name = $this->input->post('doc_name');
                $doc_pass = $this->input->post('doc_pass');
                $hospital = $this->input->post('hospital');
                $contact = $this->input->post('contact');
                $email = $this->input->post('email');
                $special = $this->input->post('special');
                $this->register_doctor_model->do_upload();
                $this->success_doc_insert = $this->register_doctor_model->setdoc_details($doc_name,$doc_pass,$hospital,$contact,$email,$special);
                if($this->success_doc_insert){
                    $this->session->set_flashdata('msgsuccess', '<script> alert("Successfully Inserted!!!")</script>');
                    redirect('register/index');
                }else{
                    $this->session->set_flashdata('msgsuccess', '<div class="alert alert-danger text-center">Problem Occured While Inserting!!! </div>');
                    redirect('register/index');
                }

            }
        }

        $this->load->view('header',$data1);
        $this->load->view('register',$this->data);
    }
    
    
}