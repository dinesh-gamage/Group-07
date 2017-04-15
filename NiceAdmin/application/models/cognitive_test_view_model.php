<?php

class cognitive_test_view_model extends CI_Model{

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
}

?>