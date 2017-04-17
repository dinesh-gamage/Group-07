<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
    var $data;
    public function Login(){
        parent::__construct();
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

    }
    public function check($user,$pass){
            $this->db->select('doctor_id','doc_name','password');
            $this->db->from('doctors');
            $this->db->where('doc_name',$user);
            $this->db->where('password',$pass);
            $query = $this->db->get();
            return $query->num_rows();

    }
	public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('pass', 'Password', 'trim|required');
        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $password = $this->input->post('pass');
            if ($this->input->post('login')) {
                if ($this->check($username, $password) == 1) {
                    $this->session->set_userdata('doc_session', $username);
                    redirect(base_url('Index1'));
                }else{
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');
                    redirect(base_url('login/index'));
                }
            }else{
                redirect('login/index');
            }
        }else {
            $this->load->view('login');
        }

    }
}
