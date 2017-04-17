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
    var $page_number;
    var $tmpl;
    var $usr;
    public function __construct(){
        parent::__construct();
        $this->load->model('indexmodel');
        $this->session->userdata('doc_session');
    }
    //make pagination styles
    public function bs_pagination($config){
        /* This Application Must Be Used With BootStrap 3 *  */
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        return $config;
    }
    //delete patient record in the patient record table
    public function delete(){
       // $delvalue = json_decode(stripslashes($this->input->post('id')));
        $one =$this->input->post('userid');
        foreach ($one  as $userid) {
            $this->indexmodel->del_patient($userid);
        }
        redirect(base_url('Index1'));
    }

    public function index(){
        $data1['doc_data'] = $this->profilemodel->get_doc_data();
        $this->load->library("pagination");
        //Set config options
        $config["per_page"] = 1;
        $config['use_page_numbers'] = TRUE;
        $config['base_url'] = "http://localhost/Third_Year_Project/NiceAdmin/Index1/index/";//Link to use for pagination
        $config['uri_segment'] =3;
        //Add bootstrap html to config
        $config = $this -> bs_pagination($config);
        //fix request for records for page number use
        $this->page_number = intval(($this->page_number  == 1 || $this->page_number  == 0) ? 0 : ($this->page_number * $config['per_page']) - $config['per_page']);

        $config['total_rows'] = $this->indexmodel->count_results();
        $searchitem = $this->input->post('searchitem');
        $data['records'] = $this->indexmodel->get_results($config["per_page"], $this->page_number,$searchitem);

        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();

        $this->load->library('table');
        $this->load->view('header',$data1);

        $this->load->view('index1',$data);
        if(isset($_POST['pid'])){
            $this->session->set_userdata('current_patient', $_POST['pid']);
        }
    }
    //search patients according to the searching disease


}
