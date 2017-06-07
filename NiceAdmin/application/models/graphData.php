<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class GraphData extends CI_Model{
    public function getDates(){
        $patient = $this->session->userdata('patient_sess');
        $doctor = $this->session->userdata('doc_sess');
        $query1 = $this->db->query('SELECT DISTINCT date FROM patient_goal WHERE patient_id="PID_A003"  AND doc_name="Prasad Samaradiwakara" ');
        return $query1->result();
    }
    
    public function getGraphData($q1){
           
           $query2 = $this->db->query('SELECT * FROM patient_goal WHERE date="'.$q1->date.'" AND patient_id="PID_A003"   AND doc_name="Prasad Samaradiwakara"  GROUP BY  goal,date ORDER BY date ');
           return $query2->result();
       
        
    }
    
}

