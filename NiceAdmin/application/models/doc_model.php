<?php

class doc_model extends CI_Model{

    public function getAllPatients(){
        $this->db->select('*');
        $this->db->from('patient_register');
        $this->db->order_by('serial_no','ASC');
        $query = $this->db->get();
        return $query->result();
    }
    public function getAllGoals(){
        $this->db->select('*');
        $this->db->from('goals');
        //$this->db->order_by('type');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function getAllGoalsByID($patient_id){
        $condition = "patient_id =" . "'" . $patient_id . "'";
        $this->db->select('*');
        $this->db->from('goals');
        $this->db->where($condition);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function add_family_history($data)
    {
        $condition = "patient_id =" . "'" . $data['patient_id'] . "'";
        $this->db->select('*');
        $this->db->from('family_medical_history');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            $this->db->insert('family_medical_history', $data);
                if ($this->db->affected_rows() > 0) 
                {
                    return true;
                }else {
                    return false;
                }
        }else {
            return false;
        }
        
    }
    
    public function add_communication_skills($data)
    {
        $condition = "patient_id =" . "'" . $data['patient_id'] . "'";
        $this->db->select('*');
        $this->db->from('communication_skills');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            $this->db->insert('communication_skills', $data);
                if ($this->db->affected_rows() > 0) {
                    return true;
                }else {
                    return false;
                }
        }else {
            return false;
        }
        
    }
    
        
    public function add_motor_skills($data)
    {
        $condition = "patient_id =" . "'" . $data['patient_id'] . "'";
        $this->db->select('*');
        $this->db->from('mortor_skills');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            $this->db->insert('mortor_skills', $data);
                if ($this->db->affected_rows() > 0) {
                    return true;
                }else {
                    return false;
                }
        }else {
            return false;
        }
        
    }
    
    public function add_cognitive_skills($data)
    {
        $condition = "patient_id =" . "'" . $data['patient_id'] . "'";
        $this->db->select('*');
        $this->db->from('cognetive_comm_development');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            $this->db->insert('cognetive_comm_development', $data);
                if ($this->db->affected_rows() > 0) {
                    return true;
                }else {
                    return false;
                }
        }else {
            return false;
        }
        
    }
    
    public function add_case_notes($data)
    {
        $condition = "patient_id =" . "'" . $data['patient_id'] . "'";
        $this->db->select('*');
        $this->db->from('case_notes');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            $this->db->insert('case_notes', $data);
                if ($this->db->affected_rows() > 0) {
                    return true;
                }else {
                    return false;
                }
        }else {
            return false;
        }
        
    }
    
    public function get_family_by_patient_id($patient_id){
        
        $condition = "patient_id =" . "'" . $patient_id . "'";
        $this->db->select('*');
        $this->db->from('family_medical_history');
        $this->db->where($condition);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_comm_by_patient_id($patient_id){
        
        $condition = "patient_id =" . "'" . $patient_id . "'";
        $this->db->select('*');
        $this->db->from('communication_skills');
        $this->db->where($condition);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_mortor_by_patient_id($patient_id){
        
        $condition = "patient_id =" . "'" . $patient_id . "'";
        $this->db->select('*');
        $this->db->from('mortor_skills');
        $this->db->where($condition);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_cog_by_patient_id($patient_id){
        
        $condition = "patient_id =" . "'" . $patient_id . "'";
        $this->db->select('*');
        $this->db->from('cognetive_comm_development');
        $this->db->where($condition);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_notes_by_patient_id($patient_id){
        
        $condition = "patient_id =" . "'" . $patient_id . "'";
        $this->db->select('*');
        $this->db->from('case_notes');
        $this->db->where($condition);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function add_doc_notes($data){
        $this->db->insert('doc_notes',$data);
            if ($this->db->affected_rows() > 0) {
                    return true;
                }else {
                    return false;
                }
    }
    
    public function get_All_references(){
        //$condition = "patient_id =" . "'" . $patient_id . "'";
        $this->db->select('*');
        $this->db->from('reference');
        //$this->db->where($condition);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_doc_notes_by_id($patient_id){
        $condition = "patient_id ="."'".$patient_id."'";
        $this->db->select('*');
        $this->db->from('doc_notes');
        $this->db->where($condition);
        $this->db->order_by('date','ASC');
        $query = $this->db->get();
        return $query->result();
        
    }
    
    public function getAllDoctors(){
        $query = $this->db->get('doctors');
        return $query->result();
    }
    
    public function add_problem($data,$patient_id){
        $this->db->where('patient_id', $patient_id);
        $this->db->update('diagnisis_problem', $data);
        if ($this->db->affected_rows() > 0) {
                    return true;
                }else {
                    return false;
                }
        
    }
    
    public function add_diagnosis($data){
        $condition = "patient_id ="."'".$data['patient_id']."'";
        $this->db->select('*');
        $this->db->from('diagnisis_problem');
        $this->db->where($condition);
        $query = $this->db->get();
        
        if ($query->num_rows() == 0) {
            $this->db->insert('diagnisis_problem', $data);
                if ($this->db->affected_rows() > 0) {
                    return true;
                }else {
                    return false;
                }
        }else {
            return false;
        }
        
    }
    
    public function get_diagnosis_by_id($patient_id){
        $condition = "patient_id ="."'".$patient_id."'";
        $this->db->select('*');
        $this->db->from('diagnisis_problem');
        $this->db->where($condition);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_goal_marks_by_patient_id($patient_id){
        $condition = "patient_id ="."'".$patient_id."'";
        $this->db->select('*');
        $this->db->from('patient_goal');
        $this->db->where($condition);
        $this->db->order_by('date','ASC');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function add_final_marks($data,$testType,$patient_id){
        $condition = array('patient_id'=>$patient_id, 'test_type' => $testType);
        $this->db->select('*');
        $this->db->from('cognitive_final');
        $this->db->where($condition);
        $query = $this->db->get();
        
        if ($query->num_rows() == 0) {
            $this->db->insert('cognitive_final', $data);
                if ($this->db->affected_rows() > 0) {
                    return true;
                }else {
                    return false;
                }
        }else {
            return false;
        }
    }
    
    
    public function getFinalMarks($patient_id){
        $condition = "patient_id ="."'".$patient_id."'";
        $this->db->select('*');
        $this->db->from('cognitive_final');
        $this->db->where($condition);
        $this->db->order_by('test_type','ASC');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function searchPatient($s_item ){
        $this->db->select('*');
        $this->db->where('patient_id',$s_item);
        $query = $this->db->get('patient_register');
        return $query->result();


    }
    public function getAge($patient_name){
        $this->db->select('*');
        $this->db->where('patient_name',$patient_name);
        $query = $this->db->get('patient_register');
        return $query->result();
    }
    
}

?>