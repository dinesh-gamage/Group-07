<?php

class Calendarmodel extends CI_Model{
   
   public function cal(){
       $query  = $this->db->get('events');
       return $query->result();
   }
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
    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('events');
    }
}

