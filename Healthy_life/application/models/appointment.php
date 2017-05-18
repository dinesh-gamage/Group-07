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
<<<<<<< HEAD

   }
=======
      public function delete ($id){
         $this->load->database();
         $where_array = array ('id'=>$id);
         $this->db->delete('appointment1',$where_array );
         $this->load->view('header');
         $this->load->view('patient');
         $this->load->view('footer');
      }

      public function get_by_name ( $username)
{

    $this->db->select('*');
    $this->db->from('appointment1');

    $this->db->where('name', $username );


    $query = $this->db->get();

    if ( $query->num_rows() > 0 )
    {
        return $result = $query->result();
        
    }

} 


      }

   
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347

?>