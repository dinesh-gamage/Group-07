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
<<<<<<< HEAD
    public function get_lstid(){
       return $this->db->insert_id();
       
    }
=======

>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
    public function register_patient($pid,$name,$age,$dob,$tel,$lan,$gen,$sch,$addr,$gur,$rel,$ref,$pass,$div,$date){
        $data = array(
            'patient_id'=>$pid,
            'password'=>$pass,
<<<<<<< HEAD
            'patient_name'=>$name,
=======
            'user_name'=>$name,
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
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
<<<<<<< HEAD
            'division'=>$div,
            'status'=>1
=======
            'division'=>$div
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
        );

        return $this->db->insert('patient_register',$data);


    }



}