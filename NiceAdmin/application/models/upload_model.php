<?php
class upload_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function upload_image($filename)//$inputdata,
    {
      //$this->db->insert('user', $inputdata); 
      $insert_id = $this->db->insert_id();
      if($filename!='' ){
      $filename1 = explode(',',$filename);
      foreach($filename1 as $file){
      $file_data = array(
      'question' => $file,
      //'user_id' => $insert_id
      );
      $this->db->insert('cognitive_test', $file_data);
      }
      }
    }

//    public function view_data(){
//        $query=$this->db->query("SELECT ud.*
//                                 FROM user ud 
//                                 ORDER BY ud.u_id DESC");
//        return $query->result_array();
//    }
//
//    public function edit_data($id){
//        $query=$this->db->query("SELECT ud.*
//                                 FROM user ud 
//                                 WHERE ud.u_id = $id");
//        return $query->result_array();
//    }
//
//    public function edit_data_image($id){
//        $query=$this->db->query("SELECT photo.*
//                                 FROM user ud 
//                                 RIGHT JOIN photos as photo
//                                 ON ud.u_id = photo.user_id 
//                                 WHERE ud.u_id = $id");
//        return $query->result_array();
//    }
//
//    public function edit_upload_image($user_id,$inputdata,$filename ='')
//    {
//
//        $data = array('name'                   => $inputdata['name'],
//                      'class'                  => $inputdata['class']);
//        $this->db->where('u_id', $user_id);
//        $this->db->update('user', $data);
//
//      if($filename!='' ){
//      $filename1 = explode(',',$filename);
//      foreach($filename1 as $file){
//      $file_data = array(
//      'image' => $file,
//      'user_id' => $user_id
//      );
//      $this->db->insert('photos', $file_data);
//      }
//      }
//    }

}