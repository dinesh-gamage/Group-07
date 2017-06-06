<?php
   /**
   * 
   */
   class patient_registration extends  CI_MODEL
   {
     	
   	public function add($data){
   		$this->load->database();
   		$this->db->insert('patient_register',$data);
   		


   	}

   }

?>