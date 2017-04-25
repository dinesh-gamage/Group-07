<?php

class doc_model extends CI_Model{

    public function getAllPatients(){
        $this->db->select('*');
        $this->db->from('patient_register');
        $this->db->order_by('serial_no','ASC');
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
    
    public function get_all_family(){
        $query  = $this->db->get('family_medical_history');
       return $query->result();
    }
    
    public function get_all_comm(){
        $query  = $this->db->get('communication_skills');
       return $query->result();
    }
    public function get_all_mortor(){
        $query  = $this->db->get('mortor_skills');
       return $query->result();
    }
    public function get_all_cog(){
        $query  = $this->db->get('cognetive_comm_development');
       return $query->result();
    }
    public function get_all_notes(){
        $query  = $this->db->get('case_notes');
       return $query->result();
    }
    
    
}

?>