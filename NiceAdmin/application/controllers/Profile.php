<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
         
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
    var $doc_name="";
    var $doc_pass="";
    var $contact="";
    var $email="";
    var $special="";
    var $image="";
    public function __construct(){
        parent::__construct();

    }

	public function index()
	{
        $data1['newpatient'] = $this->indexmodel->get_new_patients();
        $this->load->model('register_doctor_model');
        $data1['doc_data'] = $this->profilemodel->get_doc_data();
        $docDetails ['records'] = $this->profilemodel->get_doc_data();
        $currpass = $this->input->post('curpass');
        if(isset($currpass)) {
            $check = $this->profilemodel->current_pass($currpass);
            foreach ($check as $ck) {
                if($currpass == $ck->password){
                    echo "true";
                }else{
                    echo "fals";
                }
            }
        }
        $this->load->view('main/header',$data1);
        $this->load->view('profile',$docDetails);
//
        if(isset($_POST['update'])){
            if(isset($_POST['doc_name'])){
                $this->doc_name = $_POST['doc_name'];
            }
            if(isset($_POST['doc_pass'])) {
                $this->doc_pass = $_POST['doc_pass'];
            }
            if(isset($_POST['contact'])) {
                $this->contact = $_POST['contact'];
            }
            if(isset($_POST['email'])) {
                $this->email = $_POST['email'];
            }
            if(isset($_POST['special'])) {
                $this->special = $_POST['special'];
            }
            if(isset($_FILES['userfile'])){
                $img_data = $this->register_doctor_model->do_upload();
                $this->image = $img_data['file_name'];
            }


            if($this->doc_name!="" && $this->contact!="" && $this->email!="" && $this->special!=""  && $this->doc_pass!=""){
                if($this->image!=""){
                    $this->profilemodel->update_doc1($this->doc_name,$this->doc_pass,$this->contact ,$this->email,$this->special,$this->image);
                    redirect(base_url('profile'));
                }else{
                    $this->profilemodel->update_doc2($this->doc_name,$this->doc_pass,$this->contact ,$this->email,$this->special);
                    redirect(base_url('profile'));
                }

            }if($this->doc_name!="" && $this->contact!="" && $this->email!="" && $this->special!=""){
                if($this->image!=""){
                    $this->profilemodel->update_doc3($this->doc_name,$this->contact ,$this->email,$this->special,$this->image);
                    redirect(base_url('profile'));
                }else{
                    $this->profilemodel->update_doc4($this->doc_name,$this->contact ,$this->email,$this->special);
                    redirect(base_url('profile'));
                }

            }

        }
	}
    public function logout(){
        $this->clearCache();
        $this->session->unset_userdata('doc_session');
        redirect('Login');
    }
    protected function clearCache(){
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    }
}
