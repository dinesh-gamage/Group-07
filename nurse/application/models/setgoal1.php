<?php
   /**
   * 
   */
   class setgoal1 extends  CI_MODEL
   {
     	
   	public function add($data){
   		$this->load->database();
   		$this->db->insert('patient_goal',$data);
   		


   	}

   }

?>