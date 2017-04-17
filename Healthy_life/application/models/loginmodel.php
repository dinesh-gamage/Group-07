<?php
/**
 * Created by PhpStorm.
 * User: kosala
 * Date: 4/13/2017
 * Time: 10:08 AM
 */

class Loginmodel extends CI_Model{

    public function ___construct()
    {
        parent::__construct();
    }

    public function get_patient($username,$password){
        $this->db->select('*');
        $this->db->from('patient_register');
        $this->db->where('patien_name',$username);
        $this->db->where('password',$password);
        $query = $this->db->get();
        return $query->num_rows();

    }
}
