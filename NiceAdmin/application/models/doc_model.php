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
    
    public function updatePati($patient_id){
        $data = array('status' => 1  );
        $this->db->where('patient_id', $patient_id);
        $this->db->update('patient_register',$data);
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
    
    public function discharge($data){
        $this->db->insert('discharge',$data);
        if ($this->db->affected_rows() > 0) {
                    return true;                
                }else {
                    return false;
                }
    }
    
    public function updateStatus($data2,$patient_id){
        $this->db->where('patient_id', $patient_id);
        $this->db->update('patient_register', $data2);
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
        $this->db->from('patient_mark');
        $this->db->where($condition);
        //$this->db->order_by('type','ASC');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function searchPatient($s_item ){
        $this->db->select('*');
        $this->db->where('patient_id',$s_item);
        $query = $this->db->get('patient_register');
        return $query->result();


    }
    public function getAge($patient_id){
        $this->db->select('*');
        $this->db->where('patient_id',$patient_id);
        $query = $this->db->get('patient_register');
        return $query->result();
    }
    public function getMaleFemale(){
        $array = [];
        $m1=$m2=$m3=$m4=$m5=$m6=$m7=$m8=$m9=$m10=$m11=$m12=$f1=$f2=$f3=$f4=$f5=$f6=$f7=$f8=$f9=$f10=$f11=$f12=0;
        $reco = $this->getAllPatients();
        foreach ($reco as $records) {
            
            if(substr($records->regitration_date,5,2)==='01' && strtolower($records->gender)==="male"){
                $m1++;
            }else if(substr($records->regitration_date,5,2)==='02' && strtolower($records->gender)==="male"){
                $m2++;
            }else if(substr($records->regitration_date,5,2)==='03' && strtolower($records->gender)==="male"){
                $m3++;
            }else if(substr($records->regitration_date,5,2)==='04' && strtolower($records->gender)==="male"){
                $m4++;
            }else if(substr($records->regitration_date,5,2)==='05' && strtolower($records->gender)==="male"){
                $m5++;
            }else if(substr($records->regitration_date,5,2)==='06' && strtolower($records->gender)==="male"){
                $m6++;
            }else if(substr($records->regitration_date,5,2)==='07' && strtolower($records->gender)==="male"){
                $m7++;
            }else if(substr($records->regitration_date,5,2)==='08' && strtolower($records->gender)==="male"){
                $m8++;
            }else if(substr($records->regitration_date,5,2)==='09' && strtolower($records->gender)==="male"){
                $m9++;
            }else if(substr($records->regitration_date,5,2)==='10' && strtolower($records->gender)==="male"){
                $m10++;
            }else if(substr($records->regitration_date,5,2)==='11' && strtolower($records->gender)==="male"){
                $m11++;
            }else if(substr($records->regitration_date,5,2)==='12' && strtolower($records->gender)==="male"){
                $m12++;
            }else if(substr($records->regitration_date,5,2)==='01' && strtolower($records->gender)==="female"){
                $f1++;
            }else if(substr($records->regitration_date,5,2)==='02' && strtolower($records->gender)==="female"){
                $f2++;
            }else if(substr($records->regitration_date,5,2)==='03' && strtolower($records->gender)==="female"){
                $f3++;
            }else if(substr($records->regitration_date,5,2)==='04' && strtolower($records->gender)==="female"){
                $f4++;
            }else if(substr($records->regitration_date,5,2)==='05' && strtolower($records->gender)==="female"){
                $f5++;
            }else if(substr($records->regitration_date,5,2)==='06' && strtolower($records->gender)==="female"){
                $f6++;
            }else if(substr($records->regitration_date,5,2)==='07' && strtolower($records->gender)==="female"){
                $f7++;
            }else if(substr($records->regitration_date,5,2)==='08' && strtolower($records->gender)==="female"){
                $f8++;
            }else if(substr($records->regitration_date,5,2)==='09' && strtolower($records->gender)==="female"){
                $f9++;
            }else if(substr($records->regitration_date,5,2)==='10' && strtolower($records->gender)==="female"){
                $f10++;
            }else if(substr($records->regitration_date,5,2)==='11' && strtolower($records->gender)==="female"){
                $f11++;
            }else if(substr($records->regitration_date,5,2)==='12' && strtolower($records->gender)==="female"){
                $f12++;
            }
        }
        $array[1]=$m1;
        $array[2]=$m2;
        $array[3]=$m3;
        $array[4]=$m4;
        $array[5]=$m5;
        $array[6]=$m6;
        $array[7]=$m7;
        $array[8]=$m8;
        $array[9]=$m9;
        $array[10]=$m10; 
        $array[11]=$m11;
        $array[12]=$m12;
        $array[13]=$f1;
        $array[14]=$f2;
        $array[15]=$f3;
        $array[16]=$f4;
        $array[17]=$f5;
        $array[18]=$f6;
        $array[19]=$f7;
        $array[20]=$f8;
        $array[21]=$f9;
        $array[22]=$f10; 
        $array[23]=$f11;
        $array[24]=$f12;
        return $array;
    }
    public function ffvisit(){
        $condition = "gender ='Female' AND status='0'";
        $this->db->select('*');
        $this->db->where($condition);
        $query = $this->db->get('patient_register');
        return $query->result();
    }
     public function fsvisit(){
        $condition = "gender ='Female' AND status!='0'";
        $this->db->select('*');
        $this->db->where($condition);
        $query = $this->db->get('patient_register');
        return $query->result();
    }
     public function mfvisit(){
        $condition = "gender ='Male' AND status='0'";
        $this->db->select('*');
        $this->db->where($condition);
        $query = $this->db->get('patient_register');
        return $query->result();
    }
     public function msvisit(){
        $condition = "gender =' Male' AND status!='0'";
        $this->db->select('*');
        $this->db->where($condition);
        $query = $this->db->get('patient_register');
        return $query->result();
    }
    public function diagnoseProblem(){
        $query=$this->db->get('diagnisis_problem');
        return $query->result();
    }
    public function allreg(){
        $query = $this->db->get('patient_register');
        return $query->result();
    }
    

    public function getAllMedicine(){
        $this->db->select('*');
        $query = $this->db->get('patient_medicine');
        return $query->result();
        
    }
    
    public function getAllDischarge(){
        $this->db->select('*');
        $query = $this->db->get('discharge');
        return $query->result();
    }
    
    public function getAllCogMars(){
        $this->db->select('*');
        $this->db->from('patient_mark');
        $this->db->order_by('question_id','ASC');
        $query = $this->db->get();
        return $query->result();
        
    }
    public function add_case_notes_begin($data){
        $this->db->insert('patient_case_notes',$data);
        if ($this->db->affected_rows() > 0) 
        {
            return true;                
        }
        else 
        {
            return false;
        }
        
    }
    
    public function getAllCaseNotes(){
        $this->db->select('*');
        $this->db->from('patient_case_notes');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function add_followup($data){
        $this->db->insert('follow_up',$data);
        if ($this->db->affected_rows() > 0) 
        {
            return true;                
        }
        else 
        {
            return false;
        }
    }
    
    public function getAllFollowUp(){
        $this->db->select('*');
        $this->db->from('follow_up');
        $this->db->order_by('date','ASC');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function getAllRecords(){
        $this->db->select('*');
        $this->db->from('checkup');
        $this->db->order_by('date','ASC');
        $query = $this->db->get();
        return $query->result();
    }
}

?>