<?php
   /**
   * 
   */
   class sendsms extends  CI_MODEL
   {
     	
   	

      public function get_receiver ( $username){

            $this->load->database();  
            $this->db->select('telephone');
            $this->db->from('patient_register');

            $this->db->where('user_name', $username );


            $query = $this->db->get();
            $result = $query->result();
           
            

            

            return $result;

        
           

      }
      public function get_message ( $username){

            $this->load->database();

            // $this->db->select_max('age');
            // $query = $this->db->get('appointment1');  
             $this->db->select('id');
             $this->db->from('appointment1');

            


            $query = $this->db->get();
            $result = max($query->result());
            return $result;

      }
      

  }

   

?>