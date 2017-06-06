<?php

class Register_doctor_model extends CI_Model {
    
    var $doc_image_path ;
    var $img_data;
    public function Register_doctor_model(){
        parent::__construct();
        //$this->doc_image_path = realpath(APPPATH.'../asserts/images/doc_img');
       
    }
    
    public function do_upload(){
        $config_img = array(
            'allowed_types'=>'jpg|jpeg|gif|png',
            'upload_path'=>'asserts/images/doc_img/'
        );
        $this->load->library('upload',$config_img);
        $this->upload->do_upload('userfile');
        $this->img_data = $this->upload->data();
        return $this->img_data;
    }
    
    
    
   public function setdoc_details($doc_name,$pass,$hospital,$contact,$email,$special){     
       //if(do_upload()){
           $insert_doc_details = array(
               'name'=>$doc_name,
               'hospital'=>$hospital,
               'doc_pass'=>$pass,
               'contact'=>$contact,
               'doc_email'=>$email,
               'specialist_for'=>$special,
               'doc_img'=>"asserts/images/doc_img/".$this->img_data['file_name']
               );
           $sucess_insert_doc = $this->db->insert('doctor',$insert_doc_details);
           return $sucess_insert_doc;
       //}
       
   }

}