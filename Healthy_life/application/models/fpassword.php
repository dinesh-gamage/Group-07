<?php
/**
 * Created by PhpStorm.
 * User: kosala
 * Date: 4/9/2017
 * Time: 8:42 AM
 */

class fpassword extends CI_Model{

    public function ___construct(){
        parent::__construct();

    }

    public function forget($name, $pwd){
        $this->load->database();
        $where_array = array ('password'=>$pwd);

        $this->db->where('patient_name',$name);
        $this->db->update('patient_register',$where_array);
  
            


    }



}