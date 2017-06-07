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
    public function get_nur_data(){
       $this->db->where('nurse_name',$this->session->userdata('nur_name'));
       $query = $this->db->get('nurse');
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


        $username = ($this->session->userdata['logged_in']['username']);
        $status = ($this->session->userdata['logged_in']['status']);
        $doctorID = ($this->session->userdata['logged_in']['doctorId']);
        $session_data = array(
                        'username' => $username,
                        'email' => $email,
                        'status' => $status,
                        'name' => $doc_name,
                        'picture' => "asserts/images/doc_img/".$image,
                        'doctorId' => $doctorID,

                    );

                    
                    // Add user data in session
        $this->session->set_userdata('logged_in', $session_data);



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

        $username = ($this->session->userdata['logged_in']['username']);
        $status = ($this->session->userdata['logged_in']['status']);
        $doctorID = ($this->session->userdata['logged_in']['doctorId']);
        $picture = ($this->session->userdata['logged_in']['picture']);
        $session_data = array(
                        'username' => $username,
                        'email' => $email,
                        'status' => $status,
                        'name' => $doc_name,
                        'picture' => $picture,
                        'doctorId' => $doctorID,

                    );

                    
                    // Add user data in session
        $this->session->set_userdata('logged_in', $session_data);

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

        $username = ($this->session->userdata['logged_in']['username']);
        $status = ($this->session->userdata['logged_in']['status']);
        $doctorID = ($this->session->userdata['logged_in']['doctorId']);
        $session_data = array(
                        'username' => $username,
                        'email' => $email,
                        'status' => $status,
                        'name' => $doc_name,
                        'picture' => "asserts/images/doc_img/".$image,
                        'doctorId' => $doctorID,

                    );

                    
                    // Add user data in session
        $this->session->set_userdata('logged_in', $session_data);

        
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

        $username = ($this->session->userdata['logged_in']['username']);
        $status = ($this->session->userdata['logged_in']['status']);
        $doctorID = ($this->session->userdata['logged_in']['doctorId']);
        $picture = ($this->session->userdata['logged_in']['picture']);
        $session_data = array(
                        'username' => $username,
                        'email' => $email,
                        'status' => $status,
                        'name' => $doc_name,
                        'picture' => $picture,
                        'doctorId' => $doctorID,

                    );

                    
                    // Add user data in session
        $this->session->set_userdata('logged_in', $session_data);


        return $update_doc_result;
    }
    public function current_pass($curr){
        $this->db->select('password');
        $this->db->where('doc_name',$this->session->userdata('doc_sess'));
        $query = $this->db->get('doctors');
        return $query->result();
    }

    
    
    //.....................nurse profile...........................//
    
    public function update_nur1($nur_name,$pass,$contact,$email,$image){
        $setvalue = array(
            'nurse_name'=>$nur_name,
            'password'=>$pass,
            'telephone'=>$contact,
            'email'=>$email,
            'nur_image'=>"asserts/images/doc_img/".$image
        );
        
       // $img_path = base_url()."asserts/images/doc_img/".$image;
       // if(!file_exists($img_path)){

        //}
        
        $this->db->where('nurse_name',$this->session->userdata('nur_name'));
        $update_doc_result =  $this->db->update('nurse',$setvalue);
        $this->session->set_userdata('nur_name',$nur_name);
        return $update_doc_result;
    }
    public function update_nur2($nur_name,$pass,$contact,$email){
        $setvalue = array(
            'nurse_name'=>$nur_name,
            'password'=>$pass,
            'telephone'=>$contact,
            'email'=>$email
        );

        // $img_path = base_url()."asserts/images/doc_img/".$image;
        // if(!file_exists($img_path)){

        //}

        $this->db->where('nurse_name',$this->session->userdata('nur_name'));
        $update_doc_result =  $this->db->update('nurse',$setvalue);
        $this->session->set_userdata('nur_name',$nur_name);
        return $update_doc_result;
    }
    public function update_nur3($nur_name,$contact,$email,$image){
        $setvalue = array(
            'nurse_name'=>$nur_name,
            'telephone'=>$contact,
            'email'=>$email,
            'nur_image'=>"asserts/images/doc_img/".$image
        );

        // $img_path = base_url()."asserts/images/doc_img/".$image;
        // if(!file_exists($img_path)){

        //}
        $this->db->where('nurse_name',$this->session->userdata('nur_name'));
        $update_doc_result =  $this->db->update('nurse',$setvalue);
        $this->session->set_userdata('nur_name',$nur_name);
        return $update_doc_result;
    }
    public function update_nur4($nur_name,$contact,$email){
        $setvalue = array(
            'nurse_name'=>$nur_name,
            'telephone'=>$contact,
            'email'=>$email
            
        );

        // $img_path = base_url()."asserts/images/doc_img/".$image;
        // if(!file_exists($img_path)){

        //}
        $this->db->where('nurse_name',$this->session->userdata('nur_name'));
        $update_doc_result =  $this->db->update('nurse',$setvalue);
        $this->session->set_userdata('nur_name',$nur_name);
        return $update_doc_result;
    }
    
    public function current_nurpass($curr){
        $this->db->select('password');
        $this->db->where('nurse_name',$this->session->userdata('nur_name'));
        $query = $this->db->get('nurse');
        return $query->result();
    }
    
    
    //.....................nurse profile...........................//
    
    
    
   


   
    
}