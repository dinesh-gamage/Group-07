<?php
/**
 * Created by PhpStorm.
 * User: kosala
 * Date: 4/9/2017
 * Time: 8:42 AM
 */

class forgetpassword extends CI_Model{

    public function ___construct(){
        parent::__construct();

    }

    public function forget($name, $pwd){
        $this->load->database();
        $data = $array('password'=>$pwd);
        $this->db->where('username',$name);
        $this->db->update('patient_register',$data);
  
            


    }



}