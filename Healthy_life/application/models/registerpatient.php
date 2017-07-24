<?php
/**
 * Created by PhpStorm.
 * User: kosala
 * Date: 4/9/2017
 * Time: 8:42 AM
 */

class Registerpatient extends CI_Model{

    public function ___construct(){
        parent::__construct();

    }
    public function get_lstid(){
       $this->db->select('*');
       $this->db->from('patient_register');
       $this->db->order_by('serial_no','desc');
       $this->db->limit('1');
       $query = $this->db->get();
       return $query->result();
       
    }
    public function register_patient($name,$age,$dob,$tel,$lan,$gen,$sch,$addr,$gur,$rel,$ref,$pass,$div,$date){
        
        $pid = 0;
        $iid = $this-> get_lstid();
        foreach ($iid as $key) {
             $this->pid=$key->serial_no;
        }
        $data = array(
            'patient_id'=>($this->pid+1),
            'password'=>$pass,
            'patient_name'=>$name,
            'regitration_date'=>$date,
            'address'=>$addr,
            'gender'=>$gen,
            'age'=>$age,
            'dob'=>$dob,
            'guardian_name'=>$gur,
            'telephone'=>$tel,
            'relationship'=>$rel,
            'language'=>$lan,
            'refered_by'=>$ref,
            'school'=>$sch,
            'division'=>$div,
            'status'=>0
        );

        return $this->db->insert('patient_register',$data);


    }



}