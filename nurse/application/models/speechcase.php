<?php
/**
 * Created by PhpStorm.
 * User: kosala
 * Date: 4/8/2017
 * Time: 5:27 PM
 */
class Speechcase extends CI_Model
{


    public function Register_doctor_model()
    {
        parent::__construct();

    }
    public function get_patient_data(){
        $cut_patient = $this->session->userdata('current_patient');
        $this->db->where('patient_id',$cut_patient);
        $query = $this->db->get('patient_register');
        return $query->result();
    }
    public function set_data($reg,$father,$mother,$sib,$family,$mob,$add){
        $data = array(
            'patient_id'=>$reg,
            'father_name'=>$father,
            'mother_name'=>$mother,
            'mother_name'=>$sib,
            'home_situation'=>$family,
            'during_pregnancy'=>$mob,
            'at_birth'=>$add,
        );
        return $this->db->insert('slc_history',$data);

    }
}