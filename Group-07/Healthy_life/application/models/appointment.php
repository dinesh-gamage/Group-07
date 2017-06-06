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

   }

?>