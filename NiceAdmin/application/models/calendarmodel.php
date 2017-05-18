<?php

class Calendarmodel extends CI_Model{
   
   public function cal(){
       $query  = $this->db->get('events');
       return $query->result();
   }
<<<<<<< HEAD
   public function calSpec($doc){
       $this->db->select('*');
       $this->db->where('doctor_id',$doc);
       $this->db->from('events');
       $query = $this->db->get();
       return $query->result();
   }
=======
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
  public function add_data($start,$end,$color,$title,$doctor){
      $data = array(
        'title'=>$title,
        'color'=>$color,
        'start'=>$start,
        'end'=>$end,
        'doctor_id'=>$doctor
      ); 
      return $this->db->insert('events',$data);      
  }
    public function update_data($id,$color,$title){
        $data = array(
            'title'=>$title,
            'color'=>$color            
        );
        $this->db->where('id',$id);
        $this->db->update('events',$data);
        
    }
    public function update_event($id,$start,$end,$title){
        $data = array(
            'title'=>$title,
            'start'=>$start,
            'end'=>$end
        );
        $this->db->where('id',$id);
        $this->db->update('events',$data);
        
    }
<<<<<<< HEAD
   
    
=======
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('events');
    }
}

