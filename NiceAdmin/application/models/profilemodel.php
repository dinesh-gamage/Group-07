<?php

class Profilemodel extends CI_Model {
    

    public function Profilemodel(){
        parent::__construct();
    }
    public function get_doc_data(){
       $this->db->where('doc_name',$this->session->userdata('doc_sess'));
       $query = $this->db->get('doctors');
       return $query->result();
    }

    public function update_doc1($doc_name,$pass,$contact,$email,$special,$image){
        $setvalue = array(
            'doc_name'=>$doc_name,
            'password'=>$pass,
            'telephone'=>$contact,
            'email'=>$email,
            'speciality'=>$special,
            'doc_img'=>"asserts/images/doc_img/".$image
        );
        
       // $img_path = base_url()."asserts/images/doc_img/".$image;
       // if(!file_exists($img_path)){

        //}
        
        $this->db->where('doc_name',$this->session->userdata('doc_sess'));
        $update_doc_result =  $this->db->update('doctors',$setvalue);
        $this->session->set_userdata('doc_sess',$doc_name);
        return $update_doc_result;
    }
    public function update_doc2($doc_name,$pass,$contact,$email,$special){
        $setvalue = array(
            'doc_name'=>$doc_name,
            'password'=>$pass,
            'telephone'=>$contact,
            'email'=>$email,
            'speciality'=>$special
        );

        // $img_path = base_url()."asserts/images/doc_img/".$image;
        // if(!file_exists($img_path)){

        //}

        $this->db->where('doc_name',$this->session->userdata('doc_sess'));
        $update_doc_result =  $this->db->update('doctors',$setvalue);
        $this->session->set_userdata('doc_sess',$doc_name);
        return $update_doc_result;
    }
    public function update_doc3($doc_name,$contact,$email,$special,$image){
        $setvalue = array(
            'doc_name'=>$doc_name,
            'telephone'=>$contact,
            'email'=>$email,
            'speciality'=>$special,
            'doc_img'=>"asserts/images/doc_img/".$image
        );

        // $img_path = base_url()."asserts/images/doc_img/".$image;
        // if(!file_exists($img_path)){

        //}
        $this->db->where('doc_name',$this->session->userdata('doc_sess'));
        $update_doc_result =  $this->db->update('doctors',$setvalue);
        $this->session->set_userdata('doc_sess',$doc_name);
        return $update_doc_result;
    }
    public function update_doc4($doc_name,$contact,$email,$special){
        $setvalue = array(
            'doc_name'=>$doc_name,
            'telephone'=>$contact,
            'email'=>$email,
            'speciality'=>$special
        );

        // $img_path = base_url()."asserts/images/doc_img/".$image;
        // if(!file_exists($img_path)){

        //}
        $this->db->where('doc_name',$this->session->userdata('doc_sess'));
        $update_doc_result =  $this->db->update('doctors',$setvalue);
        $this->session->set_userdata('doc_sess',$doc_name);
        return $update_doc_result;
    }
    public function current_pass($curr){
        $this->db->select('password');
        $this->db->where('doc_name',$this->session->userdata('doc_sess'));
        $query = $this->db->get('doctors');
        return $query->result();
    }


   
    
}