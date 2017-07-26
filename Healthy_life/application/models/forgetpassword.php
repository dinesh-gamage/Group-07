<?php
/**
 * Created by PhpStorm.
 * User: kosala
 * Date: 4/9/2017
 * Time: 8:42 AM
 */

class forgetpassword extends CI_Model{

    public function ___construct(){
        parent::__construct();
        $this->load->database();

    }

    public function forget($name, $pwd){
        
        $data = $array('password'=>$pwd);
        $this->db->where('username',$name);
        $this->db->update('patient_register',$data);
  
            


    }
    public function get_user($user_id){
          $query = $this->db->get_where($this->users_table, array('id' => $user_id));
          if($query->num_rows()) return $query->row();
          return false;
      }
  
      public function get_user_by_email($email){
            $query = $this->db->get_where($this->users_table, array('email' => $email));
            if($query->num_rows()) return $query->row();
            return false;
      } 
  
      public function get_users($order_by = 'id', $order = 'asc', $limit = 0, $offset = 0){
            $this->db->order_by($order_by, $order); 
            if($limit) $this->db->limit($limit, $offset);
            $query = $this->db->get($this->users_table);
            return $query->result();
      }




}