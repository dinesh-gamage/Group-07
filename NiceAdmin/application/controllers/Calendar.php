<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('calendarmodel');
    }
    
    public function edit_data(){
        $del = $this->input->post('delete');
        if(isset($del)){
            $id = $this->input->post('id');
            $this->calendarmodel->delete($id);
            redirect(base_url('Calendar'));
        }else{
            $color = $this->input->post('color');
            $title = $this->input->post('title');
            $id = $this->input->post('id');
            $this->calendarmodel->update_data($id,$color,$title);
            redirect(base_url('Calendar'));
        }
    }
    public function edit_event(){
        $id = $this->input->post('id');
        $start = $this->input->post('start');
        $end = $this->input->post('end');
        $this->calendarmodel->update_event($id,$start,$end);
        redirect(base_url('Calendar'));
        
    }
    public function add_data(){
            $start = $this->input->post('start');
            $end = $this->input->post('end');
            $color = $this->input->post('color');
            $title = $this->input->post('title');
            $this->calendarmodel->add_data($start,$end,$color,$title);
            redirect(base_url('Calendar'));
    }
    
    public function index(){
        $data1['doc_data'] = $this->profilemodel->get_doc_data();
        $data['events'] = $this->calendarmodel->cal();
        $this->load->view('header',$data1);
        $this->load->view('calendar/calendar',$data);
        
    }
    
    
}