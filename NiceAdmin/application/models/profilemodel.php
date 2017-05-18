<?php

class Profilemodel extends CI_Model {
<<<<<<< HEAD
    
=======
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347

    public function Profilemodel(){
        parent::__construct();
    }
    public function get_doc_data(){
<<<<<<< HEAD
       $this->db->where('doc_name',$this->session->userdata('doc_sess'));
=======
       $this->db->where('doc_name',$this->session->userdata('doc_session'));
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
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
        
<<<<<<< HEAD
        $this->db->where('doc_name',$this->session->userdata('doc_sess'));
        $update_doc_result =  $this->db->update('doctors',$setvalue);
        $this->session->set_userdata('doc_sess',$doc_name);
=======
        $this->db->where('doc_name',$this->session->userdata('doc_session'));
        $update_doc_result =  $this->db->update('doctors',$setvalue);
        $this->session->set_userdata('doc_session',$doc_name);
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
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

<<<<<<< HEAD
        $this->db->where('doc_name',$this->session->userdata('doc_sess'));
        $update_doc_result =  $this->db->update('doctors',$setvalue);
        $this->session->set_userdata('doc_sess',$doc_name);
=======
        $this->db->where('doc_name',$this->session->userdata('doc_session'));
        $update_doc_result =  $this->db->update('doctors',$setvalue);
        $this->session->set_userdata('doc_session',$doc_name);
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
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
<<<<<<< HEAD
        $this->db->where('doc_name',$this->session->userdata('doc_sess'));
        $update_doc_result =  $this->db->update('doctors',$setvalue);
        $this->session->set_userdata('doc_sess',$doc_name);
=======
        $this->db->where('doc_name',$this->session->userdata('doc_session'));
        $update_doc_result =  $this->db->update('doctors',$setvalue);
        $this->session->set_userdata('doc_session',$doc_name);
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
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
<<<<<<< HEAD
        $this->db->where('doc_name',$this->session->userdata('doc_sess'));
        $update_doc_result =  $this->db->update('doctors',$setvalue);
        $this->session->set_userdata('doc_sess',$doc_name);
=======
        $this->db->where('doc_name',$this->session->userdata('doc_session'));
        $update_doc_result =  $this->db->update('doctors',$setvalue);
        $this->session->set_userdata('doc_session',$doc_name);
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
        return $update_doc_result;
    }
    public function current_pass($curr){
        $this->db->select('password');
<<<<<<< HEAD
        $this->db->where('doc_name',$this->session->userdata('doc_sess'));
=======
        $this->db->where('doc_name',$this->session->userdata('doc_session'));
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
        $query = $this->db->get('doctors');
        return $query->result();
    }


   
    
}