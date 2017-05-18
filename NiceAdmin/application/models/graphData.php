<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class GraphData extends CI_Model{
    public function getDates(){
        $query1 = $this->db->query('SELECT DISTINCT date FROM patient_goal');
        return $query1->result();
    }
    
    public function getGraphData($q1){
       
           $query2 = $this->db->query('SELECT * FROM patient_goal WHERE date="'.$q1->date.'" GROUP BY  goal,date ORDER BY date ');
           return $query2->result();
       
        
    }
    
}

