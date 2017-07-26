<?php
/**
 * Created by PhpStorm.
 * User: kosala
 * Date: 4/13/2017
 * Time: 10:08 AM
 */

class Doctordetails extends CI_Model{

    public function ___construct()
    {
        parent::__construct();
    }

    public function getDoctor(){
        $query = $this->db->get('doctors');
        return $query->result();
    }
}
