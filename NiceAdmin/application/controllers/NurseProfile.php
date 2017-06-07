<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NurseProfile extends CI_Controller {
         
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
    var $nur_name="";
    var $nur_pass="";
    var $contact="";
    var $email="";
    var $special="";
    var $image="";
    public function __construct(){
        parent::__construct();

    }

	public function index()
	{
        $this->load->model('register_doctor_model');
        $data1['nur_data'] = $this->profilemodel->get_nur_data();
        $nurDetails ['records'] = $this->profilemodel->get_nur_data();
        $currpass = $this->input->post('curpass');
        if(isset($currpass)) {
            $check = $this->profilemodel->current_nurpass($currpass);
            foreach ($check as $ck) {
                if($currpass == $ck->password){
                    echo "true";
                }else{
                    echo "false";
                }
            }
        }
        $this->load->view('main/nurse_header',$data1);
        $this->load->view('nurseProfile',$nurDetails);
//
        if(isset($_POST['update'])){
            if(isset($_POST['nur_name'])){
                $this->nur_name = $_POST['nur_name'];
            }
            if(isset($_POST['nur_pass'])) {
                $this->nur_pass = $_POST['nur_pass'];
            }
            if(isset($_POST['contact'])) {
                $this->contact = $_POST['contact'];
            }
            if(isset($_POST['email'])) {
                $this->email = $_POST['email'];
            }
            if(isset($_FILES['userfile'])){
               $img_data = $this->register_doctor_model->do_upload();
               $this->image = $img_data['file_name'];
            }


            if($this->nur_name!="" && $this->contact!="" && $this->email!="" &&  $this->nur_pass!=""){
                if($this->image!=""){
                    $this->profilemodel->update_nur1($this->nur_name,$this->nur_pass,$this->contact ,$this->email,$this->image);
                    redirect(base_url('nurseProfile'));
                }else{
                    $this->profilemodel->update_nur2($this->nur_name,$this->nur_pass,$this->contact ,$this->email);
                    redirect(base_url('nurseProfile'));
                }

            }if($this->nur_name!="" && $this->contact!="" && $this->email!=""){
                if($this->image!=""){
                    $this->profilemodel->update_nur3($this->nur_name,$this->contact ,$this->email,$this->image);
                    redirect(base_url('nurseProfile'));
                }else{
                    $this->profilemodel->update_nur4($this->nur_name,$this->contact ,$this->email);
                    redirect(base_url('nurseProfile'));
                }

            }

        }
	}
    public function logout(){
        $this->clearCache();
        $this->session->unset_userdata('nur_sess');
        redirect('Login');
    }
    
}
