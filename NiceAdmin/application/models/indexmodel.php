<?php
class Indexmodel extends CI_Model{

    public function get_patient(){
        $this->db->select('*');
       // $this->db->where('doctor',$this->session->userdata('doc_session'));
        $query = $this->db->get('patient_register');
        return $query->result();
    }
    public function count_results(){
        $this->db->select('*');
    //    $this->db->where('doctor',$this->session->userdata('doc_session'));
        $this->db->from('patient_register');
        return $this->db->count_all_results();
    }

    public function get_results($limit=100,$start=0,$searchitem){
        $wh = array(
            'doctor'=>$this->session->userdata('doc_session'),
            'disease'=>'fever'
            );
        $this->db->select('*');
        //$this->db->where($wh);
        $this->db->from('patient_register');
        $this->db->order_by('serial_no', 'ASC');
        $this->db->limit($limit, $start);
        $query = $this -> db -> get();

        return $query->result();
    }
    function del_patient($delv){
            $this->db->where('p_id',$delv);
            $this->db->delete('patient');
    }
    function get_new_patients(){
        $this->db->where('status',0);
        $query = $this->db->get('patient_register');
        return $query->result();
    }


}