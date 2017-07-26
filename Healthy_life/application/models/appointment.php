<?php
   /**
   * 
   */
   class appointment extends  CI_MODEL
   {
     	
   	public function add($data){
   		$this->load->database();
   		$this->db->insert('appointment1',$data);

   	}
      public function delete ($id){
         $this->load->database();
         $this->db->where('id', $id);
         $this->db->delete('appointment1');
      }
      public function get_by_name($username){
         $this->db->select('*');
         $this->db->from('appointment1');
         $this->db->where('name',$username);
         $query = $this->db->get();

         if($query->num_rows()>0){
            return $query->result();

         }
      }

   }

?>