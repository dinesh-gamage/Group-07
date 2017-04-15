<?php

class cognitive_test_model extends CI_Model{

    // Insert registration data in database
    public function add_questions($data) {

        $condition = "question =" . "'" . $data['question'] . "'";
        $this->db->select('*');
        $this->db->from('cognitive_test');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            $this->db->insert('cognitive_test', $data);
                if ($this->db->affected_rows() > 0) {
                    return true;
                }else {
                    return false;
                }
        }else {
            return false;
        }
    }
    
    public function all_ques(){
        $this->db->select('*');
        $this->db->from('cognitive_test');
        $this->db->order_by('question','ASC');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function viewBQuestion(){
        $this->db->select('*');
        $this->db->from('cognitive_test');
        $this->db->where('type','B');
        $this->db->order_by('question','ASC');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function viewAQuestion(){
        $this->db->select('*');
        $this->db->from('cognitive_test');
        $this->db->where('type','A');
        $this->db->order_by('question','ASC');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function add_marks($data){
        $this->db->insert('patient_mark',$data);
    }
    public function viewMarks(){
        $this->db->select('*');
        $this->db->from('patient_mark');
        //$this->db->where('type','A');
        $this->db->order_by('question_id','ASC');
        $query = $this->db->get();
        return $query->result();
        
    }
}

?>